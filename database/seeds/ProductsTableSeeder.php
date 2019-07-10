<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        $faker = Faker::create();

    	foreach (range(1,50) as $index) {
	        DB::table('products')->insert([
	            'name' => $faker->unique()->word . " " . $faker->unique()->word,
	            'description' => $faker->sentence(10),
                'active' => 1,
                'hits' => rand(1, 50),
                'user_id' => rand(1, 10),
                'category_id' => rand(1, 4),
                'subcategory_id' => rand(1, 19),
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
                'cover' => 'covers/' . $faker->image('public/storage/covers',400,300, null, false)
	        ]);
        }
    }
}
