<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'name'=>'super',
            'description'=>'rule over all'
        ]);
        DB::table('roles')->insert([
            'name'=>'admin',
            'description'=>'just rule'
        ]);
    }
}
