<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use App\log;
use Auth;
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

    public function delete(){
        $log = new log();
        $log->table_name = 'solutions';
        $log->operation = 'delete';
        $log->old_value = $this->toJson(JSON_PRETTY_PRINT);
        $log->user = Auth::user()->id.' '.Auth::user()->people()->first()->nombre.' '.Auth::user()->people()->first()->paterno;
        $log->save();
        return parent::delete();
    }

}
