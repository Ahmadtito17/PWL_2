<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MatkulSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('matkul')->insert([
            [
                'kode_mk' => 'RT001',
                'nama_mk' => 'Pemrograman Web Lanjut',
                'sks' => '4',
                'dosen' => 'Moch. Zawaruddin'
            ],
            [
                'kode_mk' => 'RT002',
                'nama_mk' => 'Statistik Komputasi',
                'sks' => '2',
                'dosen' => 'Elok Nur Hamdana'
            ],
            [
                'kode_mk' => 'RT003',
                'nama_mk' => 'Kewarganegaraan',
                'sks' => '2',
                'dosen' => 'Widaningsih'
            ]
        ]);
    }
}
