<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\log;
use Auth;

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

    public function equipmentProblems(){
        return $this->hasMany(EquipmentProblem::class,'standar_problem_id');
    }
    public function delete(){
        $log = new log();
        $log->table_name = 'standar_problems';
        $log->operation = 'delete';
        $log->old_value = $this->toJson(JSON_PRETTY_PRINT);
        $log->user = Auth::user()->id.' '.Auth::user()->people()->first()->nombre.' '.Auth::user()->people()->first()->paterno;
        $log->save();
        return parent::delete();
    }
}
