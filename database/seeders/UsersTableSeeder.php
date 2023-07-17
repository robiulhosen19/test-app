<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'first_name' => 'robiul',
            'last_name' => 'hosen',
            'email' => 'robiul@gmail.com',
            'password' => md5('123456'),
            'role' => 'Admin',
            'status' => true
          
    ]);
    }
}
