<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            VideoSeeder::class,
            TestimonialSeeder::class,
            NewsletterSeeder::class,
            DiscoverSeeder::class,
            MapSeeder::class,
            ImageSeeder::class,
            LogoSeeder::class,
            IconSeeder::class,
            FeatureSeeder::class,
            ServiceSeeder::class,
            ContactSeeder::class,
            FooterSeeder::class,
            FormContactSeeder::class,
            TitleSeeder::class,
            TagSeeder::class,
            CategorySeeder::class,
            RoleSeeder::class,
            JobSeeder::class,
            UserSeeder::class,
            PostSeeder::class,
            CommentSeeder::class,
            TagPostSeeder::class,
        ]);
    }
}
