<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class CollectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach (range(1, 10) as $index) {
            DB::table('collections')->insert([
                'name' => $faker->word(),
                'is_featured' => $faker->numberBetween(0, 1),
                'image' => "https://picsum.photos/id/{$faker->numberBetween(600, 700)}/600/600"
            ]);
        }
    }
}
