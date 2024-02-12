<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\u;

class VinylController {

    #[Route(path:"", name:"")]
    public function homepage() : Response {
        return new Response('Title: PB and Jams');
    }

    // {slug} o la palabra que queramos será la palabra tecnica para designar un "Nombre seguro para la url y que lo conozca"
    #[Route(path:'/browse/{slug}', name:'')]       
    public function browse( string $slug = null) : Response {

       if( $slug) 
       {
       
        $title = 'Genre: ' .str_replace('-', ' ', $slug );
        
    }
    else {
        $title = 'Todos los generos';
    }
        return new Response( $title );
    }
}