<?php
/**
 * Created by PhpStorm.
 * User: edvinassaltenis
 * Date: 15/10/2017
 * Time: 01:43
 */

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AboutController extends Controller
{

    /**
     * @Route("/about", name="about")
     */
    public function showAction(){
        $user = $this->getUser();

        return $this->render('default/about.html.twig', [
            'user' => $user
        ]);
    }
}