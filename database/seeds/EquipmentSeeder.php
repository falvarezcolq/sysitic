<?php

use Illuminate\Database\Seeder;
use App\Equipment;
class EquipmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Equipment::create([
            'cod_itic' => '123',
            'cod_pc'   => 'LASIN - 02',
            'laboratory_id' => 1,
            'created_id'=> 1,
        ]);
        Equipment::create([
            'cod_itic' => '124',
            'cod_pc'   => 'LASIN - 03',
            'laboratory_id' => 1,
            'created_id'=> 1,
        ]);
        Equipment::create([
            'cod_itic' => '15',
            'cod_pc'   => 'LASIN - 04',
            'laboratory_id' => 1,
            'created_id'=> 1,
        ]);
        Equipment::create([
            'cod_itic' => '126',
            'cod_pc'   => 'LASIN - 05',
            'laboratory_id' => 1,
            'created_id'=> 1,
        ]);

        

        Equipment::create([
            'cod_itic' => '333',
            'cod_pc'   => 'LBD - 02',
            'laboratory_id' => 2,
            'created_id'=> 1,
        ]);
        Equipment::create([
            'cod_itic' => '334',
            'cod_pc'   => 'LBD - 03',
            'laboratory_id' => 2,
            'created_id'=> 1,
        ]);
        Equipment::create([
            'cod_itic' => '335',
            'cod_pc'   => 'LBD - 04',
            'laboratory_id' => 2,
            'created_id'=> 1,
        ]);
        Equipment::create([
            'cod_itic' => '336',
            'cod_pc'   => 'LBD - 05',
            'laboratory_id' => 2,
            'created_id'=> 1,
        ]);

        Equipment::create([
            'cod_itic' => '773',
            'cod_pc'   => 'LI - 02',
            'laboratory_id' => 3,
             'created_id'=> 1,
        ]);
        Equipment::create([
            'cod_itic' => '774',
            'cod_pc'   => 'LI - 03',
            'laboratory_id' => 3,
             'created_id'=> 1,
        ]);
        Equipment::create([
            'cod_itic' => '775',
            'cod_pc'   => 'LI - 04',
            'laboratory_id' => 3,
             'created_id'=> 1,
        ]);
        Equipment::create([
            'cod_itic' => '776',
            'cod_pc'   => 'LI - 05',
            'laboratory_id' => 3,
             'created_id'=> 1,
        ]);



        Equipment::create([
            'cod_itic' => '663',
            'cod_pc'   => 'LB - 02',
            'laboratory_id' => 4,
             'created_id'=> 1,
        ]);
        Equipment::create([
            'cod_itic' => '664',
            'cod_pc'   => 'LB - 03',
            'laboratory_id' => 4,
             'created_id'=> 1,
        ]);
        Equipment::create([
            'cod_itic' => '665',
            'cod_pc'   => 'LB - 04',
            'laboratory_id' => 4,
             'created_id'=> 1,
        ]);
        Equipment::create([
            'cod_itic' => '666',
            'cod_pc'   => 'LB - 05',
            'laboratory_id' => 4,
             'created_id'=> 1,
        ]);
    }
}
