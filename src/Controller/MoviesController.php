<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MoviesController
{
    /**
     * @Route("/")
     */
    public function homepage()
    {
        return new Response('Movie List');
    }

    /**
     * @Route("/movies/{slug}")
     */
    public function show($slug)
    {
        return new Response(sprintf(
            '%s',
            ucwords(str_replace('-', ' ', $slug))
            ));
    }
}