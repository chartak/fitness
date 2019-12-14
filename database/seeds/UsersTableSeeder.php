<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'             => 1,
                'name'           => 'Admin',
                'email'          => 'admin@admin.com',
                'password'       => '$2y$10$Xr5WLsZgOtOdjnRfBZ2cg.zY7D64oUr0f6L6iXNrjDphHfjabR6oW',
                'remember_token' => null,
            ],
        ];

        User::insert($users);
    }
}
