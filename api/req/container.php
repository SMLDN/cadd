<?php

use Zdn\Core\DbManager;
use Zdn\Core\DiceContainer;
use Slim\Factory\AppFactory;
use TeamTNT\TNTSearch\TNTSearch;
use Zdn\Controller\HomeController;
use Zdn\Controller\SchoolController;
use Zdn\Controller\SearchController;
use Zdn\Controller\VoCongController;

$container = new DiceContainer();
$container->set(HomeController::class);
$container->set(SchoolController::class);
$container->set(VoCongController::class);
$container->set(SearchController::class);
$container->set(DbManager::class);
// $container->set(TNTSearch::class);

AppFactory::setContainer($container);
