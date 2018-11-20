<?php

use Illuminate\Database\Seeder;

class DosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dosens')->insert([
            'nama' => 'Muhammad Fakhrurrifqi, S.Kom., M.Cs.',
            'nip' => '111198611201309101',
            'telp' => '090898971',
        ]);
        DB::table('dosens')->insert([
            'nama' => 'Yusron Fuadi, S.Sn., M.Sn.',
            'nip' => '111198301201605101',
            'telp' => '0908992',
        ]);
        DB::table('dosens')->insert([
            'nama' => 'Anindita Suryarasmi, S.Kom., M.Cs.',
            'nip' => '198706122015042002',
            'telp' => '090889897192',
        ]);
        DB::table('dosens')->insert([
            'nama' => 'Umar Taufiq, S.Kom., M.Cs.',
            'nip' => '111198212201610101',
            'telp' => '092889897192',
        ]);
        DB::table('dosens')->insert([
            'nama' => 'Imam Fahrurrozi, S.T., M.Cs.',
            'nip' => '111198801201701101',
            'telp' => '456789879',
        ]);
        DB::table('dosens')->insert([
            'nama' => 'Endro Purnomo, S.Kom., M.Cs.',
            'nip' => '111198404201706101',
            'telp' => '4567899879',
        ]);
        DB::table('dosens')->insert([
            'nama' => 'Irkham Huda, S.Kom., M.Cs.',
            'nip' => '111198905201706104',
            'telp' => '07345678',
        ]);
        DB::table('dosens')->insert([
            'nama' => 'Firma Syahrian, S.Kom., M.Cs.',
            'nip' => '111198703201802101',
            'telp' => '098345678',
        ]);
    }
}
