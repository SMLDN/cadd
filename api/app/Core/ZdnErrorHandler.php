<?php

namespace Zdn\Core;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Slim\Interfaces\ErrorHandlerInterface;
use Throwable;

class ZdnErrorHandler implements ErrorHandlerInterface
{
    private $responseFactory;

    public function __construct($responseFactory)
    {
        $this->responseFactory = $responseFactory;
    }

    public function __invoke(
        ServerRequestInterface $request,
        Throwable $exception,
        bool $displayErrorDetails,
        bool $logErrors,
        bool $logErrorDetails
    ): ResponseInterface {
        $response = $this->responseFactory->createResponse(500);
        return $response->withError("Param error");
    }
}
