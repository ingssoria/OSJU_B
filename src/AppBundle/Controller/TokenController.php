<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\Security\Core\Exception\BadCredentialsException;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;


class TokenController extends Controller
{
    /**
     * @Route("/api/tokens")
     * @Method("POST")
     */
    public function newTokenAction(Request $request){
        $restresult = null;
        $login = $request->get('name');
        $pass = $request->get('pass');
        $un = $request->get('un');

        $user = $this->getUserbyLogin($login);

        if($user){
            if($user[0]["contrasenna"] == $pass){
                $restresult = $this->get('lexik_jwt_authentication.encoder')
                    ->encode([
                        'username' => $request->get('name'),
                        'password' => $user[0]["contrasenna"],/*$request->get('pass'),*/
                        'uNegocio' => $request->get('un'),
                        'exp' => time() + 3600
                    ]);
            }
            else
                throw new BadCredentialsException("Contraseña invalida");
        }
        else{
            throw new BadCredentialsException("Usuario no registrado");
        }

        return new JsonResponse(['token' => $restresult, 'uNegocio' => $request->get('un')]);
    }

    function getUserbyLogin($login){

        $repository_user = $this->getDoctrine()->getRepository('AppBundle:SUsuario');
        $q = $repository_user->createQueryBuilder('p')
            ->select('p.usuario', 'm.contrasenna')
            ->leftJoin('AppBundle:SMembresia', 'm', 'WITH',  'p.idUsuario = m.idUsuario')
            ->where('p.usuario = :login')
            ->setParameter('login', $login)
            ->getQuery();


        $restresult = $q->getResult();
        return $restresult;

    }

    function getToken($user){
        $token_result = null;
        if($user)
            $token_result = "Login OK ". base64_encode($user[0]["login"].$user[0]["password"]);

        return $token_result;
    }

}
