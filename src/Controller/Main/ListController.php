<?php
declare(strict_types=1);

namespace App\Controller\Main;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;


class ListController extends AbstractController
{
    public function collection() : Response
    {
        $entityManager = $this->getDoctrine()->getManager();

        $user = new User();
        $user->setFirstName('Louis');
        $user->setLastName('Louis');
        $entityManager->persist($user);
        $entityManager->flush();

        return new Response('salut c\'est cool');
    }
}