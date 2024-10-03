<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('posts')->insert(
            [
                 [
                     'title'=>'Post 1',
                     'created_at'=> Carbon::now(),
                     'updated_at'=> Carbon::now(),
                 ],
                 [
                     'title'=>'Post 2',
                     'created_at'=> Carbon::now(),
                     'updated_at'=> Carbon::now(),
                 ],
                 [
                     'title'=>'Post 3',
                     'created_at'=> Carbon::now(),
                     'updated_at'=> Carbon::now(),
                 ],
            ]

 
             );
    }
}
