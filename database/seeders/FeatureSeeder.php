<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('features')->insert([
            [
                "icon_id"=>10,
                "title"=>"Get in the lab",
                "description"=>"Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec",
            ],
            [
                "icon_id"=>11,
                "title"=>"Projects online",
                "description"=>"Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec",
            ],
            [
                "icon_id"=>12,
                "title"=>"SMART MARKETING",
                "description"=>"Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec",
            ],
            [
                "icon_id"=>13,
                "title"=>"Get in the lab",
                "description"=>"Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec",
            ],
            [
                "icon_id"=>14,
                "title"=>"Projects online",
                "description"=>"Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec",
            ],
            [
                "icon_id"=>15,
                "title"=>"SMART MARKETING",
                "description"=>"Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec",
            ],
        ]);
    }
}
