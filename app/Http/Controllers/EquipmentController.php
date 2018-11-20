<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Equipment;
use Auth;

class EquipmentController extends Controller
{
      
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('equipment.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('equipment.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $equipment =new Equipment;
        $equipment->cod_itic = $request->cod_itic;
        $equipment->cod_pc = $request->cod_pc;
        $equipment->laboratory_id = $request->laboratory_id;
        $equipment->created_id = Auth::user()->people_id;
        $equipment->save();
        
        return response()->json([
            'mensaje' => 'se registro con exito',
            'time' =>\Carbon\Carbon::now()->format('Y-m-d H:i:s')
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $equipment =  Equipment::find($id);
       return response()->json([
           'equipment' => $equipment
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
        $equipment =  Equipment::find($id);
        $equipment->cod_itic = $request->cod_itic;
        $equipment->cod_pc = $request->cod_pc;
        $equipment->laboratory_id = $request->laboratory_id;
        $equipment->updated_id = Auth::user()->people_id;
        $equipment->save();
        
        return response()->json([
            'mensaje' => 'se actualizo con exito'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        if( $request->ajax()) {
            $equipment = Equipment::find($id);
            $equipment->delete();
            return response()->json([
                "msj" => 'deleted',
            ]);
        } 
        return response()->json(['msj'=>'error']);

    }

    public function thereCod($key,$value){

        $value  = (strlen($value) == 1 )? '00'.$value: (strlen($value) == 2 )? '0'.$value:$value;  
        $equipments = Equipment::where($key,$value)
                                ->get();

        $val = (count($equipments)==1);
        $equipment_id  = null;
        if($val){
            $equipment_id  = $equipments->first()->id;
        }

        return response()->json([
            'there' => $val,
            'equipment_id' =>$equipment_id,
        ]);
    }

    public function listing( Request $r , $idLab ){
        $equipment = null;
        $order = ($r->val ==  1)? 'cod_pc':'cod_itic';
        if($idLab == 0 ){
            $equipment = Equipment::with('laboratory')
                                    ->orderBy($order)
                                    ->get();
        }else{
            $equipment = Equipment::with('laboratory')->where('laboratory_id',$idLab)->orderBy($order)->get();
        }
        return  response()->json(
            $equipment->toArray()
        );
    }

    public function pclist(){
        $equipment = Equipment::all();
        return response()->json($equipment->toArray());
    }
}
