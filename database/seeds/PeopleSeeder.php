<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeopleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


		DB::table('people')->insert([
        	'ci' => '',
        	'nombre' => 'Sin nombre',
        	'paterno' => '',
        	'materno' => '',
        	'genero'  => 1,
        	'fecha_nac' => date('1990-12-12 04:04:04'),
        	'email'  => 'default'.'@itic.com',
        	'telfijo' => '',
        	'telcelular' => '',
        	'direccion' => '',
        	'profesion' => '',
		'created_id'=> 1,
		]);

		DB::table('people')->insert([
        	'ci' => '123456',
        	'nombre' => 'Reynaldo',
        	'paterno' => 'Escobar',
        	'materno' => 'Ibañes',
        	'genero'  => 1,
        	'fecha_nac' => date('1990-12-12 04:04:04'),
        	'email'  => 'reynaldoei@gmail.com',
        	'telfijo' => '-',
        	'telcelular' => '71288569',
        	'direccion' => 'calle 3 los Alamos Chasquipampa',
        	'profesion' => 'Lic. Informatica',
			'created_id'=> 1,
		]);
		
        DB::table('people')->insert([
        	'ci' => '7031954',
        	'nombre' => 'Fernando',
        	'paterno' => 'Alvarez',
        	'materno' => 'Colque',
        	'genero'  => 1,
        	'fecha_nac' => date('1991-12-09 04:04:04'),
        	'email'  => 'falvarezcolq@gmail.com',
        	'telfijo' => '-',
        	'telcelular' => '75837740',
        	'direccion' => 'El Alto, z\Nuevos horizontes I , Calle v-3 # 557',
        	'profesion' => 'Estudiante Informatica 9 sem',
		'created_id'=> 1,
		]);

        //  DB::table('people')->insert([
        // 	'ci' => '123456',
        // 	'nombre' => 'Ximena',
        // 	'paterno' => 'Palacios',
        // 	'materno' => 'Aquino',
        // 	'genero'  => 0,
        // 	'fecha_nac' => date('1990-12-12 04:04:04'),
        // 	'email'  => 'Xim'.'@mail.com',
        // 	'telfijo' => '2123456',
        // 	'telcelular' => '76543219',
        // 	'direccion' => str_random(20),
        // 	'profesion' => 'Software developer',
		// 'created_id'=> 1,
		// ]);


        //   DB::table('people')->insert([
        // 	'ci' => '123456',
        // 	'nombre' => 'Lizbeth',
        // 	'paterno' => 'Calle',
        // 	'materno' => 'Zaenz',
        // 	'genero'  => 0,
        // 	'fecha_nac' => date('1990-12-12 04:04:04'),
        // 	'email'  => 'Lis'.'@mail.com',
        // 	'telfijo' => '2123456',
        // 	'telcelular' => '76543219',
        // 	'direccion' => str_random(20),
        // 	'profesion' => 'Software developer',
		// 'created_id'=> 1,
		// ]);

      
		
		// DB::table('people')->insert([
        // 	'ci' => '123456',
        // 	'nombre' => 'German ',
        // 	'paterno' => 'Huanca',
        // 	'materno' => 'Loayza',
        // 	'genero'  => 1,
        // 	'fecha_nac' => date('1990-12-12 04:04:04'),
        // 	'email'  => 'ger'.'@mail.com',
        // 	'telfijo' => '2123456',
        // 	'telcelular' => '76543219',
        // 	'direccion' => str_random(20),
        // 	'profesion' => 'Docente',
		// 'created_id'=> 1,
		// ]);

    }
}
