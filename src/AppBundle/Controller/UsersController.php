<?php
/**
 * Created by PhpStorm.
 * User: nenis
 * Date: 1/4/2018
 * Time: 02:36
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\View\View;
use AppBundle\Entity\users;
use Symfony\Component\HttpFoundation\JsonResponse;

class UsersController extends FOSRestController
{
    /**
     * @Rest\Post("/api/login")
     */
    public function loginAction(Request $request){

        $restresult = null;
        $login = $request->get('name');
        $pass = $request->get('pass');

        $user = $this->getUserbyLogin($login);

        if($user){
            if($user[0]["password"] == $pass){
                $token = $this->get('lexik_jwt_authentication.encoder')
                    ->encode([
                        'username' => $request->get('name'),
                        'password' => $request->get('pass'),
                        'exp' => time() + 3600
                    ]);
            }
                /*$restresult = $this->getToken($user);*/
            else
                $restresult = "Revise su Contraseña";
        }
        else{
            $restresult = "Usuario no registrado";
        }

        //return new View($restresult,Response::HTTP_ACCEPTED);




        /*$restresult = $this->getDoctrine()->getRepository('AppBundle:users')->findAll();
        $query = $repository_user->createQueryBuilder('p')
            ->select('p.user_id')
            ->where('p.login = :login')
            ->getQuery();
        $query->setParameter('login', 'master');
        $restresult = $query->getResult();*/
    }

    /**
     * @Rest\Get("/api/users")
     */
    function getUserbyLogin($login){

        $repository_user = $this->getDoctrine()->getRepository('AppBundle:users');
        $q = $repository_user->createQueryBuilder('p')
            ->select('p.login', 'm.password', 'm.createdate')
            ->leftJoin('AppBundle:membership', 'm', 'WITH',  'p.user_id = m.user_id')
            ->where('p.login = :login')
            ->setParameter('login', $login)
            ->getQuery();
        $restresult = $q->getResult();

        /*if($restresult == null){
            return new View("No existen usuarios",Response::HTTP_NOT_FOUND);
        }
        return new View($restresult,Response::HTTP_ACCEPTED);*/

        return $restresult;

    }

    function getToken($user){
        $token_result = null;
        if($user)
            $token_result = "Login OK ". base64_encode($user[0]["login"].$user[0]["password"]);

        return $token_result;
    }

    /*eccriptar pass antes de guardar en bd. Tomado de : http://librosweb.es/foro/pregunta/79/bad-credentials-al-hacer-login/*/
    public function getSalt()
    {
        return base_convert(sha1(uniqid(mt_rand(), true)), 16, 36);
    }


}