<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response; // Add this line
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{
    #[Route('/', name: 'api_data')]
    public function getData(): JsonResponse
    {
        $data = [
            'status' => 'success',
            'message' => 'Data retrieved successfully',
            'data' => [
                'item1' => 'value1',
                'item2' => 'value2',
            ],
        ];

        return new JsonResponse($data);
    }
}
