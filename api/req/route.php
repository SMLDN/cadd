<?php

use Zdn\Utility\ZdnString;
use Zdn\Controller\HomeController;
use Slim\Routing\RouteCollectorProxy;
use Zdn\Controller\KinhMachController;
use Zdn\Controller\NoiCongController;
use Zdn\Controller\SchoolController;
use Zdn\Controller\VoCongController;

$app->group("/api", function (RouteCollectorProxy $apiGroup) {
    $apiGroup->get("/", HomeController::class . ":index");

    $apiGroup->group("/noi-cong", function (RouteCollectorProxy $ncGroup) {
        $ncGroup->group("/{inner:" . ZdnString::SLUG_PATTERN . "}", function (RouteCollectorProxy $g) {
            $g->get("", NoiCongController::class . ":detail")->setName("noi-cong.detail0");
            $g->get("/{level:[0-9]*}", NoiCongController::class . ":detail")->setName("noi-cong.detail");
        });
    });

    $apiGroup->group("/school", function (RouteCollectorProxy $schoolGroup) {
        $schoolGroup->get("/", SchoolController::class . ":getAll");
    });

    $apiGroup->group("/kinh-mach", function (RouteCollectorProxy $kmGroup) {
        $kmGroup->get("/", KinhMachController::class . ":getAll");
        $kmGroup->group("/{kinhMach:" . ZdnString::SLUG_PATTERN . "}", function (RouteCollectorProxy $g) {
            $g->get("/{level:[0-9]*}", KinhMachController::class . ":detail");
        });
    });

    $apiGroup->group("/set", function (RouteCollectorProxy $schoolGroup) {
        $schoolGroup->get("/", VoCongController::class . ":getAllSet");
    });

    $apiGroup->group("/vo-cong", function (RouteCollectorProxy $vcGroup) {
        $vcGroup->group("/{voCong:" . ZdnString::SLUG_PATTERN . "}", function (RouteCollectorProxy $g) {
            $g->get("/{level:[0-9]*}", VoCongController::class . ":detail");
        });
    });
});
