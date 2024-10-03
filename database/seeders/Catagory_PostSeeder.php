<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class Catagory_PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('catagory_post')->insert(
            [
                [
                    'catagory_id' => 1,
                    'post_id'=> 1,
                    'created_at'=> Carbon::now(),
                    'updated_at'=> Carbon::now(),
                ],
                [
                    'catagory_id' => 1,
                    'post_id'=> 2,
                    'created_at'=> Carbon::now(),
                    'updated_at'=> Carbon::now(),
                ],
                [
                    'catagory_id' => 1,
                    'post_id'=> 3,
                    'created_at'=> Carbon::now(),
                    'updated_at'=> Carbon::now(),
                ],
                [
                    'catagory_id' => 2,
                    'post_id'=> 2,
                    'created_at'=> Carbon::now(),
                    'updated_at'=> Carbon::now(),
                ],
                [
                    'catagory_id' => 2,
                    'post_id'=> 3,
                    'created_at'=> Carbon::now(),
                    'updated_at'=> Carbon::now(),
                ],
            ]
 
 
             );
    }
}
