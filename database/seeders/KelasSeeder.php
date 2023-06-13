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

        // PPLG
        DB::table('kelas')->insert([
            'nama' => 'XI PPLG 1',
            'walas_id' => '2',
            'bk_id' => '11',
            'jurusan_id' => '1',
        ]); 

        DB::table('kelas')->insert([
            'nama' => 'XI PPLG 2',
            'walas_id' => '1',
            'bk_id' => '12',
            'jurusan_id' => '1',
        ]); 

        // ANIMASI

        DB::table('kelas')->insert([
            'nama' => 'XI Animasi 1',
            'walas_id' => '3',
            'bk_id' => '13',
            'jurusan_id' => '2',
        ]); 

        DB::table('kelas')->insert([
            'nama' => ' XI Animasi 2',
            'walas_id' => '4',
            'bk_id' => '13',
            'jurusan_id' => '2',
        ]); 

        DB::table('kelas')->insert([
            'nama' => 'XI Animasi 3',
            'walas_id' => '6',
            'bk_id' => '13',
            'jurusan_id' => '2',
        ]); 

        DB::table('kelas')->insert([
            'nama' => 'XI Animasi 4',
            'walas_id' => '7',
            'bk_id' => '13',
            'jurusan_id' => '2',
        ]); 

        // TJKT 

        DB::table('kelas')->insert([
            'nama' => 'XI TJKT 1',
            'walas_id' => '5',
            'bk_id' => '14',
            'jurusan_id' => '5',
        ]); 

        DB::table('kelas')->insert([
            'nama' => 'XI TJKT 2',
            'walas_id' => '8',
            'bk_id' => '14',
            'jurusan_id' => '5',
        ]); 

        // BRF

        DB::table('kelas')->insert([
            'nama' => ' XI BRF 1',
            'walas_id' => '9',
            'bk_id' => '15',
            'jurusan_id' => '3',
        ]); 

        // TE

        DB::table('kelas')->insert([
            'nama' => 'XI TE 1',
            'walas_id' => '10',
            'bk_id' => '15',
            'jurusan_id' => '4',
        ]); 
        
        
        
        

    }
}
