<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();       // Faker create random data for insert on DB table;
        for( $i=1; $i <=5; $i++){
            $user = new User;
            $user->name = $faker->name;
            $user->email = $faker->email;
            $user->password = $faker->password;
            $user->save();
        }
       

    }
}
