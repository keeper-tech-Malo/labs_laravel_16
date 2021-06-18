<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TitleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('titles')->insert([
            [
                "titleHome1"=>"GET IN THE LAB AND (DISCOVER) THE WORLD",
                "titleHome2"=>"WHAT OUR CLIENTS (SAY)",
                "titleHome3"=>"GET IN (THE LAB) AND SEE THE SERVICES",
                "titleHome4"=>"GET IN (THE LAB) AND MEET THE TEAM",
                "titleService1"=>"GET IN (THE LAB) AND SEE THE SERVICES",
                "titleService2"=>"GET IN (THE LAB) AND DISCOVER THE WORLD",
            ],
        ]);
    }
}
