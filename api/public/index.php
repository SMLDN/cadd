<?php

use Zdn\Core\DiceContainer;
use Slim\Factory\AppFactory;
use Zdn\Core\ResponseFactory;
use Zdn\Controller\HomeController;
use Zdn\Core\DbManager;

require __DIR__ . '/../vendor/autoload.php';

require_once "../req/init.php";

require_once "../req/container.php";

require_once "../req/app.php";

require_once "../req/route.php";

$app->run();
