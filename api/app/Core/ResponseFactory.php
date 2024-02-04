<?php

namespace Zdn\Core;

use Zdn\Core\Response;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ResponseFactoryInterface;


class ResponseFactory implements ResponseFactoryInterface
{
    protected $router;

    /**
     * {@inheritdoc}
     */
    public function createResponse(
        int $code = 200,
        string $reasonPhrase = ''
    ): ResponseInterface {
        $res = new Response($code);
        if ($reasonPhrase !== '') {
            $res = $res->withStatus($code, $reasonPhrase);
        }

        return $res;
    }
}
