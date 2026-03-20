<?php

 namespace App\Controller;


 use Symfony\Component\HttpFoundation\Response;


 final class AdvertController
	 {

        public function index()
        {
          $content="Notre propre Hello World !";
          return new Response($content);
        }
 }
