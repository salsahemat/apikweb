<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'username'           => 'admin',
                'email'          => 'admin@example.com',
                'password'       => '123',
                'remember_token' => null,
            ],
        ];

        User::insert($users);
    }
}
