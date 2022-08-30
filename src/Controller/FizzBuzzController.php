<?php

namespace App\Controller;

use App\FizzBuzzService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FizzBuzzController extends AbstractController
{
    /**
     * @Route("/", name="app_fizz_buzz")
     */
    public function getFizzBuzzOutputAction(FizzBuzzService $fizzBuzzService): Response
    {
        $fizzBuzzOutput = $fizzBuzzService->getFizzBuzzOutput();

        return $this->render('fizz_buzz/index.html.twig', [
            'controller_name' => 'FizzBuzzController',
            'output_data' => $fizzBuzzOutput
        ]);
    }
}
