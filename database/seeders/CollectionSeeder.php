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
    	foreach (range(1, 5) as $index) {
    		DB::table('collections')->insert([
	            'name' => $faker->word(),
	            'is_featured' => true,
	        ]);
    	}
        
    }
}
