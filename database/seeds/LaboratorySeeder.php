<?php

use Illuminate\Database\Seeder;

class LaboratorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('laboratories')->insert([	
        	'codigo' => 'Sin laboratorio',
        	'nombre_lab' => 'Sin asignar',
        	'ubicacion' => '---',
        	'people_id' => 1,
        ]);

        DB::table('laboratories')->insert([	
        	'codigo' => 'LASIN',
        	'nombre_lab' => 'Laboratorio Superior de Informática',
        	'ubicacion' => 'Monoblock',
        	'people_id' => 1,
        ]);

        DB::table('laboratories')->insert([	
        	'codigo' => 'P3 - L1',
        	'nombre_lab' => 'Laboratorio de Base de datos',
        	'ubicacion' => 'Edificio de Informática',
        	'people_id' => 1,
        ]);

        DB::table('laboratories')->insert([	
        	'codigo' => 'P3 - L2',
        	'nombre_lab' => 'Laboratorio de Ingles',
        	'ubicacion' => 'Edificio de Informática',
        	'people_id' => 2,
        ]);
        DB::table('laboratories')->insert([	
        	'codigo' => 'P3 - L3',
        	'nombre_lab' => 'Laboratorio Básico',
        	'ubicacion' => 'Edificio de Informática',
        	'people_id' => 2,
        ]);
    }
}
