<?php

namespace Zdn\Controller;

use Zdn\Model\Set;
use Zdn\Model\Skill;
use Zdn\Core\Response;
use Zdn\Model\SkillDetail;
use Zdn\Utility\ZdnString;
use Zdn\Utility\ZdnCollection;
use Psr\Http\Message\ServerRequestInterface;

class VoCongController
{
    public function getAllSet(ServerRequestInterface $request, Response $response, $args)
    {
        return $response->withJson(ZdnCollection::toArrayCamel(Set::with(["initSkill"])->orderBy("id")->get()));
    }

    public function detail(ServerRequestInterface $request, Response $response, $args)
    {
        $voCong = $args["voCong"];
        $level = $args["level"] ?? 1;
        if ($level <= 0) {
            $level = 1;
        }
        if (ZdnString::notEmpty($voCong)) {
            $voCong = Skill::with(["detail" => function ($query) use ($level) {
                $query->where("level", $level);
            }])->where("slug", "=", $voCong)->firstOrFail()->toArrayCamel();
            $voCong["detail"] = $voCong["detail"][0];

            $set = Set::with("skillListAll")->findOrFail($voCong["setId"])->toArrayCamel();
            $voCong["set"] = $set;
            return $response->withJson($voCong);
        }
        return $response->withError("Param error");
    }
}
