<?php

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
        return $this->render(
            'genus/show.html.twig',
            [
                'name' => $genusName,
            ]
        );
    }

    /**
     * @Route("genus/{genusName}/notes", name="genus_show_notes")
     * @Method("GET")
     */
    public function getNotesAction()
    {
        $notes = [
            [
                'id' => 1,
                'username' => 'AquaPelham',
                'avatarUri' => '/images/leanna.jpeg',
                'notes' => 'Octopus asked me a riddle , outsmarted me ',
                'date' => 'May. 31, 2018',
            ],
            [
                'id' => 2,
                'username' => 'AquaRyan',
                'avatarUri' => '/images/ryan.jpeg',
                'notes' => 'I counted 8 legs... as they wrapped around me ',
                'date' => 'May. 31, 2018',
            ],
            [
                'id' => 3,
                'username' => 'AquaPelham',
                'avatarUri' => '/images/leanna.jpeg',
                'notes' => 'Inked! ',
                'date' => 'May. 31, 2018',
            ],
            [
                'id' => 4,
                'username' => 'AquaPelham',
                'avatarUri' => '/images/leanna.jpeg',
                'notes' => 'Inked! ',
                'date' => 'May. 31, 2018',
            ],
            [
                'id' => 5,
                'username' => 'AquaPelham',
                'avatarUri' => '/images/leanna.jpeg',
                'notes' => 'Inked! ',
                'date' => 'May. 31, 2018',
            ],
        ];

        $data = [
            'notes' => $notes,
        ];

        return new JsonResponse($data);
    }
}