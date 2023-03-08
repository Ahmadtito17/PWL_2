<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KeluargaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('keluarga')->insert([
            [
                'no' => '1',
                'nama' => 'Ehsan',
                'peran' => 'Ayah',
                'jk' => 'L'
            ],
            [
                'no' => '2',
                'nama' => 'Mei Mei',
                'peran' => 'Ibu',
                'jk' => 'P'
            ],
            [
                'no' => '3',
                'nama' => 'Upin',
                'peran' => 'Anak ke-1',
                'jk' => 'L'
            ],
            [
                'no' => '4',
                'nama' => 'Fizi',
                'peran' => 'Anak ke-2',
                'jk' => 'L'
            ],
            [
                'no' => '5',
                'nama' => 'Susanti',
                'peran' => 'Anak ke-3',
                'jk' => 'P'
            ]
        ]);
    }
}
