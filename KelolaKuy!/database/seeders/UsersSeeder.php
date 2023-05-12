<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersSeeder extends Seeder
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
               'username'=>'admin',
               'name'=>'Admin User',
               'email'=>'admin@kelolakuy.com',
               'level'=>1,
               'password'=> bcrypt('123456'),
            ],
            [
               'username'=>'syahla',
               'name'=>'Syahla',
               'email'=>'syahla@kelolakuy.com',
               'level'=>0,
               'password'=> bcrypt('123456'),
            ],
        ];
    
        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}
