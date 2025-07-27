<?php

namespace Zdn\Controller;

use Zdn\Model\Set;
use Zdn\Model\Inner;
use Zdn\Core\Response;
use Zdn\Utility\ZdnCollection;
use TeamTNT\TNTSearch\TNTSearch;
use Illuminate\Database\Capsule\Manager;
use TeamTNT\TNTSearch\Stemmer\NoStemmer;
use Psr\Http\Message\ServerRequestInterface;

class SearchController
{
    protected $engine;

    public function __construct(TNTSearch $engine)
    {
        $this->engine = $engine;

        $config = [
            "driver" => "pgsql",
            // "host" => $_ENV["DB_HOST"],
            "database" => $_ENV["DB_DATABASE"],
            "username" => $_ENV["DB_USERNAME"],
            "password" => $_ENV["DB_PASSWORD"],
            "storage" => $_ENV["TNT_INDEX_PATH"],
            "stemmer" => NoStemmer::class, //optional
        ];


        if (!empty($_ENV["DB_HOST"])) {
            $config["host"] = $_ENV["DB_HOST"];
        }

        $this->engine->loadConfig($config);
    }

    public function searchByKeyword(ServerRequestInterface $request, Response $response, $args)
    {
        $params = $request->getQueryParams();
        if (empty($params["q"])) {
            return $response->withJson([]);
        }

        $ret = [];

        $this->engine->selectIndex("inner.index");
        $innerRes = $this->engine->search($params["q"], 5);

        $innerIdList = $innerRes["ids"];

        if (count($innerIdList) > 0) {

            $innerList = Inner::whereIn("id", $innerIdList)
                ->orderBy(Manager::connection()
                    ->raw($this->getOrderByField($innerIdList)))->with(["school" => function ($q) {
                    $q->select("id", "name");
                }])
                // ->get(["id", "slug", "name", "photo", "desc"]);
                ->get();

            $rawList = ZdnCollection::toArrayCamel($innerList);

            foreach ($rawList as  $item) {
                array_push($ret, [
                    "kind" => "inner",
                    "name" => $item["name"],
                    "slug" => $item["slug"],
                    "maxLevel" => $item["maxLevel"],
                    "desc" => $item["desc"],
                    "photo" => $item["photo"],
                    "schoolName" => $item["school"]["name"],
                ]);
            }
        }

        $this->engine->selectIndex("skill.index");
        $skillRes = $this->engine->search($params["q"], 5);

        $skillIdist = $skillRes["ids"];

        if (count($skillIdist) > 0) {

            $skillList = Set::whereIn("id", $skillIdist)
                ->orderBy(Manager::connection()
                    ->raw($this->getOrderByField($skillIdist)))
                ->with("initSkill")
                ->get();

            $rawList = ZdnCollection::toArrayCamel($skillList);

            foreach ($rawList as  $item) {
                array_push($ret, [
                    "kind" => "skill",
                    "name" => $item["name"],
                    "slug" => $item["initSkill"]["slug"],
                    "maxLevel" => $item["initSkill"]["maxLevel"],
                    "photo" => $item["initSkill"]["photo"],
                ]);
            }
        }

        return $response->withJson($ret);
    }

    private function getOrderByField($idList)
    {
        $reversed = array_reverse($idList);
        $str = "id = ";
        $str .= implode(", id = ", $reversed);
        return $str;
    }
}
