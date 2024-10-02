<?php

namespace App\Service;

class MyExternalService
{
    public function renderHtml(): string
    {
        return "<html><body> En voila de l'HTML</body></html>";
    }
}