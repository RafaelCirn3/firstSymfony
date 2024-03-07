<?php

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Request;
class CompanyController extends AbstractController
{
    // ! Tem como criar um prefixo global no routes.yml
    #[Route('/company', name: 'company_list', methods: ['GET'])]
    public function index(): JsonResponse
    {
        return $this->json([
            'message' => "amo minha mulher",
        ]);
    }
    #[Route('/company', name: 'company_create', methods: ['POST'])]
    public function create(Request $request): JsonResponse
    {
        return $this->json([
            'message' => 'Nova empresa inserida com sucesso',
        ]);
    }
    #[Route('/company', name: 'company_update', methods: ['PUT'])]
    public function update(Request $request): JsonResponse
    {
        return $this->json([
            'message' => 'Empresa atualizada com sucesso',
        ]);
    }
    #[Route('/company', name: 'company_delete', methods: ['DELETE'])]
    public function delete(Request $request): JsonResponse
    {
        return $this->json([
            'message' => 'Empresa deletada com sucesso',
        ]);
    }
}
