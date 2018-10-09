<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\SoftDeletes;
use App\log;
use Illuminate\Support\Facades\Auth;

class Equipment extends Model
{

    // use SoftDeletes;
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
        $equipmentProblems = $this->equipmentProblems()->get();
        foreach($equipmentProblems as $ep){
             $ep->delete();
        }
        $log = new log();
        $log->table_name = 'equipment';
        $log->operation = 'delete';
        $log->old_value = $this->toJson(JSON_PRETTY_PRINT);
        $log->user = Auth::user()->id.' '.Auth::user()->people()->first()->nombre.' '.Auth::user()->people()->first()->paterno;
        $log->save();
        return parent::delete();
    }
}

