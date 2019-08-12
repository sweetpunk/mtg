<?php
declare(strict_types=1);

namespace App\Controller\Main;

use Symfony\Component\HttpFoundation\Response;


class ListController
{
    public function collection() : Response
    {
        return new Response('salut c\'est cool');
    }
}