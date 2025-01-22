<?php
 namespace App\Controller;
 use Symfony\Component\HttpFoundation\Response;
 use Symfony\Component\Routing\Annotation\Route;
 class RGCController
 {
 #[Route('/api/rgc', name: 'api_rgc')]
 public function index(): Response
 {
 return new Response('Symfony de Raúl González Caro Responde a la llamada de 
React');
 }
 }