<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\ProblemType;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function listing(){
        $types = ProblemType::all();
        return response()->json(
            $types->toArray()
        );
    }
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
     public function addProblem(){
        return view('admin.addproblem');
     }

     public function addSolution(){
        return view('admin.addsolution');
     }

     
     /**
      * 
     * @return reportLaboratory
     *  
     */

     public function reportLaboratoryClean(){
        return view('report.reportlaboratoryclean');
     } 


     public function reportLaboratoryObservation(){
        return  view('report.reportlaboratoryobservation');
    } 
    




}
