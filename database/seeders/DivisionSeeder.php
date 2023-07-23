<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('divisions')->insert([
            [
                'name' => 'Dhake',
            ],
            [
                'name' => 'Chittagong',
            ],
            [
                'name' => 'Sylhet',
            ]
        ]);
    }
}
