<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'nama' => 'admin',
            'email' => 'admin@mail.com',
            'password' => bcrypt('password'),
            'role_id' => '1'
        ]);
        DB::table('users')->insert([
            'nama' => 'asprak',
            'email' => 'asprak@mail.com',
            'password' => bcrypt('password'),
            'role_id' => '2'
        ]);
        DB::table('users')->insert([
            'nama' => 'praktikan',
            'email' => 'praktikan@mail.com',
            'password' => bcrypt('password'),
            'role_id' => '3'
        ]);
        
    }
}
