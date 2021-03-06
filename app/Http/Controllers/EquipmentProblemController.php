<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\EquipmentProblem;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class EquipmentProblemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->show_date == "true"){
            $y = intval(substr($request->date,6,4));
            $m = intval(substr($request->date,3,2));
            $d = intval(substr($request->date,0,2));          
            $date  = \Carbon\Carbon::create($y,$m,$d,0,0,0);
        }else{
            $date = \Carbon\Carbon::now();
        }

        $equipmentProblem = new EquipmentProblem;
        $equipmentProblem->equipment_id = $request->equipment_id;
        $equipmentProblem->standar_problem_id = $request->standar_problem_id;
        $equipmentProblem->user_id_report = Auth::user()->people_id;
        $equipmentProblem->timereport = $date->format('Y-m-d H:i:s');
        $equipmentProblem->created_id = Auth::user()->people_id;
        $equipmentProblem->desc = ($request->show_desc == "true")? $request->desc.'':'';
        $equipmentProblem->save();
         
        return response()->json([
            'message' => 'exito',
            'timereport' =>  $date->format('Y-m-d H:i:s'),
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $equipment = EquipmentProblem::find($id);
        return response()->json( view('equipmentProblem.equipmentSolution',compact('equipment'))->render());  
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $equipment = EquipmentProblem::find($id);
        return response()->json( view('equipmentProblem.equipmentSolutionResume',compact('equipment'))->render() );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       

        $date = \Carbon\Carbon::now();
        $equipmentProblem = EquipmentProblem::find($id);
        if($request->solution_id != 0 ){
            $equipmentProblem->solution_id = $request->solution_id;
            $equipmentProblem->user_id_solution = Auth::user()->people_id;
            $equipmentProblem->timesolution =  $date->format('Y-m-d H:i:s');
            $equipmentProblem->updated_id = Auth::user()->people_id;
            $equipmentProblem->desc_sol =  $request->desc;
            $equipmentProblem->save();
        }else{
            $equipmentProblem->solution_id = null;
            $equipmentProblem->user_id_solution = null;
            $equipmentProblem->timesolution =  null;
            $equipmentProblem->updated_id = Auth::user()->people_id;
            $equipmentProblem->desc_sol =  null;
            $equipmentProblem->save();
        }
      

        return response()->json([
            'message' => 'exito.',
            'timereport' =>  $date->format('Y-m-d H:i:s'),
        ]);
        
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function destroy(Request $request,$id)
    {
         if( $request->ajax()) {
            $equipmentProblem = EquipmentProblem::find($id);
            $equipmentProblem->delete();
            return response()->json([
                "msj" => 'deleted',
            ]);
        } 
        return  response()->json(['msj'=>'error']);
    }

    public function listall(Request $request){
    
        if( $request->data != null){
            $codItic = $request->data['codItic'];
            $codPc   = $request->data['codPc'];
            $laboratoryId  = intval($request->data['laboratory']);
            $standarProblemId = intval($request->data['standarProblem']);
            
            $equipmentProblems =DB::table('equipment_problems')
                                    ->select('equipment_problems.id',
                                             'equipment_problems.timereport',
                                             'equipment_problems.timesolution',
                                             'laboratories.id as laboratory_id',
                                             'laboratories.nombre_lab',
                                             'laboratories.codigo as codigo_lab',
                                             'equipment.cod_itic',
                                             'equipment.cod_pc',
                                             'problem_types.name as tipo',
                                             'equipment_problems.standar_problem_id  AS standar_problem_id',
                                             'equipment_problems.desc',
                                             
                                             'standar_problems.descripcion as nombre_problema')
                                             
                                       ->leftJoin('equipment','equipment_problems.equipment_id','=','equipment.id')
                                       ->leftJoin('standar_problems','equipment_problems.standar_problem_id','=','standar_problems.id')
                                       ->leftJoin('solutions','equipment_problems.solution_id','=','solutions.id')
                                       ->leftJoin('laboratories','equipment.laboratory_id','=','laboratories.id')
                                       ->leftJoin('problem_types','standar_problems.problem_type_id','=','problem_types.id')
                                       ->orderBy('equipment_problems.timereport','DESC'); 
            
            if( $laboratoryId != 0){      $equipmentProblems = $equipmentProblems->where('laboratory_id',$laboratoryId); }
            if( $standarProblemId != 0){  $equipmentProblems = $equipmentProblems->where('equipment_problems.standar_problem_id',$standarProblemId); }
            if( $codItic != ""){          $equipmentProblems = $equipmentProblems->where('cod_itic',$codItic);  }
            if( $codPc != ""){            $equipmentProblems = $equipmentProblems->where('cod_pc',$codPc);  }

            if(!Auth::user()->is_admin){
                $equipmentProblems = $equipmentProblems->where('user_id_report',Auth::user()->people_id);
            }

            $equipmentProblems =  $equipmentProblems->paginate(10);

            //return response()->json($equipmentProblems);
            if($request->ajax()){
                 return response()->json(view('equipmentProblem.table',compact('equipmentProblems'))->render());
            }
        }

        return response()->json([
           'mensaje' => 'error'
        ]);
        
    }


    public function setDesc(Request $request,$id){
        if($request->ajax()){

            if($id > 0 ){
                $date = \Carbon\Carbon::now();
                 $equipmentProblem = EquipmentProblem::find($id);
                 $equipmentProblem->desc      = $request->desc;
                // $equipmentProblem->update_at =  $date->format('Y-m-d H:i:s');
                 $equipmentProblem->save();
            }
            
            return response()->json([
                 "msj" => "ok",
                 "desc" => $request->desc,
            ]);
        }
        return response()->json([
         "msj" => "error"
        ]);
     }
}
