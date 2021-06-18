<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            [
                "title"=>"Get in the lab",
                "description"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
                "icon_id"=>"1",
                "created_at"=>now(),
            ],
            [
                "title"=>"Projects online",
                "description"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
                "icon_id"=>"1",
                "created_at"=>now(),
            ],
            [
                "title"=>"SMART MARKETING",
                "description"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
                "icon_id"=>"3",
                "created_at"=>now(),
            ],
            [
                "title"=>"Social Media",
                "description"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
                "icon_id"=>"4",
                "created_at"=>now(),
            ],
            [
                "title"=>"Brainstorming",
                "description"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
                "icon_id"=>"5",
                "created_at"=>now(),
            ],
            [
                "title"=>"Documented",
                "description"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
                "icon_id"=>"6",
                "created_at"=>now(),
            ],
            [
                "title"=>"Responsive",
                "description"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
                "icon_id"=>"7",
                "created_at"=>now(),
            ],
            [
                "title"=>"Retina",
                "description"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
                "icon_id"=>"8",
                "created_at"=>now(),
            ],
            [
                "title"=>"Ultra modern",
                "description"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
                "icon_id"=>"9",
                "created_at"=>now(),
            ],
        ]);
    }
}
