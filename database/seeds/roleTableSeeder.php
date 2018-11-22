<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class roleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('roles')->insert([
            'nama' => 'admin',
        ]);
        DB::table('roles')->insert([
            'nama' => 'asprak',
        ]);
       
        DB::table('roles')->insert([
            'nama' => 'praktikan',
        ]);
    }
}
