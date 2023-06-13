<?php

namespace Database\Seeders;

use App\Models\Siswa;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for($i=0; $i < 70; $i++){ 
            $user =  User::create([
                'name' => $faker->name(),
                'email' => $faker->email(),
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'profile_type' => 'siswa'
            ]);

            Siswa::create([
                'user_id' => $user->id,
                'kelas_id' => $faker->numberBetween(1, 6),
                'no_telepon' => $faker->phoneNumber(),
                'nipd' => $faker->randomNumber(5, true),
                'nisn' => $faker->randomNumber(5, true),
            ]);

            $user->assignRole('siswa');
        }
    }
}
