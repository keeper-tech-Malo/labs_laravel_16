<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                "category"=>"No Category"
            ],
            [
                "category"=>"Vie"
            ],
            [
                "category"=>"Technologie"
            ],
            [
                "category"=>"Nature"
            ],
            [
                "category"=>"Jeux"
            ],
            [
                "category"=>"Manga"
            ],
        ]);
    }
}
