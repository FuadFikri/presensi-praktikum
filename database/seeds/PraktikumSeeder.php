<?php

use Illuminate\Database\Seeder;

class PraktikumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('praktikums')->insert([
            'nama' => 'Praktikum Algoritma Pemrograman',
            'kode_vmk' => 'QKK18',
            'sks' => '2',
            'kelas' => 'A1',
        ]);
        DB::table('praktikums')->insert([
            'nama' => 'Praktikum Pemrograman Game',
            'kode_vmk' => 'QKA18',
            'sks' => '2',
            'kelas' => 'A2',
        ]);
        DB::table('praktikums')->insert([
            'nama' => 'Praktikum Desain',
            'kode_vmk' => 'KLIE8',
            'sks' => '1',
            'kelas' => 'B2',
        ]);
    }
}
