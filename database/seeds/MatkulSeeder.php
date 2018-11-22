<?php

use Illuminate\Database\Seeder;

class MatkulSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('matkuls')->insert([
            'nama' => 'Desain Elementer',
            'kode_vmk' => 'vmk12a',
            'sks' => 1,
        ]);
        DB::table('matkuls')->insert([
            'nama' => 'Algoritma Pemrograman',
            'kode_vmk' => 'vmk1xa',
            'sks' => 2,
        ]);
        DB::table('matkuls')->insert([
            'nama' => 'Jaringan Komputer',
            'kode_vmk' => 'vq12a',
            'sks' => 1,
        ]);
        DB::table('matkuls')->insert([
            'nama' => 'Object Oriented Programming',
            'kode_vmk' => 'amk1a',
            'sks' => 2,
        ]);
    }
}
