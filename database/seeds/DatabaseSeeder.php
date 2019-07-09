<?php

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
        $this->call([
            CategoriesTableSeeder::class,
            SubCategoriesTableSeeder::class,
            UsersTableSeeder::class,
            ProductsTableSeeder::class,
            MultimediaTableSeeder::class
        ]);
    }
}
