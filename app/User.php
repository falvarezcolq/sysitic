<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

use Auth;
use App\log;

class User extends Model implements AuthenticatableContract,
                                    AuthorizableContract,
                                    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'password'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

        /**
         * 
         *  Checked functions
         *  people() ok
         *  reportEquipment()  ok
         *  solutionEquipment() ok
         */

    protected $casts = [
        'is_admin' => 'boolean'
    ];

    public function people(){
        return $this->belongsTo(People::class,'people_id');
    }


    public function reportEquipments(){
        return $this->hasMany(EquipmentProblem::class,'user_id_report');
    }

    public function solutionEquipments(){
        return $this->hasMany(EquipmentProblem::class,'user_id_solution');
    }

    public function typeUser(){
        $var = '';
        switch ($this->is_admin) {
            
            case 0:
                $var= 'Usuario';
                break;
        
            case 1:
                $var= 'Administrador';
                break;
            
            default:
                # code...
                break;
        }

        return $var;
    }
    
    public function createdBy(){
        return $this->belongsTo(People::class,'created_id');
    }

    public function delete(){
        $log = new log();
        $log->table_name = 'users';
        $log->operation  = 'delete';
        $log->old_value  =  $this->toJson(JSON_PRETTY_PRINT);
        //$log->old_value = $this->toJson();
        $log->user = Auth::user()->id.' '.Auth::user()->people()->first()->nombre.' '.Auth::user()->people()->first()->paterno;
        $log->save();
        return parent::delete();
    }
}
