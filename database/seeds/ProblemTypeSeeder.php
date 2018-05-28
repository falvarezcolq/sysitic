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
        //
        ProblemType::create([
            'name' => 'hadware',
        ]);

        ProblemType::create([
            'name' => 'Software',
        ]);
        ProblemType::create([
            'name' => 'Verificacion',
        ]);
        ProblemType::create([
            'name' => 'Energía eléctrica',
        ]);
        ProblemType::create([
            'name' => 'Revision',
        ]);
        
    }
}
