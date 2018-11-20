<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Equipment;
use Excel;
class ExcelController extends Controller
{
    function getExportLabEq(){
        $date = \Carbon\Carbon::now();
        
        $equipments = Equipment::with('laboratory')
                    ->orderBy('laboratory_id')
                    ->orderBy('cod_pc')
                    ->get();
        Excel::create('Laboratorio_y_equipos'
            .$date->year.''
            .(($date->month<10)?'0'.$date->month:$date->month).''
            .(($date->day<10)?'0'.$date->day:$date->day).''
            .(($date->hour<10)?'0'.$date->hour:$date->hour).''
            .(($date->minute<10)?'0'.$date->minute:$date->minute).''
            .(($date->second<10)?'0'.$date->second:$date->second).''
        ,function($excel) use ($equipments){
    		$excel->sheet('hoja 1',function($sheet) use ($equipments){
                $sheet->row(1,['laboratorio','Codigo PC','Codigo itic']);
    			foreach ($equipments as $index => $e) {
    				$sheet->row($index+2,[
    					$e->laboratory->nombre_lab,
    					$e->cod_pc, 
    					$e->cod_itic
    				]);
    			}
    		});
    	})->export('xlsx');
    }


    function getExportEquipmentProblem($id){
        $date = \Carbon\Carbon::now();
        
        $equipment = Equipment::find($id);
        Excel::create('PC_'.$equipment->cod_pc.'_'
            .$date->year.''
            .(($date->month<10)?'0'.$date->month:$date->month).''
            .(($date->day<10)?'0'.$date->day:$date->day).''
            .(($date->hour<10)?'0'.$date->hour:$date->hour).''
            .(($date->minute<10)?'0'.$date->minute:$date->minute).''
            .(($date->second<10)?'0'.$date->second:$date->second).''
        ,function($excel) use ($equipment){
    		$excel->sheet('hoja 1',function($sheet) use ($equipment){
                
                
                $sheet->row(1,['Codigo PC',$equipment->cod_pc]);
                $sheet->row(2,['Codigo ITIC',$equipment->cod_itic]);
                $sheet->row(3,['Laboratorio',$equipment->laboratory->nombre_lab]);           
                $sheet->row(4,['Creado en',$equipment->created_at]);

                $sheet->row(6,[
                    'Fecha de reporte',
                    'Reportado por',
                    'tipo de problema',
                    'problema',
                    'Descripcion',
                    'tipo de solucion',
                    'Solución',
                    'Solucionado por',
                    'Fecha de solución'
                    ]);
                $ep = $equipment->equipmentProblems()->orderBy('timereport')->get();
                foreach ($ep as $index => $e) {
    				$sheet->row($index+7,[
                        $e->timereport,
                        $e->reportUser->people->nombre.' '.
                        $e->reportUser->people->paterno.' '.
                        $e->reportUser->people->materno.' ',
                        $e->standarProblem->problemType->name,
                        $e->standarProblem->descripcion,
                        $e->desc,
                        (($e->solution != null)? $e->solution->problemType->name:'--'),
                        (($e->solution != null)? $e->solution->descripcion:'--'),
                        (($e->solution != null)? $e->solutionUser->people->nombre.' '.$e->solutionUser->people->paterno.' '.$e->solutionUser->people->materno:'--'),
                        (($e->solution != null)? $e->timesolution:'--'),      
    				]);
    			}
    		});
    	})->export('xlsx');
    }
}
