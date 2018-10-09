<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\log;
use Auth;
class Observation extends Model
{
    //
    /**
     * Checked functions 
     * laboratory() ok
     * 
    */
    public function laboratory(){
        return $this->belongsTo(Laboratory::class);
    }


    public function delete(){
       
        // $log = new log();
        // $log->table_name = 'observations';
        // $log->operation = 'delete';
        // $log->old_value = $this->toJson(JSON_PRETTY_PRINT);
        // //$log->old_value = $this->toJson();
        // $log->user = Auth::user()->id.' '.Auth::user()->people()->first()->nombre.' '.Auth::user()->people()->first()->paterno;
        // $log->save();
        return parent::delete();
    }
}
