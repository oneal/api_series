<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class ActoresController extends AbstractController
{
    #[Route('/actores/get/{id}', name: 'get_actor')]
    public function get(): JsonResponse
    {
        return $this->json([
        ]);
    }

    #[Route('/actores/edit/{id}', name: 'edit_actor')]
    public function put(): JsonResponse
    {
        return $this->json([
        ]);
    }

    #[Route('/actores/add', name: 'add_actores')]
    public function post(): JsonResponse
    {
        return $this->json([
        ]);
    }

    #[Route('/actores/delete/{id}', name: 'delete_actores')]
    public function delete(): JsonResponse
    {
        return $this->json([
        ]);
    }
}
