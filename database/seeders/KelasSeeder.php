<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kelas')->insert([
            'nama' => 'PPLG 1',
            'walas_id' => '8',
            'bk_id' => '1',
            'jurusan_id' => '1',
        ]);  

        DB::table('kelas')->insert([
            'nama' => 'TJKT 2',
            'walas_id' => '2',
            'bk_id' => '3',
            'jurusan_id' => '5',
        ]);
        
        DB::table('kelas')->insert([
            'nama' => 'ANIMASI 1',
            'walas_id' => '10',
            'bk_id' => '2',
            'jurusan_id' => '2',
        ]);

        DB::table('kelas')->insert([
            'nama' => 'BRF 1',
            'walas_id' => '7',
            'bk_id' => '3',
            'jurusan_id' => '3',
        ]); 

        DB::table('kelas')->insert([
            'nama' => 'TE 1',
            'walas_id' => '6',
            'bk_id' => '4',
            'jurusan_id' => '4',
        ]); 

        DB::table('kelas')->insert([
            'nama' => 'TJKT 1',
            'walas_id' => '10',
            'bk_id' => '5',
            'jurusan_id' => '5',
        ]); 

    }
}
