<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Str;

class Admin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {



        User::create ([
        
        'name' => 'Admin',
        'email' => 'admin@gmail.com',
        'phone' => '0799078807',
        'password' => bcrypt('123456789'),
        'is_admin' => 1

        
        ]);

        User::create ([
        
        'name' => 'Amro',
        'email' => 'shandaqamro@gmail.com',
        'phone' => '0799379762',
        'password' => bcrypt('123456789'),
        'is_admin' => 1

        
        ]);
     
    }
}
