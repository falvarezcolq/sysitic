<?php

use Illuminate\Database\Seeder;
use App\Observation;
class ObservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Observation::create([
            'descripcion' => 'Computadoras fuera de lugar',
            'fecha_obs' => '1995-12-12 11:11:11',
            'laboratory_id' => 1,
            'created_id'=> 1,
        ]);

        Observation::create([
            'descripcion' => str_random(50),
            'fecha_obs' => '1995-12-12 11:11:11',
            'laboratory_id' => 2,
            'created_id'=> 1,
        ]);
        Observation::create([
            'descripcion' => str_random(50),
            'fecha_obs' => '1995-12-12 11:11:11',
            'laboratory_id' => 1,
            'created_id'=> 1,
        ]);
        Observation::create([
            'descripcion' => str_random(50),
            'fecha_obs' => '1995-12-12 11:11:11',
            'laboratory_id' => 3,
            'created_id'=> 1,
        ]);

    }
}
