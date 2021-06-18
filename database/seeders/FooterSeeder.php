<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FooterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('footers')->insert([
            [
                "year"=>"2017",
                "rights"=>"All rights reserved.",
                "by"=>"Designed by",
                "author"=>"Keeper",
            ]
        ]);
    }
}
