<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=>'super',
            'email'=>'super@mail.mail',
            'password'=>bcrypt('password')
        ]);
        DB::table('users')->insert([
            'name'=>'admin',
            'email'=>'admin@mail.mail',
            'password'=>bcrypt('password')
        ]);
    }
}
