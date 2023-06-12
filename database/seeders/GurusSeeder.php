<?php

namespace Database\Seeders;

use App\Models\Guru;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class GurusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $faker = Faker::create();

        $user1 = User::create([
            'name' => 'Bu Heni',
            'email' => 'gurubk1@gmail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'profile_type' => 'guru'
        ]);   

        Guru::create([
            'user_id' => $user1->id,
            'no_telepon' => $faker->phoneNumber(),
        ]);

        $user1->assignRole('bk');


        $user2 = User::create([
            'name' => 'Bu Caca',
            'email' => 'gurubk2@gmail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'profile_type' => 'guru'
        ]);
        
        Guru::create([
            'user_id' => $user2->id,
            'no_telepon' => $faker->phoneNumber(),
        ]);

        $user2->assignRole('bk');
        $user2->assignRole('walas');
        $user2->assignRole('admin');


        $user3 = User::create([
            'name' => 'Pak Ricky',
            'email' => 'gurubk3@gmail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'profile_type' => 'guru'
        ]); 
        
        Guru::create([
            'user_id' => $user3->id,
            'no_telepon' => $faker->phoneNumber(),
        ]);

        $user3->assignRole('bk');

        $user4 = User::create([
            'name' => 'Bu Ika',
            'email' => 'gurubk4@gmail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'profile_type' => 'guru'
        ]); 
        
        Guru::create([
            'user_id' => $user4->id,
            'no_telepon' => $faker->phoneNumber(),
        ]);

        $user4->assignRole('bk');

        $user5 = User::create([
            'name' => 'Bu Sheyla',
            'email' => 'gurubk5@gmail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'profile_type' => 'guru'
        ]); 
        
        Guru::create([
            'user_id' => $user5->id,
            'no_telepon' => $faker->phoneNumber(),
        ]);

        $user5->assignRole('bk');

        // Walas



        $user6 = User::create([
            'name' => 'Bu Nahla',
            'email' => 'walas1@gmail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'profile_type' => 'guru'
        ]);
        
        Guru::create([
            'user_id' => $user6->id,
            'no_telepon' => $faker->phoneNumber(),
        ]);

        $user6->assignRole('walas');

        $user7 = User::create([
            'name' => 'Pak Erraldo',
            'email' => 'walas2@gmail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'profile_type' => 'guru'
        ]);   

        Guru::create([
            'user_id' => $user7->id,
            'no_telepon' => $faker->phoneNumber(),
        ]);

        $user7->assignRole('walas');

        $user8 = User::create([
            'name' => 'Bu Sinta',
            'email' => 'walas3@gmail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'profile_type' => 'guru'
        ]);   

        Guru::create([
            'user_id' => $user8->id,
            'no_telepon' => $faker->phoneNumber(),
        ]);

        $user8->assignRole('walas');

        $user9 = User::create([
            'name' => 'Sensei',
            'email' => 'walas4@gmail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'profile_type' => 'guru'
        ]);  
        
        Guru::create([
            'user_id' => $user9->id,
            'no_telepon' => $faker->phoneNumber(),
        ]);

        $user9->assignRole('walas');

        $user10 = User::create([
            'name' => 'Pak Dika',
            'email' => 'walas5@gmail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'profile_type' => 'guru'
        ]);   

        Guru::create([
            'user_id' => $user10->id,
            'no_telepon' => $faker->phoneNumber(),
        ]);

        $user10->assignRole('walas');

        
    }
}
