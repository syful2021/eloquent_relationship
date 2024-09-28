<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        

        $user = new User;
        $user->name = "User One";
        $user->email = "userone@gmail.com";
        $user->password = "12345678";
        $user->save();

    }
}
