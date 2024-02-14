<?php
namespace App\Controller;

use Symfony\Component\String\u;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VinylController extends AbstractController
 {

    #[Route(path:"/", name:"app_homepage")]
    public function homepage(  ) : Response {

        $tracks = [
            ['song' => 'Gangsta\'s Paradise', 'artist' => 'Coolio'],
            ['song' => 'Waterfalls', 'artist' => 'TLC'],
            ['song' => 'Creep', 'artist' => 'Radiohead'],
            ['song' => 'Kiss from a Rose', 'artist' => 'Seal'],
            ['song' => 'On Bended Knee', 'artist' => 'Boyz II Men'],
            ['song' => 'Fantasy', 'artist' => 'Mariah Carey'],
        ];


        // //dd sirve para ver lo que hay dentro de un objeto y mata la pagina
        // dd($tracks);

        // //Con dump vemos lo mismo para no mata la pagina y nos muestro lo que hay dentro del objeto en la barra de depuracion del debug composer
        // dump($tracks);

        return $this->render('vinyl/homepage.html.twig', [
            'title' => 'PB & Jams',
            'tracks' => $tracks,
        ]);
    }


    // {slug} o la palabra que queramos será la palabra tecnica para designar un "Nombre seguro para la url y que lo conozca"
    #[Route(path:'/browse/{slug}', name:'app_browse')]       
    public function browse( string $slug = null) : Response {

    //    if( $slug) 
    //    {
       
    //     $title = 'Genre: ' .str_replace('-', ' ', $slug );
        
    // }
    // else {
    //     $title = 'Todos los generos';
    // }

       $genre = $slug ? str_replace('-', ' ', $slug )  : null;

        return $this->render('vinyl/browse.html.twig', [
            'genre'=> $genre,
        ]);

    }
}