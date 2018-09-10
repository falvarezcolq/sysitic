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
        	'ci' => '123456',
        	'nombre' => 'Reynaldo',
        	'paterno' => 'Escobar',
        	'materno' => 'Rava',
        	'genero'  => 1,
        	'fecha_nac' => date('1990-12-12 04:04:04'),
        	'email'  => 'rey'.'@mail.com',
        	'telfijo' => '2123456',
        	'telcelular' => '76543219',
        	'direccion' => str_random(20),
        	'profesion' => 'Director Itic'
		]);
		
        DB::table('people')->insert([
        	'ci' => '123456',
        	'nombre' => 'Fernando',
        	'paterno' => 'Alvarez',
        	'materno' => 'Alva',
        	'genero'  => 1,
        	'fecha_nac' => date('1990-12-12 04:04:04'),
        	'email'  => 'fer'.'@mail.com',
        	'telfijo' => '2123456',
        	'telcelular' => '76543219',
        	'direccion' => str_random(20),
        	'profesion' => 'Software developer'
        ]);

         DB::table('people')->insert([
        	'ci' => '123456',
        	'nombre' => 'Ximena',
        	'paterno' => 'Palacios',
        	'materno' => 'Aquino',
        	'genero'  => 0,
        	'fecha_nac' => date('1990-12-12 04:04:04'),
        	'email'  => 'Xim'.'@mail.com',
        	'telfijo' => '2123456',
        	'telcelular' => '76543219',
        	'direccion' => str_random(20),
        	'profesion' => 'Software developer'
        ]);


          DB::table('people')->insert([
        	'ci' => '123456',
        	'nombre' => 'Lizbeth',
        	'paterno' => 'Calle',
        	'materno' => 'Zaenz',
        	'genero'  => 0,
        	'fecha_nac' => date('1990-12-12 04:04:04'),
        	'email'  => 'Lis'.'@mail.com',
        	'telfijo' => '2123456',
        	'telcelular' => '76543219',
        	'direccion' => str_random(20),
        	'profesion' => 'Software developer'
        ]);

      
		
		DB::table('people')->insert([
        	'ci' => '123456',
        	'nombre' => 'German ',
        	'paterno' => 'Huanca',
        	'materno' => 'Loayza',
        	'genero'  => 1,
        	'fecha_nac' => date('1990-12-12 04:04:04'),
        	'email'  => 'ger'.'@mail.com',
        	'telfijo' => '2123456',
        	'telcelular' => '76543219',
        	'direccion' => str_random(20),
        	'profesion' => 'Docente'
        ]);

    }
}
