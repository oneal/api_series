<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class SeriesController extends AbstractController
{
    #[Route('/series/get/{id}', name: 'get_serie')]
    public function get(): JsonResponse
    {
        return $this->json([
        ]);
    }

    #[Route('/series/edit/{id}', name: 'edit_serie')]
    public function put(): JsonResponse
    {
        return $this->json([
        ]);
    }

    #[Route('/series/add', name: 'add_serie')]
    public function post(): JsonResponse
    {
        return $this->json([
        ]);
    }

    #[Route('/series/delete/{id}', name: 'add_serie')]
    public function delete(): JsonResponse
    {
        return $this->json([
        ]);
    }
}
