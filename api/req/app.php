<?php

use Slim\Factory\AppFactory;
use Zdn\Core\ResponseFactory;
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
