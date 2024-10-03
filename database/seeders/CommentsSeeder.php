<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CommentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('comments')->insert(
            [
                 [
                     'post_id'=> 1,
                     'message'=> 'Comment 1',
                     'created_at'=> Carbon::now(),
                     'updated_at'=> Carbon::now(),
                 ],
                 [
                     'post_id'=> 1,
                     'message'=> 'Comment 1 of post 1',
                     'created_at'=> Carbon::now(),
                     'updated_at'=> Carbon::now(),
                 ],
                 [
                     'post_id'=> 2,
                     'message'=> 'Comment 2',
                     'created_at'=> Carbon::now(),
                     'updated_at'=> Carbon::now(),
                 ],
                 [
                     'post_id'=> 3,
                     'message'=> 'Comment 3',
                     'created_at'=> Carbon::now(),
                     'updated_at'=> Carbon::now(),
                 ],
            ]
 
 
             );
    }
}
