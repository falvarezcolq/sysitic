<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Equipment;

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
        //
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
        return view('equipment.update');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function thereCod($key,$value){
        $equipments = Equipment::where($key,$value)->get();

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

    public function listing($idLab){
        $equipment = null;
        if($idLab == 0 ){
            $equipment = Equipment::with('laboratory')->get();
        }else{
            $equipment = Equipment::with('laboratory')->where('laboratory_id',$idLab)->get();
        }
        return  response()->json(
            $equipment->toArray()
        );
    }
}
