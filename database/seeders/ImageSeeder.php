<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->insert([
            [
                "link"=>"01.jpg",
                "first"=>0,
            ],
            [
                "link"=>"02.jpg",
                "first"=>0,
            ],
        ]);
    }
}
