<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PetakerawananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('jenis_kerawanans')->insert([
            'jenis_kerawanan' => 'bolos',
        ]); 
        DB::table('jenis_kerawanans')->insert([
            'jenis_kerawanan' => 'telat',
        ]); 
        DB::table('jenis_kerawanans')->insert([
            'jenis_kerawanan' => 'jarang masuk kelas',
        ]); 
        DB::table('jenis_kerawanans')->insert([
            'jenis_kerawanan' => 'pacaran',
        ]); 
        DB::table('jenis_kerawanans')->insert([
            'jenis_kerawanan' => 'merokok',
        ]); 
    }
}
