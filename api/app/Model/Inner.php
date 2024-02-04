<?php

namespace Zdn\Model;

use Zdn\Model\School;
use Zdn\Model\ZdnBaseModel;

class Inner extends ZdnBaseModel
{
    protected $table = "inner";

    public function detail()
    {
        return $this->hasMany(InnerDetail::class);
    }

    public function school()
    {
        return $this->belongsTo(School::class);
    }
}
