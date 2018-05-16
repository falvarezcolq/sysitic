<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        // return  home  and menu
        return view('login.index');
    }

    /**
     * @return home
     *  
     */

     public function home(){
         return view('admin.index');
     }

     /**
     * @return laboratory
     *  
     */
     public function laboratory(){
        return view('admin.laboratory');
     }

     /**
     * @return reportproblem
     *  
     */
     public function reportProblem(){
        return view('admin.reportproblem');
     }
    
     /**
     * @return solutionProblem
     *  
     */
     public function solutionProblem(){
        return view('admin.solutionproblem');
     }

}
