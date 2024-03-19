<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class TemporadasController extends AbstractController
{
    #[Route('/temporadas/get/{id}', name: 'get_temporada')]
    public function get(): JsonResponse
    {
        return $this->json([
        ]);
    }

    #[Route('/temporadas/edit/{id}', name: 'put_temporada')]
    public function put(): JsonResponse
    {
        return $this->json([
        ]);
    }

    #[Route('/temporadas/add', name: 'add_temporada')]
    public function add(): JsonResponse
    {
        return $this->json([
        ]);
    }

    #[Route('/temporadas/delete/{id}', name: 'delete_temporada')]
    public function delete(): JsonResponse
    {
        return $this->json([
        ]);
    }
}
