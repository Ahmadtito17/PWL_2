<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KendaraanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kendaraan')->insert([
            [
                'nopol' => 'AG 123 VA',
                'merk' => 'Yamaha',
                'jenis' => 'Yamaha Fazzio',
                'tahun_buat' => '2022',
                'warna' => 'putih'
            ],
            [
                'nopol' => 'AG 697 VX',
                'merk' => 'Honda',
                'jenis' => 'Honda HRV',
                'tahun_buat' => '2022',
                'warna' => 'hitam'
            ]
        ]);
    }
}
