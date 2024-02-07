<?php

namespace Zdn\Model;

use Zdn\Model\School;
use Zdn\Model\ZdnBaseModel;

class KinhMach extends ZdnBaseModel
{
    protected $table = "kinh_mach";

    public function detail()
    {
        return $this->hasMany(KinhMachDetail::class);
    }

    public function school(){
        return $this->belongsTo(School::class);
    }
}
