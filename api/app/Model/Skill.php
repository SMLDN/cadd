<?php

namespace Zdn\Model;

use Zdn\Model\Set;
use Zdn\Model\SkillDetail;
use Zdn\Model\ZdnBaseModel;

class Skill extends ZdnBaseModel
{
    protected $table = "skill";

    public function detail()
    {
        return $this->hasMany(SkillDetail::class)->orderBy("id");
    }
}
