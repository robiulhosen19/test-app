<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('districts')->insert([
            [
                'name' => 'Gazipur',
                'division_id' => 1
            ],
            [
                'name' => 'Narayanganj',
                'division_id' => 1
            ],
            [
                'name' => 'Rangamati',
                'division_id' => 2
            ],
            [
                'name' => 'Bandarban',
                'division_id' => 2
            ],
            [
                'name' => 'Sunamfanj',
                'division_id' => 3
            ],
            [
                'name' => 'Sreemangal',
                'division_id' => 3
            ]
            
        ]);
    }
}
