<?php

namespace Zdn\Core;

use Psr\Container\ContainerInterface;

class DiceContainer implements ContainerInterface
{
    private \Dice\Dice $dice;

    public function __construct()
    {
        require_once 'Dice.php';
        $this->dice = new \Dice\Dice;
        return $this;
    }

    public function set(string $id)
    {
        $rules = [
            $id => ["shared" => true]
        ];
        $this->dice = $this->dice->addRules($rules);
        $this->get($id);
    }

    public function get(string $id)
    {
        return $this->dice->create($id);
    }

    public function has(string $id): bool
    {
        return $this->dice->has($id);
    }
}
