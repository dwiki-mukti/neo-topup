<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        User::create([
            'name' => 'super admin',
            'role' => 'super admin',
            'email' => 'super@gmail.com',
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make('password123'),
            'saldo_coin' => rand(1, 900) * 100000
        ]);
        User::create([
            'name' => 'admin 1',
            'role' => 'admin',
            'email' => 'admin1@gmail.com',
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make('password123'),
            'saldo_coin' => rand(1, 900) * 100000
        ]);
        User::create([
            'name' => 'admin 2',
            'role' => 'admin',
            'email' => 'admin2@gmail.com',
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make('password123'),
            'saldo_coin' => rand(1, 900) * 100000
        ]);

        for ($i = 0; $i < 10; $i++) {
            User::create([
                'name' => $faker->name,
                'email' => $faker->email,
                'email_verified_at' => Carbon::now(),
                'password' => Hash::make('password123'),
                'saldo_coin' => rand(1, 900) * 100000
            ]);
        }
        User::create([
            'name' => 'Test Dwiki',
            'email' => '243dwiki.com@gmail.com',
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make('password123'),
            'saldo_coin' => rand(1, 900) * 100000
        ]);
    }
}
