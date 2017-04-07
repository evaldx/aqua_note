<?php
/**
 * Created by PhpStorm.
 * User: evalds
 * Date: 17.7.4
 * Time: 16:42
 */

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MainController extends Controller
{
    public function homepageAction(){
        return $this->render('main/homepage.html.twig');
    }
}