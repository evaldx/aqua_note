<?php
/**
 * Created by PhpStorm.
 * User: evalds
 * Date: 17.4.4
 * Time: 16:07
 */

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class GenusController extends Controller
{
    /**
     * @Route("/genus/{genusName}")
     */
    public function showAction($genusName)
    {
        $funFact = 'Octopuses can change the color of their body in just *three-tenths* of a second!';

        $cache = $this->get('doctrine_cache.providers.my_evald_cache');
        $key = md5($funFact);
        if($cache->contains($key)){
            $funFact = $cache->fetch($key);
        }else{
            sleep(1);
            $funFact = $this->get('markdown.parser')
                ->transform($funFact);
            $cache->save($key, $funFact);
        }



        return $this->render('genus/show.html.twig', [
            'name' => $genusName,
            'funFact' => $funFact,
        ]);

    }

    /**
     * @Route("/genus/{genusName}/notes", name="genus_show_notes")
     * @Method("GET")
     */

    public function getNotesAction()
    {
        $notes = [
            ['id'=>1, 'username' => 'AquaPelham', 'avatarUri' => '/images/leanna.jpeg', 'note' => 'Octopus asked', 'date' => 'Dec. 10, 2017'],
            ['id'=>2, 'username' => 'AquaWeaver', 'avatarUri' => '/images/ryan.jpeg', 'note' => 'Octopus asked', 'date' => 'Dec. 11, 2017'],
            ['id'=>3, 'username' => 'AquaPelahm', 'avatarUri' => '/images/leanna.jpeg', 'note' => 'Inked!', 'date' => 'Aug. 20, 2017']
        ];

        $data = [
            'notes' => $notes,
        ];

        return new JsonResponse($data);
    }
}