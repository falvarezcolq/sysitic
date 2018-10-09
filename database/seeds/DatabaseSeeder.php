<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        
        $this->truncateTable([
            'users',
            'people',
            'laboratories',
            'cleanings',
            'observations',
            'equipment',
            'problem_types',
            'standar_problems',
            'solutions',
            'equipment_problems',
            'logs',
        ]);
         
        $this->call(PeopleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(LaboratorySeeder::class);
        $this->call(CleaningSeeder::class);
        $this->call(ObservationSeeder::class);
        $this->call(EquipmentSeeder::class);
        $this->call(ProblemTypeSeeder::class);
        $this->call(StandarProblemSeeder::class);
        $this->call(SolutionSeeder::class);
        $this->call(EquipmentProblemSeeder::class);
        

        Model::reguard();
    }

    protected function truncateTable(array $tables)
    {

        DB::statement('SET FOREIGN_KEY_CHECKS  = 0');

        foreach($tables as $table){
            DB::table($table)->truncate();
        }

        DB::statement('SET FOREIGN_KEY_CHECKS  = 1');
           
    }
}