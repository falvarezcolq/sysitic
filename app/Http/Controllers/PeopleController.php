<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\People;
use Auth;
use DB;
class PeopleController extends Controller
{
    // lista  a todas las personas registradas
    public function listing(){
        $people = DB::table('people')->select('id','nombre','paterno','materno')->get();
        return response()->json(
            $people
        );
    }

    public function listall(Request $request){
        
        if($request->search != ''){
            $people = People::where("paterno","like","".$request->search."%")
                              ->orWhere("materno","like","".$request->search."%")
                              ->orWhere("nombre","like","".$request->search."%")
                              ->orWhere("email","like","%".$request->search."%")
                              ->orWhere("profesion","like","".$request->search."%")
                              ->orWhere("ci","like","%".$request->search."%")
                             ->with('user')
                             ->orderBy('paterno')
                             ->paginate(10);                    
        
        }else{
            $people = People::where('id','!=',1)->with('user')->orderBy('Paterno')->paginate(10);
        }        
        
        if($request->ajax()){
            return response()->json(view('people.table',compact('people'))->render());
        }  
        return response()->json([
            'msj' => 'error','text'=>'Ocurrío un error inesperado'
        ]);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        return view('people.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('people.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $date = \Carbon\Carbon::create(substr($request->fecha_nac,6,4),substr($request->fecha_nac,3,2),substr($request->fecha_nac,0,2),0,0,0);

        if(People::where('email',$request->email)->count() == 0){
           if( People::where('ci',explode(" ",$request->ci)[0])->count() == 0){
            $people =new People($request->all());
            $people->fecha_nac = $date->format('Y-m-d H:i:s');
            $people->created_id = Auth::user()->people_id;
            $people->save();
            return response()->json(['msj'=>'ok','text'=> 'Registrado con éxito']);
           } else{
            return response()->json(['msj'=>'warning','text'=> 'Ya existe otra persona con el C.I.']);
           }
            
        }else{
            return response()->json(['msj'=>'warning','text'=> 'Ya existe otra persona con el <strong>correo</strong>']);
        }
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   $people = People::find($id);
        return response()->json(view('people.show',compact('people'))->render());
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        $people = People::find($id);
        return response()->json([
            'p' => $people
        ]);
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
        $date = \Carbon\Carbon::create(substr($request->fecha_nac,6,4),substr($request->fecha_nac,3,2),substr($request->fecha_nac,0,2),0,0,0);

        if(People::where('email',$request->email)->where('id','!=',$id)->count() == 0){
           if( People::where('ci',explode(" ",$request->ci)[0])->where('id','!=',$id)->count() == 0){
            $people = People::find($id);
            $people->nombre = $request->nombre;
            $people->paterno = $request->paterno;
            $people->materno = $request->materno;
            $people->ci = $request->ci;
            $people->genero = $request->genero;
            $people->email = $request->email;
            $people->telfijo = $request->telfijo;
            $people->telcelular = $request->telcelular;
            $people->direccion = $request->direccion;
            $people->profesion = $request->profesion;

            $people->fecha_nac = $date->format('Y-m-d H:i:s');
            $people->updated_id = Auth::user()->people_id;
            $people->save();
            return response()->json(['msj'=>'ok','text'=> ' Actualizado correctamente']);
           } else{
            return response()->json(['msj'=>'warning','text'=> ' Ya existe otra persona con el C.I.']);
           }        
        }else{
            return response()->json(['msj'=>'warning','text'=> ' Ya existe otra persona con el <strong>correo</strong>']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {   
        
        if($request->ajax()){
            $relations  = DB::select(DB::raw("
            SELECT Count(*) as 'count', 'people' as 'name' FROM `people` 			    where created_id  =".$id." or updated_id =".$id." 
            UNION SELECT Count(*) as 'count', 'users' as 'name' FROM `users` 			where created_id  =".$id." or updated_id =".$id."
            UNION SELECT Count(*) as 'count', 'laboratories' as 'name' FROM `laboratories` 	where created_id  =".$id." or updated_id =".$id." or people_id =".$id."
            UNION SELECT Count(*) as 'count', 'equipment' as 'name' FROM `equipment` 		where created_id  =".$id." or updated_id =".$id."
            UNION SELECT Count(*) as 'count', 'equipment_problems' as 'name' FROM `equipment_problems` where created_id  =".$id." or updated_id =".$id." or user_id_report =".$id." or user_id_solution =".$id."
            UNION SELECT Count(*) as 'count', 'solutions' as 'name' FROM `solutions` 		where created_id  =".$id." or updated_id =".$id."
            UNION SELECT Count(*) as 'count', 'standar_problems' as 'name' FROM `standar_problems`where created_id  =".$id." or updated_id =".$id."
            UNION SELECT Count(*) as 'count', 'problem_types' as 'name' FROM `problem_types`	where created_id  =".$id." or updated_id =".$id."
            UNION SELECT Count(*) as 'count', 'cleanings' as 'name' FROM `cleanings` 		where created_id  =".$id." or updated_id =".$id."
            UNION SELECT Count(*) as 'count', 'observations' as 'name' FROM `observations` 	where created_id  =".$id." or updated_id =".$id.";"));

            $sw = true;
            $table = '';
            foreach ($relations as $rel) {
                if($rel->count > 0){
                    $sw = false;
                    $table = $rel->name;
                    break;
                }
            }
            if($sw){
                $people = People::find($id);
                $people->delete();
                return response()->json(['msj'=>'ok','text'=>'Registros de la persona eliminado correctamente']);
            }
            return response()->json(['msj'=>'warning','text'=>'No se puede eliminar esta información debido a que esta relacionado con otros registros '.$table]);
  
        }

        return response()->json(['msj'=>'error','text'=>'error']);
    }
}
