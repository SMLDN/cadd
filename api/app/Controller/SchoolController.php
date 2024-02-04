<?php

namespace Zdn\Controller;

use Zdn\Model\School;
use Zdn\Core\Response;
use Psr\Http\Message\ServerRequestInterface;
use Zdn\Utility\ZdnCollection;

class SchoolController
{
    public function getAll(ServerRequestInterface $request, Response $response, $args)
    {
        return $response->withJson(ZdnCollection::toArrayCamel(School::with(["innerList"])->get()));
    }
}
