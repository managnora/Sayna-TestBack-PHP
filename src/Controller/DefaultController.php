<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;

class DefaultController extends AbstractController
{
    /**
     * @return JsonResponse
     */
    public function index (): JsonResponse
    {
        return new JsonResponse("Envoi de la page index.html", 200);
     }
}