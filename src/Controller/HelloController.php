<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController
{   
    /* Definindo rota para a classe #Route, com isso vai abrir o "use" acima   */
    #[Route('/')]
    public function index(): Response
    {
        return new Response('Olá mundo!');
    }

    /* Definindo rota para a classe #Route, com isso vai abrir o "use" acima   */
    #[Route('/dinossauro')]
    public function dinossauro(): Response
    {
        return new Response('Olá dinossauro!');
    }

     /* Definindo rota para a classe #Route, com isso vai abrir o "use" acima   */
     #[Route('/mamifero')]
     public function mamifero(): Response
     {
         return new Response('Olá mamifero!');
     }

      /* Definindo rota para a classe #Route, com isso vai abrir o "use" acima   */
      #[Route('/invertebrados')]
      public function invertebrados(): Response
      {
          return new Response('Olá invertebrados!');
      }

       /* Definindo rota para a classe #Route, com isso vai abrir o "use" acima   */
       #[Route('/insetos')]
       public function insetos(): Response
       {
           return new Response('Olá insetos!');
       }

        /* Definindo rota para a classe #Route, com isso vai abrir o "use" acima   */
        #[Route('/aves')]
        public function aves(): Response
        {
            return new Response('Olá aves!');
        }
}