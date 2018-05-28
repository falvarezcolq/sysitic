<?php

use Illuminate\Database\Seeder;
use App\Solution;
class SolutionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Solution::create([
            'descripcion' => 'aceitado de ventilador',
            'standar_problem_id' => 1,
            'problem_type_id' => 1
        ]);

        Solution::create([
            'descripcion' => 'Reemplazo de ventilador',
            'standar_problem_id' => 1,
            'problem_type_id' => 1
        ]);

        Solution::create([
            'descripcion' => 'Cambio de fuente de alimentación',
            'standar_problem_id' => 2,
            'problem_type_id' => 1
        ]);

        Solution::create([
            'descripcion' => 'Reparacion de fuente',
            'standar_problem_id' => 2,
            'problem_type_id' => 1
        ]);

        Solution::create([
            'descripcion' => 'Reemplazo de cable UTP',
            'standar_problem_id' => 3,
            'problem_type_id' => 1
        ]);
        
        Solution::create([
            'descripcion' => 'Soldadura de  rj45',
            'standar_problem_id' => 3,
            'problem_type_id' => 1
        ]);

        Solution::create([
            'descripcion' => 'Soldadura de cables de conexion',
            'standar_problem_id' => 3,
            'problem_type_id' => 1
        ]);
        

        Solution::create([
            'descripcion' => 'pantalla con colores externos',
            'standar_problem_id' => 4,
            'problem_type_id' => 1
        ]);
        
        Solution::create([
            'descripcion' => 'Conexion electrica del monitor',
            'standar_problem_id' => 4,
            'problem_type_id' => 1
        ]);
         

    }
}
