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



        // WALAS





        $user1 = User::create([
            'name' => 'Bu Nahla',
            'email' => 'walas1@gmail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'profile_type' => 'guru'
        ]);   

        Guru::create([
            'user_id' => $user1->id,
            'no_telepon' => $faker->phoneNumber(),
        ]);

        $user1->assignRole('walas');



        $user2 = User::create([
            'name' => 'Bu Sinta',
            'email' => 'walas2@gmail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'profile_type' => 'guru'
        ]);   

        Guru::create([
            'user_id' => $user2->id,
            'no_telepon' => $faker->phoneNumber(),
        ]);

        $user2->assignRole('walas');


        $user3 = User::create([
            'name' => 'Pak Dhika',
            'email' => 'walas3@gmail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'profile_type' => 'guru'
        ]);   

        Guru::create([
            'user_id' => $user3->id,
            'no_telepon' => $faker->phoneNumber(),
        ]);

        $user3->assignRole('walas');


        $user4 = User::create([
            'name' => 'Bu Yoshi',
            'email' => 'walas4@gmail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'profile_type' => 'guru'
        ]);   

        Guru::create([
            'user_id' => $user4->id,
            'no_telepon' => $faker->phoneNumber(),
        ]);

        $user4->assignRole('walas');


        $user5 = User::create([
            'name' => 'Bu Ambar',
            'email' => 'walas5@gmail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'profile_type' => 'guru'
        ]);   

        Guru::create([
            'user_id' => $user5->id,
            'no_telepon' => $faker->phoneNumber(),
        ]);

        $user5->assignRole('walas');


        $user6 = User::create([
            'name' => 'Bu Ratna',
            'email' => 'walas6@gmail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'profile_type' => 'guru'
        ]);   

        Guru::create([
            'user_id' => $user6->id,
            'no_telepon' => $faker->phoneNumber(),
        ]);

        $user6->assignRole('walas');

        $user7 = User::create([
            'name' => 'Bu Rina',
            'email' => 'walas7@gmail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'profile_type' => 'guru'
        ]);   

        Guru::create([
            'user_id' => $user7->id,
            'no_telepon' => $faker->phoneNumber(),
        ]);

        $user7->assignRole('walas');


        $user8 = User::create([
            'name' => 'Bu Kasandra ',
            'email' => 'walas8@gmail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'profile_type' => 'guru'
        ]);   

        Guru::create([
            'user_id' => $user8->id,
            'no_telepon' => $faker->phoneNumber(),
        ]);

        $user8->assignRole('walas');
        $user8->assignRole('admin');
        $user8->assignRole('bk');

        $user9 = User::create([
            'name' => 'Pak Dhani ',
            'email' => 'walas9@gmail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'profile_type' => 'guru'
        ]);   

        Guru::create([
            'user_id' => $user9->id,
            'no_telepon' => $faker->phoneNumber(),
        ]);

        $user9->assignRole('walas');


        $user10 = User::create([
            'name' => 'Pak Fariz ',
            'email' => 'walas10@gmail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'profile_type' => 'guru'
        ]);   

        Guru::create([
            'user_id' => $user10->id,
            'no_telepon' => $faker->phoneNumber(),
        ]);

        $user10->assignRole('walas');




        // BK


        $user11 = User::create([
            'name' => 'Bu Henny ',
            'email' => 'bk11@gmail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'profile_type' => 'guru'
        ]);   

        Guru::create([
            'user_id' => $user11->id,
            'no_telepon' => $faker->phoneNumber(),
        ]);

        $user11->assignRole('bk');


        $user12 = User::create([
            'name' => 'Pak Ricky ',
            'email' => 'bk12@gmail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'profile_type' => 'guru'
        ]);   

        Guru::create([
            'user_id' => $user12->id,
            'no_telepon' => $faker->phoneNumber(),
        ]);

        $user12->assignRole('bk');


        $user13 = User::create([
            'name' => 'Bu Fika  ',
            'email' => 'bk13@gmail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'profile_type' => 'guru'
        ]);   

        Guru::create([
            'user_id' => $user13->id,
            'no_telepon' => $faker->phoneNumber(),
        ]);

        $user13->assignRole('bk');


        $user14 = User::create([
            'name' => 'Bu Sheila ',
            'email' => 'bk14@gmail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'profile_type' => 'guru'
        ]);   

        Guru::create([
            'user_id' => $user14->id,
            'no_telepon' => $faker->phoneNumber(),
        ]);

        $user14->assignRole('bk');


        $user15 = User::create([
            'name' => 'Bu Nadia ',
            'email' => 'bk15@gmail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'profile_type' => 'guru'
        ]);   

        Guru::create([
            'user_id' => $user15->id,
            'no_telepon' => $faker->phoneNumber(),
        ]);

        $user15->assignRole('bk');


        



















































































        // $user2 = User::create([
        //     'name' => 'Bu Caca',
        //     'email' => 'gurubk2@gmail.com',
        //     'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
        //     'profile_type' => 'guru'
        // ]);
        
        // Guru::create([
        //     'user_id' => $user2->id,
        //     'no_telepon' => $faker->phoneNumber(),
        // ]);

        // $user2->assignRole('bk');
        // $user2->assignRole('walas');
        // $user2->assignRole('admin');


        // $user3 = User::create([
        //     'name' => 'Pak Ricky',
        //     'email' => 'gurubk3@gmail.com',
        //     'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
        //     'profile_type' => 'guru'
        // ]); 
        
        // Guru::create([
        //     'user_id' => $user3->id,
        //     'no_telepon' => $faker->phoneNumber(),
        // ]);

        // $user3->assignRole('bk');

        // $user4 = User::create([
        //     'name' => 'Bu Ika',
        //     'email' => 'gurubk4@gmail.com',
        //     'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
        //     'profile_type' => 'guru'
        // ]); 
        
        // Guru::create([
        //     'user_id' => $user4->id,
        //     'no_telepon' => $faker->phoneNumber(),
        // ]);

        // $user4->assignRole('bk');

        // $user5 = User::create([
        //     'name' => 'Bu Sheyla',
        //     'email' => 'gurubk5@gmail.com',
        //     'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
        //     'profile_type' => 'guru'
        // ]); 
        
        // Guru::create([
        //     'user_id' => $user5->id,
        //     'no_telepon' => $faker->phoneNumber(),
        // ]);

        // $user5->assignRole('bk');

        // // Walas



        // $user6 = User::create([
        //     'name' => 'Bu Nahla',
        //     'email' => 'walas1@gmail.com',
        //     'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
        //     'profile_type' => 'guru'
        // ]);
        
        // Guru::create([
        //     'user_id' => $user6->id,
        //     'no_telepon' => $faker->phoneNumber(),
        // ]);

        // $user6->assignRole('walas');

        // $user7 = User::create([
        //     'name' => 'Pak Erraldo',
        //     'email' => 'walas2@gmail.com',
        //     'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
        //     'profile_type' => 'guru'
        // ]);   

        // Guru::create([
        //     'user_id' => $user7->id,
        //     'no_telepon' => $faker->phoneNumber(),
        // ]);

        // $user7->assignRole('walas');

        // $user8 = User::create([
        //     'name' => 'Bu Sinta',
        //     'email' => 'walas3@gmail.com',
        //     'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
        //     'profile_type' => 'guru'
        // ]);   

        // Guru::create([
        //     'user_id' => $user8->id,
        //     'no_telepon' => $faker->phoneNumber(),
        // ]);

        // $user8->assignRole('walas');

        // $user9 = User::create([
        //     'name' => 'Sensei',
        //     'email' => 'walas4@gmail.com',
        //     'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
        //     'profile_type' => 'guru'
        // ]);  
        
        // Guru::create([
        //     'user_id' => $user9->id,
        //     'no_telepon' => $faker->phoneNumber(),
        // ]);

        // $user9->assignRole('walas');

        // $user10 = User::create([
        //     'name' => 'Pak Dika',
        //     'email' => 'walas5@gmail.com',
        //     'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
        //     'profile_type' => 'guru'
        // ]);   

        // Guru::create([
        //     'user_id' => $user10->id,
        //     'no_telepon' => $faker->phoneNumber(),
        // ]);

        // $user10->assignRole('walas');


        // $user11 = User::create([
        //     'name' => 'Pak ',
        //     'email' => 'walas5@gmail.com',
        //     'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
        //     'profile_type' => 'guru'
        // ]);   

        // Guru::create([
        //     'user_id' => $user11->id,
        //     'no_telepon' => $faker->phoneNumber(),
        // ]);

        // $user11->assignRole('walas');




        
    }
}
