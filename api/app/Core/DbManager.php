<?php

namespace Zdn\Core;

use Illuminate\Database\Capsule\Manager;

class DbManager
{
    private $db;

    public function __construct(Manager $capsule)
    {
        $dbConfig = [
            "driver" => "pgsql",
            // "host" => $_ENV["DB_HOST"],
            "database" => $_ENV["DB_DATABASE"],
            "username" => $_ENV["DB_USERNAME"],
            "password" => $_ENV["DB_PASSWORD"],
            "charset" => "utf8",
        ];
        if (!empty($_ENV["DB_UNIX_SOCKET"])) {
            $dbConfig["unix_socket"] = $_ENV["DB_UNIX_SOCKET"];
        } else {
            $dbConfig["host"] = $_ENV["DB_HOST"];
        }
        $capsule->addConnection($dbConfig);

        $capsule->setAsGlobal();
        $capsule->bootEloquent();

        $this->db = $capsule;
    }

    public function getDb()
    {
        return $this->db;
    }
}
