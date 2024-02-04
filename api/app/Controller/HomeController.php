<?php

namespace Zdn\Controller;

use Zdn\Core\Response;
use Zdn\Core\DbManager;
use Zdn\Model\KinhMach;
use Psr\Http\Message\ServerRequestInterface;
use Zdn\Utility\ZdnCollection;

class HomeController
{
    public function __construct(private DbManager $db)
    {
    }

    public function index(ServerRequestInterface $request, Response $response, $args)
    {
        return $response->withJson(ZdnCollection::toArrayCamel(KinhMach::get()));
    }
}
