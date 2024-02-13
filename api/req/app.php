<?php

use Slim\Factory\AppFactory;
use Zdn\Core\ResponseFactory;
use Zdn\Core\ZdnErrorHandler;
use Slim\Middleware\ErrorMiddleware;


AppFactory::setResponseFactory(new ResponseFactory());

$app = AppFactory::create();


$errorMiddleware = new ErrorMiddleware(
    $app->getCallableResolver(),
    $app->getResponseFactory(),
    true,
    true,
    true
);

$app->add($errorMiddleware);

// if ($_ENV["MODE"] == "production") {
    $errorMiddleware->setDefaultErrorHandler(new ZdnErrorHandler($app->getResponseFactory()));
// }
