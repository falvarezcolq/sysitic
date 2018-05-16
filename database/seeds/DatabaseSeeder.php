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
        ]);
         
        $this->call(PeopleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(LaboratorySeeder::class);

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