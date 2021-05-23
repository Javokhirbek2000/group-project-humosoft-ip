<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach (range(1, 5) as $index) {
            DB::table('banners')->insert([
                'name' => $faker->sentence(),
                'description' => $faker->sentence(),
                'url' => $faker->url(),
                'image' => "https://picsum.photos/id/{$faker->numberBetween(700, 800)}/1900/600"
            ]);
        }
    }
}
