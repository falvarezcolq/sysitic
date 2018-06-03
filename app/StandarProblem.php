<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StandarProblem extends Model
{
    /**
     * 
     * Checked functions
     * problemType() ok
     * solutions() ok
     */


    public function problemType(){
        return $this->belongsTo(ProblemType::class);
    }

    public function solutions(){
        return $this->hasMany(Solution::class);
    }
}
