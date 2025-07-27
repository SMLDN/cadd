<?php

require __DIR__ . "/../vendor/autoload.php";

use Dotenv\Dotenv;
use TeamTNT\TNTSearch\TNTSearch;
use StandAlone\VietnameseTokenizer;
use TeamTNT\TNTSearch\Stemmer\NoStemmer;

$dotenv = Dotenv::createImmutable(__DIR__ . "/../");
$dotenv->load();

$tnt = new TNTSearch;


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

$tnt->loadConfig($config);

$innerIndex = $tnt->createIndex('inner.index');
$innerIndex->setTokenizer(new VietnameseTokenizer);

$innerIndex->query('SELECT id, name FROM "inner";');
$innerIndex->run();

$skillIndex = $tnt->createIndex('skill.index');
$innerIndex->setTokenizer(new VietnameseTokenizer);
$skillIndex->query('SELECT id, name FROM "set";');
$skillIndex->run();
