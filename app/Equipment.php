<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Equipment extends Model
{

    use SoftDeletes;
    protected $dates=['deleted_at'];
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

    public function delete(){
        $problems = $this->equipmentProblems()->get();
        foreach($problems as $p){
            $p->delete();
        }
        return parent::delete();
    }
}

