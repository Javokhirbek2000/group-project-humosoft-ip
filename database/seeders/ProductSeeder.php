<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ProductSeeder extends Seeder
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
    		DB::table('products')->insert([
	            'name' => $faker->word(),
	            'description' => $faker->sentence(),
	            'brand' => $faker->word(),
	            'price' => $faker->numberBetween(0, 1000)/10,
	            'available' => $faker->numberBetween(0, 1000),
	            'is_published' => true,
	            'is_featured' => true
	        ]);
    	}
        
    }

}