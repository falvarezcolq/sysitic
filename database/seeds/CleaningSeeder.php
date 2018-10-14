<?php

use Illuminate\Database\Seeder;
use App\Cleaning;
class CleaningSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('cleanings')->insert([
            'estado' => false,
            'laboratory_id' => 1,
            'created_id'=> 1,
        ]);

        DB::table('cleanings')->insert([
            'estado' => true,
            'laboratory_id' => 1,
            'created_id'=> 1,
        ]);
        DB::table('cleanings')->insert([
            'estado' => false,
            'laboratory_id' => 2,
            'created_id'=> 1,
        ]);
        DB::table('cleanings')->insert([
            'estado' => false,
            'laboratory_id' => 2,
            'created_id'=> 1,
        ]);

        Cleaning::create([
            'estado' => false,
            'laboratory_id' => 1,
            'created_id'=> 1,
            'fecha_limp' =>'1995-02-12 15:01:10',
        ]);

        Cleaning::create([
            'estado' => false,
            'laboratory_id' => 1,
            'created_id'=> 1,
            'fecha_limp' =>'1995-03-12 15:01:10',
        ]);
        Cleaning::create([
            'estado' => false,
            'laboratory_id' => 2,
            'created_id'=> 1,
            'fecha_limp' =>'1995-02-12 15:01:10',
        ]);
        Cleaning::create([
            'estado' => false,
            'laboratory_id' => 2,
            'created_id'=> 1,
            'fecha_limp' =>'1995-03-12 15:01:10',
        ]);

        Cleaning::create([
            'estado' => false,
            'laboratory_id' => 3,
            'created_id'=> 1,
            'fecha_limp' =>'1995-02-12 15:01:10',
        ]);

        Cleaning::create([
            'estado' => false,
            'laboratory_id' => 3,
            'created_id'=> 1,
            'fecha_limp' =>'1995-03-12 15:01:10',
        ]);
        Cleaning::create([
            'estado' => false,
            'laboratory_id' => 4,
            'created_id'=> 1,
            'fecha_limp' =>'1995-02-12 15:01:10',
        ]);
        Cleaning::create([
            'estado' => false,
            'laboratory_id' => 4,
            'created_id'=> 1,
            'fecha_limp' =>'1995-03-12 15:01:10',
        ]);

        Cleaning::create([
            'estado' => false,
            'laboratory_id' => 3,
            'created_id'=> 1,
            'fecha_limp' =>'1995-02-12 15:01:10',
        ]);

        Cleaning::create([
            'estado' => false,
            'laboratory_id' => 3,
            'created_id'=> 1,
            'fecha_limp' =>'1995-03-12 15:01:10',
        ]);
        Cleaning::create([
            'estado' => false,
            'laboratory_id' => 4,
            'created_id'=> 1,
            'fecha_limp' =>'1995-02-12 15:01:10',
        ]);
        Cleaning::create([
            'estado' => false,
            'laboratory_id' => 4,
            'created_id'=> 1,
            'fecha_limp' =>'1995-03-12 15:01:10',
        ]);

    }
}
