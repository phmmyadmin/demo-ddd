<?php

declare(strict_types=1);

namespace CodelyTv\Apps\Mooc\Backend\Controller\HealthCheck;

use Symfony\Component\HttpFoundation\JsonResponse;

class HealthCheckGetController
{
    public function __invoke(): JsonResponse
    {
        return new JsonResponse([
            'status' => 'ok'
        ]);
    }
}