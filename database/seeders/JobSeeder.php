<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jobs')->insert([
            [
                "job"=>"CEO"
            ],
            [
                "job"=>"Member"
            ],
            [
                "job"=>"CTO"
            ],
            [
                "job"=>"CFO"
            ],
            [
                "job"=>"Executive Directeurr"
            ],
            [
                "job"=>"Web Developper"
            ],
            [
                "job"=>"Project Manager"
            ],
            [
                "job"=>"Web Designer"
            ],
        ]);
    }
}
