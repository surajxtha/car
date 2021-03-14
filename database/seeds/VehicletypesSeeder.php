<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class VehicletypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vehicle_types')->insert([
            ['vehicle_type'=>'twowheeler'],
            ['vehicle_type'=>'fourwheeler'],
            ['vehicle_type'=>'heavyvehicles'],
        ]);
    }
}
