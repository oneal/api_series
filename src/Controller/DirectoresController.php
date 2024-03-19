<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class DirectoresController extends AbstractController
{
    #[Route('/directores/get{id}', name: 'get_director')]
    public function get(): JsonResponse
    {
        return $this->json([
        ]);
    }

    #[Route('/directores/edit/{id}', name: 'edit_director')]
    public function put(): JsonResponse
    {
        return $this->json([
        ]);
    }

    #[Route('/directores/add', name: 'add_director')]
    public function post(): JsonResponse
    {
        return $this->json([
        ]);
    }

    #[Route('/directores/delete/{id}', name: 'delete_director')]
    public function delete(): JsonResponse
    {
        return $this->json([
        ]);
    }
}
