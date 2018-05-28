<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Solution extends Model
{
    /**
     * cheecked functions
     * problem() ok
     * problemType() ok
     * equipmentProblem() ok
     */

    public function problem(){
        return $this->belongsTo(StandarProblem::class,'standar_problem_id');
    }

    public function problemType(){
        return $this->belongsTo(ProblemType::class);
    }

    public function equipmentProblems(){
        return $this->hasMany(EquipmentProblem::class);
    }

}
