<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AddUserController extends AbstractController
{
    /**
     * @Route("/add/user", name="add_user")
     */
    public function index(): Response
    {
        return $this->render('add_user/index.html.twig', [
            'controller_name' => 'AddUserController',
        ]);
    }

    public function showUsers($id) {
        $user=$this->getDoctrine()->getRepository('User')->find($id);


        if (empty($user)){
            $response=array(
                'code'=>1,
                'message'=>'post not found',
                'error'=>null,
                'result'=>null
            );

            return new JsonResponse($response, Response::HTTP_NOT_FOUND);
        }

        $data=$this->get('jms_serializer')->serialize($user,'json');


        $response=array(

            'code'=>0,
            'message'=>'success',
            'errors'=>null,
            'result'=>json_decode($data)

        );

        return new JsonResponse($response,200);
    }
}
