<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUsersSeeder extends Seeder
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
                'f_name'=>'AdminS',
                's_name'=>'Sienko',
                'phone'=>'12345678',
                'address'=>'P.O BOX 2222',
                'email'=>'admin@donnorapp.com',
                'type'=>1,
                'password'=> bcrypt('123456'),
            ],
            [
               'f_name'=>'Stephen',
               's_name'=>'Sienko',
               'phone'=>'12345678',
               'address'=>'P.O BOX 2222',
               'email'=>'user@donnorapp.com',
               'type'=>0,
               'password'=> bcrypt('123456'),
            ],
        ];

        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}