<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class VehicleTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('vehicle_types')->insert([
             ['vehicletype'=>'twowheeler'],
             ['vehicletype'=>'fourwheeler'],
             ['vehicletype'=>'heavyvehicles'],

         ]);
    }
}
