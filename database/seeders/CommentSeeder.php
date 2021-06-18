<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([
            [
                "name"=>"Scooby Doo",
                "comment"=>"weeeeee",
                "email"=>"where@are.you",
                "dateYear"=>date("Y"),
                "dateMonth"=>date("M"),
                "dateDay"=>date("d"),
                "post_id"=>1,
                "validate"=>1,
            ]
        ]);
    }
}
