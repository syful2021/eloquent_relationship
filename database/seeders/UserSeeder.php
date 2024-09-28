<?php

namespace Database\Seeders;

use App\Models\User;
use Faker\Factory as Faker;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // array seeder

        DB::table('users')->insert(
           [
                [
                    'name'=>'User1',
                    'email'=> 'user1@gmail.com',
                    'password'=> 12345678,
                    'created_at'=> Carbon::now(),
                    'updated_at'=> Carbon::now(),
                ],
                [
                    'name'=>'User2',
                    'email'=> 'user2@gmail.com',
                    'password'=> 12345678,
                    'created_at'=> Carbon::now(),
                    'updated_at'=> Carbon::now(),
                ],
                [
                    'name'=>'User3',
                    'email'=> 'user3@gmail.com',
                    'password'=> 12345678,
                    'created_at'=> Carbon::now(),
                    'updated_at'=> Carbon::now(),
                ],
           ]


            );

        //  seeder one

        // $user = new User;
        // $user->name = "User2";
        // $user->email = "user2@gmail.com";
        // $user->password = "12345678";
        // $user->save();

        // $faker = Faker::create();       // Faker create random data for insert on DB table;
        // for( $i=1; $i <=5; $i++){
    
        // }

        }
}
