<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Service\MyExternalService;

class SnippetInjectionController extends AbstractController
{
    private MyExternalService $localExternalService;

    public function __construct(MyExternalService $externalService)
    {
        $this->localExternalService = $externalService;
    }

    #[Route('/snippet/injection', name: 'app_snippet_injection')]
    public function index(): Response
    {
        return new Response($this->localExternalService->renderHtml());
    }
}
