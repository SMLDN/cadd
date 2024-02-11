<?php

namespace Zdn\Model;

use Zdn\Model\Skill;
use Zdn\Model\ZdnBaseModel;

class Set extends ZdnBaseModel
{
    protected $table = "set";

    public function initSkill()
    {
        return $this->hasOne(Skill::class)->orderBy("id")->select("set_id", "slug", "name", "max_level");
    }

    public function skillListAll()
    {
        return $this->hasMany(Skill::class)->orderBy("id")
            ->select("set_id", "slug", "name", "max_level", "photo");
    }
}
