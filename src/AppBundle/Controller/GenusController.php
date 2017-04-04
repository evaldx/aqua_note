<?php
/**
 * Created by PhpStorm.
 * User: evalds
 * Date: 17.4.4
 * Time: 16:07
 */

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class GenusController extends Controller
{
    /**
     * @Route("/genus/{genusName}")
     */
    public function showAction($genusName)
    {

        return $this->render('genus/show.html.twig', [
            'name' => $genusName
        ]);

    }
}