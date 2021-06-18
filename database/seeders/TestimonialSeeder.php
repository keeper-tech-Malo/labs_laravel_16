<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('testimonials')->insert([
            [
                "firstname"=>"keeper",
                "lastname"=>"tech",
                "quote"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.",
                "image"=>"avatar/02.jpg",
                "job"=>"Vivant",
            ],
            [
                "firstname"=>"Skoup",
                "lastname"=>"Zop",
                "quote"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.",
                "image"=>"avatar/01.jpg",
                "job"=>"Vivant",
            ],
            [
                "firstname"=>"Zip",
                "lastname"=>"Zop",
                "quote"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.",
                "image"=>"avatar/02.jpg",
                "job"=>"frère de skoup",
            ],
            [
                "firstname"=>"Man",
                "lastname"=>"Homme",
                "quote"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.",
                "image"=>"avatar/01.jpg",
                "job"=>"Vivant",
            ],
            [
                "firstname"=>"Jeff",
                "lastname"=>"Jefferson",
                "quote"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.",
                "image"=>"avatar/02.jpg",
                "job"=>"Vivant",
            ],
            [
                "firstname"=>"Jeff",
                "lastname"=>"Jefferson",
                "quote"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.",
                "image"=>"avatar/01.jpg",
                "job"=>"Vivant",
            ],
        ]);
    }
}
