<?php
/**
 * Created by PhpStorm.
 * User: Julien Van Linthout
 * Date: 14/11/2018
 * Time: 11:27
 */

namespace App\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

class HomeController
{
    /**
     * @Route("/")
     */

    public function index(Environment $twig){
        return new Response($twig->render('pages/home.html.twig'));
    }
}