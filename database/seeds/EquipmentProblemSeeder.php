<?php

use Illuminate\Database\Seeder;
use App\EquipmentProblem;

class EquipmentProblemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        EquipmentProblem::create([
            'equipment_id' => 1,
            'standar_problem_id' => 1,
            'user_id_report' => 1,
            'timereport' => '2000-12-12 11:11:11',
            'solution_id' =>1,
            'user_id_solution' => 1,
            'timesolution' => '2000-12-12 11:11:11',
        ]);


        EquipmentProblem::create([
            'equipment_id' => rand(1,10),
            'standar_problem_id' => rand(1,10),
            'user_id_report' => rand(1,4),
            'timereport' => '2000-12-12 11:11:11',
            'solution_id' =>1,
            'user_id_solution' => 1,
            'timesolution' => '2000-12-12 11:11:11',
        ]);
        EquipmentProblem::create([
            'equipment_id' => rand(1,10),
            'standar_problem_id' => rand(1,10),
            'user_id_report' => rand(1,4),
            'timereport' => '2000-12-12 11:11:11',
            'solution_id' =>1,
            'user_id_solution' => 1,
            'timesolution' => '2000-12-12 11:11:11',
        ]);
        EquipmentProblem::create([
            'equipment_id' => rand(1,10),
            'standar_problem_id' => rand(1,10),
            'user_id_report' => rand(1,4),
            'timereport' => '2000-12-12 11:11:11',
            'solution_id' =>1,
            'user_id_solution' => 1,
            'timesolution' => '2000-12-12 11:11:11',
        ]);
        EquipmentProblem::create([
            'equipment_id' => rand(1,10),
            'standar_problem_id' => rand(1,10),
            'user_id_report' => rand(1,4),
            'timereport' => '2000-12-12 11:11:11',
            'solution_id' =>1,
            'user_id_solution' => 1,
            'timesolution' => '2000-12-12 11:11:11',
        ]);


        EquipmentProblem::create([
            'equipment_id' => rand(1,10),
            'standar_problem_id' => rand(1,10),
            'user_id_report' => rand(1,4),
            'timereport' => '2000-12-12 11:11:11',
            'solution_id' =>NULL,
            'user_id_solution' => NULL,
            'timesolution' => NULL,
        ]);

        EquipmentProblem::create([
            'equipment_id' => rand(1,10),
            'standar_problem_id' => rand(1,10),
            'user_id_report' => rand(1,4),
            'timereport' => '2000-12-12 11:11:11',
            'solution_id' =>NULL,
            'user_id_solution' => NULL,
            'timesolution' => NULL,
        ]);
        EquipmentProblem::create([
            'equipment_id' => rand(1,10),
            'standar_problem_id' => rand(1,10),
            'user_id_report' => rand(1,4),
            'timereport' => '2000-12-12 11:11:11',
            'solution_id' =>NULL,
            'user_id_solution' => NULL,
            'timesolution' => NULL,
        ]);

        EquipmentProblem::create([
            'equipment_id' => rand(1,10),
            'standar_problem_id' => rand(1,10),
            'user_id_report' => rand(1,4),
            'timereport' => '2000-12-12 11:11:11',
            'solution_id' =>NULL,
            'user_id_solution' => NULL,
            'timesolution' => NULL,
        ]); EquipmentProblem::create([
            'equipment_id' => rand(1,10),
            'standar_problem_id' => rand(1,10),
            'user_id_report' => rand(1,4),
            'timereport' => '2000-12-12 11:11:11',
            'solution_id' =>NULL,
            'user_id_solution' => NULL,
            'timesolution' => NULL,
        ]); EquipmentProblem::create([
            'equipment_id' => rand(1,10),
            'standar_problem_id' => rand(1,10),
            'user_id_report' => rand(1,4),
            'timereport' => '2000-12-12 11:11:11',
            'solution_id' =>NULL,
            'user_id_solution' => NULL,
            'timesolution' => NULL,
        ]); EquipmentProblem::create([
            'equipment_id' => rand(1,10),
            'standar_problem_id' => rand(1,10),
            'user_id_report' => rand(1,4),
            'timereport' => '2000-12-12 11:11:11',
            'solution_id' =>NULL,
            'user_id_solution' => NULL,
            'timesolution' => NULL,
        ]); EquipmentProblem::create([
            'equipment_id' => rand(1,10),
            'standar_problem_id' => rand(1,10),
            'user_id_report' => rand(1,4),
            'timereport' => '2000-12-12 11:11:11',
            'solution_id' =>NULL,
            'user_id_solution' => NULL,
            'timesolution' => NULL,
        ]);
        
    }
}
