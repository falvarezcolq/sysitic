<?php

use Illuminate\Database\Seeder;
use App\StandarProblem;
class StandarProblemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        StandarProblem::create([
            'descripcion' =>'Ventilador en con ruido',
            'problem_type_id' => 1
        ]);
        
        StandarProblem::create([
            'descripcion' =>'Fuente de alimentacion sobrecalentada',
            'problem_type_id' => 1
        ]);
        StandarProblem::create([
            'descripcion' =>'Cable UTP en mal estado',
            'problem_type_id' => 1
        ]);
        StandarProblem::create([
            'descripcion' =>'Falla del monitor',
            'problem_type_id' => 1
        ]);
        StandarProblem::create([
            'descripcion' =>'Puertos USB en mal estado',
            'problem_type_id' => 1
        ]);

        StandarProblem::create([
            'descripcion' =>'S.O. sin arrancar',
            'problem_type_id' => 2
        ]);
        StandarProblem::create([
            'descripcion' =>'S.O. lento',
            'problem_type_id' => 2
        ]);
        StandarProblem::create([
            'descripcion' =>'Pantalla azul repentina',
            'problem_type_id' => 2
        ]);
        StandarProblem::create([
            'descripcion' =>'Falta de programa packetracer',
            'problem_type_id' => 2
        ]);
        StandarProblem::create([
            'descripcion' =>'Equipo no se encuentra congelado',
            'problem_type_id' => 2
        ]);
        
        

        
    }
}
