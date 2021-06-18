<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                "firstname"=>"Mr.",
                "name"=>"Keeper",
                "age"=>12,
                "role_id"=>1,
                "job_id"=>1,
                "validate"=>1,
                "testimonial_id"=>null,
                "img"=>"1.jpg",
                "email"=>"admin@keeper.it",
                "password"=>Hash::make('testtest'),
            ],
            [
                "firstname"=>"Mr.",
                "name"=>"Keeper",
                "age"=>12,
                "validate"=>0,
                "role_id"=>3,
                "job_id"=>3,
                "testimonial_id"=>null,
                "img"=>"2.jpg",
                "email"=>"webmaster@keeper.it",
                "password"=>Hash::make('testtest'),
            ],
            [
                "firstname"=>"Mr.",
                "name"=>"Keeper",
                "age"=>12,
                "validate"=>0,
                "role_id"=>1,
                "job_id"=>4,
                "testimonial_id"=>null,
                "img"=>"3.jpg",
                "email"=>"redacteur@keeper.it",
                "password"=>Hash::make('testtest'),
            ],
        ]);
    }
}
