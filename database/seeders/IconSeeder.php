<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IconSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('icons')->insert([
            [
                "icon"=>"flaticon-023-flask"
            ],
            [
                "icon"=>"flaticon-011-compass"
            ],
            [
                "icon"=>"flaticon-037-idea"
            ],
            [
                "icon"=>"flaticon-039-vector"
            ],
            [
                "icon"=>"flaticon-036-brainstorming"
            ],
            [
                "icon"=>"flaticon-026-search"
            ],
            [
                "icon"=>"flaticon-018-laptop-1"
            ],
            [
                "icon"=>"flaticon-043-sketch"
            ],
            [
                "icon"=>"flaticon-012-cube"
            ],
            [
                "icon"=>"flaticon-002-caliper"
            ],
            [
                "icon"=>"flaticon-019-coffee-cup"
            ],
            [
                "icon"=>"flaticon-020-creativity"
            ],
            [
                "icon"=>"flaticon-037-idea"
            ],
            [
                "icon"=>"flaticon-025-imagination"
            ],
            [
                "icon"=>"flaticon-008-team"
            ],
        ]);
    }
}
