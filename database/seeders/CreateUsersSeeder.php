<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'khalid Ammar',
                'email' => 'khalid_admin@blog.com',
                'role' => 'admin',
                'password' => bcrypt('123456'),
            ],
            [
                'name' => 'Mohamed Aouri',
                'email' => 'mohamed_admin@blog.com',
                'role' => 'admin',
                'password' => bcrypt('123456'),
            ],
            [
                'name' => 'Youssef Amjad',
                'email' => 'youssef_admin@blog.com',
                'role' => 'admin',
                'password' => bcrypt('123456'),
            ],
            [
                'name' => 'Super Admin',
                'email' => 'super_admin@blog.com',
                'role' => 'superAdmin',
                'password' => bcrypt('123456'),
            ],
            
        ];

        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}
