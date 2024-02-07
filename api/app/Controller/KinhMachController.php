<?php

namespace Zdn\Controller;

use Zdn\Core\Response;
use Zdn\Model\KinhMach;
use Zdn\Utility\ZdnString;
use Zdn\Utility\ZdnCollection;
use Psr\Http\Message\ServerRequestInterface;

class KinhMachController
{

    public function getAll(ServerRequestInterface $request, Response $response, $args)
    {
        return $response->withJson(ZdnCollection::toArrayCamel(KinhMach::select(["id", "name", "slug", "max_level"])->get()));
    }

    public function detail(ServerRequestInterface $request, Response $response, $args)
    {
        $kinhMach = $args["kinhMach"];
        $level = $args["level"] ?? 1;
        if ($level <= 0) {
            $level = 1;
        }

        $kinhMach = KinhMach::with(["detail" => function($query) use ($level){
            $query->where("level", $level);
        }, "school"])->where("slug", "=", $kinhMach)->orderBy("id")->firstOrFail()->toArrayCamel();

        if ($kinhMach != null && !empty($kinhMach["detail"])) {
            $detail = $kinhMach["detail"][0];
            $kinhMach["detail"] = $detail;
            return $response->withJson($kinhMach);
        }
        
        return $response->withError("Param error");
    }
}
