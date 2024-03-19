<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class EpisodiosController extends AbstractController
{
    #[Route('/episodios/get/{id}', name: 'get_episodio')]
    public function get(): JsonResponse
    {
        return $this->json([
        ]);
    }

    #[Route('/episodios/edit/{id}', name: 'edit_episodio')]
    public function put(): JsonResponse
    {
        return $this->json([
        ]);
    }

    #[Route('/episodios/add/{id}', name: 'add_episodio')]
    public function post(): JsonResponse
    {
        return $this->json([
        ]);
    }

    #[Route('/episodios/delete/{id}', name: 'delete_episodio')]
    public function delete(): JsonResponse
    {
        return $this->json([
        ]);
    }
}
