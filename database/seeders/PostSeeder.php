<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            [
                "text"=>"Ceci est un article, bla bla bla, chose intéressante, woaw!",
                "title"=>"El Articlo",
                "dateYear"=>date("Y"),
                "dateMonth"=>date("M"),
                "dateDay"=>date("d"),
                "img"=>"blog-1.jpg",
                "category_id"=>3,
                "user_id"=>1,
                "validate"=>1,
                "bin"=>0,
                "created_at"=>now(),
            ],
            [
                "text"=>"Ceci est un deuxième article, bla bla bla, chose intéressante, woaw!",
                "title"=>"Los Articlos",
                "dateYear"=>date("Y"),
                "dateMonth"=>date("M"),
                "dateDay"=>date("d"),
                "img"=>"blog-2.jpg",
                "category_id"=>3,
                "user_id"=>1,
                "validate"=>0,
                "bin"=>0,
                "created_at"=>now(),
            ],
            [
                "text"=>"Ceci est un troisième article, bla bla bla, chose intéressante, woaw!",
                "title"=>"Articulo",
                "dateYear"=>date("Y"),
                "dateMonth"=>date("M"),
                "dateDay"=>date("d"),
                "img"=>"blog-3.jpg",
                "category_id"=>2,
                "user_id"=>1,
                "validate"=>0,
                "bin"=>0,
                "created_at"=>now(),
            ],
            [
                "text"=>"Ceci est un deuxièeme article, bla bla bla, chose intéressante, woaw!",
                "title"=>"Los Articlos",
                "dateYear"=>date("Y"),
                "dateMonth"=>date("M"),
                "dateDay"=>date("d"),
                "img"=>"blog-1.jpg",
                "category_id"=>3,
                "user_id"=>1,
                "validate"=>0,
                "bin"=>0,
                "created_at"=>now(),
            ],
        ]);
    }
}
