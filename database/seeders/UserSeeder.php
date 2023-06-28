<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{

    public function run()
    {
        DB::table('users')->insert([
            [
                'login' => 'Guest',
                'password' => Hash::make('1234'),
                'name' => 'Ciemiņš',
                'image' => 'public/images/Koks.jpg',
                'surname' => 'Ciemo',
                'sex' => 2,
                'age' => 100,
                'weight' => 110,
                'bench' => null,
                'squat' => null,
                'deadlift' => null,
                'role' => 'guest',
            ],
            [
                'login' => 'admin',
                'password' => Hash::make('007admin007'),
                'name' => 'Galvenais',
                'image' => 'public/images/Koks.jpg',
                'surname' => 'Kungs',
                'sex' => 1,
                'age' => 100,
                'weight' => 100,
                'bench' => null,
                'squat' => null,
                'deadlift' => null,
                'role' => 'admin',
            ],
        ]);
    }
}
