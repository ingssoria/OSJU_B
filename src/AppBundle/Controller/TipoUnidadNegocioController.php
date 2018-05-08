<?php
/**
 * Created by PhpStorm.
 * User: nenis
 * Date: 1/4/2018
 * Time: 02:36
 */

namespace AppBundle\Controller;

use AppBundle\Entity\NUnidadNegocio;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\View\View;
use AppBundle\Entity\users;
use Symfony\Component\HttpFoundation\JsonResponse;

class TipoUnidadNegocioController extends FOSRestController
{
    /**
     * @Rest\Get("/api/tipounidadnegocio")
     */
    function getAction(){

        $restresult = $this->getDoctrine()->getRepository('AppBundle:NUnidadNegocio')->findAll();

        /*$repository = $this->getDoctrine()->getRepository('AppBundle:UnidadNegocio');
        $q = $repository->createQueryBuilder('un')
            ->select('un.idUnidadNegocio', 'un.nombre as nombreUnidadNegocio', 'tun.nombre as tipoUnidadNegocio')
            ->leftJoin('AppBundle:NUnidadNegocio', 'tun', 'WITH',  'un.idTipoUnidadNegocio = tun.idTipoUnidadNegocio')
            ->getQuery();
        $restresult = $q->getResult();*/

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
     * @Rest\Get("/api/tipounidadnegocio/{id}")
     */
    public function getByIdAction($id){
        $singleresult = $this->getDoctrine()->getRepository('AppBundle:UnidadNegocio')->find($id);
        if($singleresult === null){
            return new View("No existe la unidad de negocio", Response::HTTP_NOT_FOUND);
        }
        return new View($singleresult, Response::HTTP_ACCEPTED);
    }

    /**
     * @Rest\Post("/api/tipounidadnegocio")
     */
    public function postAction(Request $request){
        $data = new UnidadNegocio();
        $titulo = $request->get('nombre');
        $descripcion = $request->get('descripcion');
        $thumbnail = $request->get('thumbnail');
        $img_link = $request->get('img_link');
        $userId = 1;

        /*if(empty($titulo) || empty($thumbnail)){
            return new View("NULL VALUES ARE NOT ALLOWED", Response::HTTP_NOT_ACCEPTABLE);
        }

        $data->setTitulo($titulo);
        $data->setDescripcion($descripcion);
        $data->setThumbnail($thumbnail);
        $data->setImgLink($img_link);
        $data->setUserId($userId);

        $em = $this->getDoctrine()->getManager();
        $em->persist($data);
        $em->flush();*/

        return new View("User Added Successfully", Response::HTTP_OK);
    }

    /**
     * @Rest\Put("/api/tipounidadnegocio/{id}")
     */
    public function updateAction($id, Request $request){

        $titulo = $request->get('titulo');
        $descripcion = $request->get('descripcion');
        $thumbnail = $request->get('thumbnail');
        $img_link = $request->get('img_link');

        if(empty($titulo) || empty($thumbnail)){
            return new View("NULL VALUES ARE NOT ALLOWED", Response::HTTP_NOT_ACCEPTABLE);
        }

        $tipounidadNegocio = $this->getDoctrine()->getRepository('AppBundle:NUnidadNegocio')->find($id);

        if($tipounidadNegocio === null){
            return new View("La UN ya no se encuentra disponible", Response::HTTP_NOT_FOUND);
        }

        $tipounidadNegocio->setTitulo($titulo);
        $tipounidadNegocio->setDescripcion($descripcion);
        $tipounidadNegocio->setThumbnail($thumbnail);
        $tipounidadNegocio->setImgLink($img_link);

        $em = $this->getDoctrine()->getManager();
        $em->flush();

        return new View("Los datos del tipo de UN fueron actualizados", Response::HTTP_CREATED);
    }

    /**
     * @Rest\Delete("/api/tipounidadnegocio/{id}")
     */
    public function deleteAction($id){
        $tipounidadNegocio = $this->getDoctrine()->getRepository('AppBundle:NUnidadNegocio')->find($id);
        if($tipounidadNegocio === null){
            return new View("El tipo de UN ya no se encuentra disponible", Response::HTTP_NOT_FOUND);
        }

        $em = $this->getDoctrine()->getManager();
        $em->remove($tipounidadNegocio);
        $em->flush();

        return new View("El tipo de UN fue eliminado", Response::HTTP_OK);
    }
}