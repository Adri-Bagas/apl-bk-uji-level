<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JurusansSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('jurusans')->insert([
            'nama' => 'PPLG',
            
        ]);   

        DB::table('jurusans')->insert([
            'nama' => 'ANIMASI',
            
        ]);   

        DB::table('jurusans')->insert([
            'nama' => 'BRF',
            
        ]);   

        DB::table('jurusans')->insert([
            'nama' => 'TE',
            
        ]);   

        DB::table('jurusans')->insert([
            'nama' => 'TJKT',
            
        ]);   
    }
}
