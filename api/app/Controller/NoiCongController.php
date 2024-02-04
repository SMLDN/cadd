<?php

namespace Zdn\Controller;

use Zdn\Model\Inner;
use Zdn\Core\Response;
use Zdn\Utility\ZdnString;
use Psr\Http\Message\ServerRequestInterface;

class NoiCongController
{

    public function detail(ServerRequestInterface $request, Response $response, $args)
    {
        $inner = $args["inner"];
        $level = $args["level"] ?? 1;
        if ($level <= 0) {
            $level = 1;
        }
        if (ZdnString::notEmpty($inner)) {
            $inner = Inner::with(["school", "detail" => function ($query) use ($level) {
                $query->where("level", $level);
            }])->where("slug", "=", $inner)->orderBy("id")->firstOrFail()->toArrayCamel();

            if ($inner != null && !empty($inner["detail"])) {
                $detail = $inner["detail"][0];
                $inner["detail"] = $detail;
                $effect = json_decode($inner["effect"] ?? null, false);
                if ($effect != null) {
                    $inner["detail"]["effectInfo"] = $effect[$detail["effectLevel"]];
                    unset($inner["effect"]);
                }

                $effectExt = json_decode($inner["effectExt"] ?? null, false);
                if ($effectExt != null) {
                    $inner["detail"]["effectExtInfo"] = $effectExt[$detail["effectLevel"]];
                    unset($inner["effectExt"]);
                }

                return $response->withJson($inner);
            }
        }
        return $response->withError("Request Error");
    }
}
