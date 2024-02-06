<?php

namespace Zdn\Model;

use Zdn\Model\Inner;
use Zdn\Model\ZdnBaseModel;

class School extends ZdnBaseModel
{
    protected $table = "school";

    public function innerList()
    {
        return $this->hasMany(Inner::class)->orderBy("id")
            ->select("name", "slug", "school_id", "max_level");
    }
}
