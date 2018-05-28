<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    /**
     * checked functions
     * laboratory() ok
     * equipmentProblems() ok
     */

    public function laboratory(){
        return $this->belongsTo(Laboratory::class);
    }

    public function equipmentProblems(){
        return $this->hasMany(EquipmentProblem::class);
    }
}

