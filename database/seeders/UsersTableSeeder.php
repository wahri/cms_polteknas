<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Role;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run(\Faker\Generator $faker)
    {
        User::truncate();
        \DB::table('role_user')->truncate();

        //-------------------------------------------------
        // Developer
        //-------------------------------------------------
        $user = User::create([
            'firstname'         => 'Administrator',
            'lastname'          => '',
            'cellphone'         => '123456789',
            'email'             => 'admin@example.com',
            'gender'            => 'male',
            'password'          => bcrypt('admin'),
            'email_verified_at' => now()
        ]);
        $this->addAllRolesToUser($user);

        //-------------------------------------------------
        // Developer
        //-------------------------------------------------
        $user = User::create([
            'firstname'         => 'Nadja',
            'lastname'          => 'Schnabel',
            'cellphone'         => '123456789',
            'email'             => 'nadja@asylum.com.na',
            'gender'            => 'female',
            'password'          => bcrypt('nadja'),
            'email_verified_at' => now()
        ]);
        $this->addAllRolesToUser($user);

        //-------------------------------------------------
        // GITHUP - PREVIEW
        //-------------------------------------------------
        $user = User::create([
            'firstname'         => 'Admin',
            'lastname'          => 'Github',
            'cellphone'         => '123456789',
            'email'             => 'github@bpocallaghan.ie',
            'gender'            => 'male',
            'password'          => bcrypt('github'),
            'email_verified_at' => now()
        ]);
        $this->addAllRolesToUser($user);

        // dummy users
        /*for ($i = 0; $i < 10; $i++) {
            $user = User::create([
                'firstname'         => $faker->firstName,
                'lastname'          => $faker->lastName,
                'cellphone'         => $faker->phoneNumber,
                'email'             => $faker->email,
                'gender'            => $faker->randomElement(['male', 'female']),
                'password'          => bcrypt('secret'),
                'email_verified_at' => now()
            ]);

            $user->syncRoles([
                \App\Models\Role::$USER,
            ]);
        }*/
    }

    /**
     * Add all the roles to the user
     * @param $user
     */
    private function addAllRolesToUser($user)
    {
        $roles = Role::all()->pluck('keyword', 'id')->values();

        $user->syncRoles($roles);
    }
}
