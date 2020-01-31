<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function index()
    {
        return $this->render('index/index.html.twig', [
            'controller_name' => 'ou est Fatna ??',
        ]);
    }

    /**
     * localhost:8000/hello
     * url de la page
     * @route("/hello")
     */
    public function hello()
    {
        return $this->render('index/hello.html.twig');
    }

    /**
     * @route("/bonjour/{qui}")
     */
    public function bonjour($qui)
    {
        //echo $qui;
        return $this->render(
            'index/bonjour.html.twig',
            [
               'nom'=>$qui
            ]
        );
    }

    /**
     * @route("/salut/{qui}",defaults={"qui":"a toi"})
     */
    public function salut($qui)
    {
        return $this->render(
            'index/salut.html.twig',
            [
                'qui'=>$qui
            ]
        );
    }
}
