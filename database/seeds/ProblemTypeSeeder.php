<?php

use Illuminate\Database\Seeder;
use App\ProblemType;
class ProblemTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        ProblemType::create([
            'name' => 'hadware',
            'created_id'=> 1,
        ]);

        ProblemType::create([
            'name' => 'Software',
            'created_id'=> 1,
        ]);
        ProblemType::create([
            'name' => 'Verificacion',
            'created_id'=> 1,
        ]);
        ProblemType::create([
            'name' => 'Energía eléctrica',
            'created_id'=> 1,
        ]);
        ProblemType::create([
            'name' => 'Revision',
            'created_id'=> 1,
        ]);
        
    }
}
