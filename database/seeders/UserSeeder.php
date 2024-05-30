<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'first_name'=>'admin',
                'last_name'=>'admin',
                'email'=>'admin@gmail.com',
                'phone_number'=>'089271237823',
                'password'=>bcrypt('admin')
            ],
        ];

        foreach($userData as $key => $val){
            User::create($val);
        }
    }
}
