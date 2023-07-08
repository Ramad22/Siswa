<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LoginSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'name' => 'Gilang Super',
                'email' => 'gil@gmail.com',
                'role' => 'super_admin',
                'password' => bcrypt('123456')

            ],

            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'role' => 'admin',
                'password' => bcrypt('123456')

            ],
        ];

        foreach($userData as $key=>$val){
            User::create($val);
        }
    }
}
