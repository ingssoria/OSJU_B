<?php
/**
 * Created by PhpStorm.
 * User: nenis
 * Date: 1/4/2018
 * Time: 02:36
 */

namespace AppBundle\Controller;

use AppBundle\Entity\UnidadNegocio;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\View\View;
use AppBundle\Entity\users;
use Symfony\Component\HttpFoundation\JsonResponse;

class UnidadNegocioController extends FOSRestController
{
    /**
     * @Rest\Get("/api/unidadnegocio")
     */
    function getAction(){

        /*$restresult = $this->getDoctrine()->getRepository('AppBundle:UnidadNegocio')->findAll();*/

        $repository = $this->getDoctrine()->getRepository('AppBundle:UnidadNegocio');
        $q = $repository->createQueryBuilder('un')
            ->select('un.idUnidadNegocio', 'un.nombre as nombreUnidadNegocio', 'tun.nombre as tipoUnidadNegocio')
            ->leftJoin('AppBundle:NUnidadNegocio', 'tun', 'WITH',  'un.idTipoUnidadNegocio = tun.idTipoUnidadNegocio')
            ->orderBy('un.idUnidadNegocio', 'ASC')
            ->getQuery();/**/
        $restresult = $q->getResult();

/*
        ->select('p.usuario', 'm.contrasenna')
            ->leftJoin('AppBundle:SMembresia', 'm', 'WITH',  'p.idUsuario = m.idUsuario')$idTipoUnidadNegocio
            ->where('p.usuario = :login')
            ->setParameter('login', $login)*/

        if($restresult == null){
            return new View("No existen unidades de negocio",Response::HTTP_NOT_FOUND);
        }
        return new View($restresult,Response::HTTP_ACCEPTED);
    }

    /**
     * @Rest\Get("/api/unidadnegocio/{id}")
     */
    public function getByIdAction($id){
        $singleresult = $this->getDoctrine()->getRepository('AppBundle:UnidadNegocio')->find($id);
        if($singleresult === null){
            return new View("No existe la unidad de negocio", Response::HTTP_NOT_FOUND);
        }
        return new View($singleresult, Response::HTTP_ACCEPTED);
    }

    /**
     * @Rest\Post("/api/unidadnegocio")
     */
    public function postAction(Request $request){
        $data = new UnidadNegocio();
        $nombre = $request->get('nombre');
        $id_tipo_unidadnegocio = $this->getDoctrine()->getRepository('AppBundle:NUnidadNegocio')->find($request->get('id_tipo_unidadnegocio'));

        /*if(empty($titulo) || empty($thumbnail)){
            return new View("NULL VALUES ARE NOT ALLOWED", Response::HTTP_NOT_ACCEPTABLE);
        }*/

        $data->setNombre($nombre);
        $data->setIdTipoUnidadNegocio($id_tipo_unidadnegocio);

        $em = $this->getDoctrine()->getManager();
        $em->persist($data);
        $em->flush();

        return new View($data/*"Unidad de Negogocio Added Successfully"*/, Response::HTTP_OK);
    }

    /**
     * @Rest\Post("/api/deleteUN")
     */
    public function deleteUNAction(Request $request){

        //$a = $request->get(0)['idUnidadNegocio'];
        $em = $this->getDoctrine()->getManager();

        $a = "";
        foreach ($request as $r){
            $a[] = $r;
        }
        /*$unidadNegocio = $this->getDoctrine()->getRepository('AppBundle:UnidadNegocio')->find($id);
        if($unidadNegocio === null){
            return new View("La UN ya no se encuentra disponible", Response::HTTP_NOT_FOUND);
        }
        $em->remove($unidadNegocio);
        $em->flush();*/

        return new View($a/*"La UN fue eliminada"*/, Response::HTTP_OK);
    }

    /**
     * @Rest\Put("/api/unidadnegocio/{id}")
     */
    public function updateAction($id, Request $request){

        $nombre = $request->get('nombre');
        $id_tipo_unidadnegocio = $this->getDoctrine()->getRepository('AppBundle:NUnidadNegocio')->find($request->get('id_tipo_unidadnegocio'));

        $unidadNegocio = $this->getDoctrine()->getRepository('AppBundle:UnidadNegocio')->find($id);

        /*$titulo = $request->get('titulo');
        $descripcion = $request->get('descripcion');
        $thumbnail = $request->get('thumbnail');
        $img_link = $request->get('img_link');

        if(empty($titulo) || empty($thumbnail)){
            return new View("NULL VALUES ARE NOT ALLOWED", Response::HTTP_NOT_ACCEPTABLE);
        }



        if($unidadNegocio === null){
            return new View("La UN ya no se encuentra disponible", Response::HTTP_NOT_FOUND);
        }*/

        $unidadNegocio->setNombre($nombre);
        $unidadNegocio->setIdTipoUnidadNegocio($id_tipo_unidadnegocio);

        $em = $this->getDoctrine()->getManager();
        $em->flush();/**/

        return new View($unidadNegocio/*"Los datos de la UN fueron actualizados"*/, Response::HTTP_CREATED);
    }

    /**
     * @Rest\Delete("/api/unidadnegocio/{id}")
     */
    public function deleteAction($id){
        $unidadNegocio = $this->getDoctrine()->getRepository('AppBundle:UnidadNegocio')->find($id);
        if($unidadNegocio === null){
            return new View("La UN ya no se encuentra disponible", Response::HTTP_NOT_FOUND);
        }

        $em = $this->getDoctrine()->getManager();
        $em->remove($unidadNegocio);
        $em->flush();

        return new View("La UN fue eliminada", Response::HTTP_OK);
    }
}