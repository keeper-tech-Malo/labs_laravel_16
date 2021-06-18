<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tagposts')->insert([
            [
                "tag_id"=>1,
                "post_id"=>1,
            ]
        ]);
    }
}
