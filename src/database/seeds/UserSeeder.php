<?php

namespace morley\banned\database\seeds;
use Illuminate\Database\Seeder;
use App\User;
use Faker\Generator as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'              => 'Morley Gwapo',
            'email'             => 'moravel752@gmail.com',
            'email_verified_at' => now(),
            'password'          => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token'    => 'JSKDJKJDAKSAJDKSAJDSAJSKADSAJKDJKJTKRJEKTJKJTKr',
            'status_id'          => 1

        ]);
    }
}
