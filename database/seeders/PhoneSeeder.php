<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PhoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('phones')->insert(
            [
                 [
                     'name'=>'iPhone 12 Pro max',
                     'user_id'=> 13,
                     'created_at'=> Carbon::now(),
                     'updated_at'=> Carbon::now(),
                 ],
                 [
                     'name'=>'Huawey Y9',
                     'user_id'=> 14,
                     'created_at'=> Carbon::now(),
                     'updated_at'=> Carbon::now(),
                 ],
                 [
                     'name'=>'Oppo',
                     'user_id'=> 15,
                     'created_at'=> Carbon::now(),
                     'updated_at'=> Carbon::now(),
                 ],
            ]
 
 
             );
 
    }
}
