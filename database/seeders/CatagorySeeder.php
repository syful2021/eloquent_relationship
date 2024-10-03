<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CatagorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('catagories')->insert(
            [
                [
                    'name'=> 'Catagory 1',
                    'created_at'=> Carbon::now(),
                    'updated_at'=> Carbon::now(),
                ],
                [
                    'name'=> 'Catagory 2',
                    'created_at'=> Carbon::now(),
                    'updated_at'=> Carbon::now(),
                ]
            ]
        );
    }
}
