<?php

use Zdn\Core\DbManager;
use Zdn\Core\DiceContainer;
use Slim\Factory\AppFactory;
use Zdn\Controller\HomeController;
use Zdn\Controller\SchoolController;

$container = new DiceContainer();
$container->set(HomeController::class);
$container->set(SchoolController::class);
$container->set(DbManager::class);

AppFactory::setContainer($container);
