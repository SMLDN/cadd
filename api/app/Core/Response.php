<?php

namespace Zdn\Core;

use Nyholm\Psr7\Response as Psr7Response;

class Response extends Psr7Response
{

    public function withJson($data)
    {
        $payload = json_encode($data, JSON_UNESCAPED_UNICODE);
        $this->getBody()->write($payload);
        return $this->withHeader("Content-Type", "application/json; charset=utf-8");
    }

    public function withError($msg)
    {
        $payload = json_encode(["Error" => $msg], JSON_UNESCAPED_UNICODE);
        $this->getBody()->write($payload);
        return $this->withHeader("Content-Type", "application/json; charset=utf-8")->withStatus(400);
    }
}
