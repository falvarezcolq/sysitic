<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\SoftDeletes;
class EquipmentProblem extends Model
{
    // use SoftDeletes;
    protected $dates = ['deleted_at'];
    /**
     * checked functions 
     * equipment()  ok
     * standarProblem() ok
     * reportUser() ok
     * solutionUser() ok
     * solution() ok
     */


    public function equipment(){
        return $this->belongsTo(Equipment::class);
    }    

    public function standarProblem(){
        return $this->belongsTo(StandarProblem::class);
    }

    public function reportUser(){
        return $this->belongsTo(User::class,'user_id_report');
    }

    public function solutionUser(){
        return $this->belongsTo(User::class,'user_id_solution');
    }

    public function solution(){
        return $this->belongsTo(Solution::class);
    }
}
