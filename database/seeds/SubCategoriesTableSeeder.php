<?php

use Illuminate\Database\Seeder;


class SubCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
            DB::table('subcategories')->insert([

                'name' => 'Novelas',
                'category_id' => '1',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
    
            ]);

            DB::table('subcategories')->insert([

                'name' => 'Revistas',
                'category_id' => '1',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
    
            ]);

            DB::table('subcategories')->insert([

                'name' => 'Comics',
                'category_id' => '1',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
    
            ]);

            DB::table('subcategories')->insert([

                'name' => 'Manga',
                'category_id' => '1',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
    
            ]);

            DB::table('subcategories')->insert([

                'name' => 'Enciclopedias',
                'category_id' => '1',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
    
            ]);

            DB::table('subcategories')->insert([

                'name' => 'Cds',
                'category_id' => '2',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
    
            ]);

            DB::table('subcategories')->insert([

                'name' => 'Cassettes',
                'category_id' => '2',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
    
            ]);

            DB::table('subcategories')->insert([

                'name' => 'Vinilos',
                'category_id' => '2',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
    
            ]);

            DB::table('subcategories')->insert([

                'name' => 'Instrumentos',
                'category_id' => '2',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
    
            ]);

            DB::table('subcategories')->insert([

                'name' => 'Tickets',
                'category_id' => '2',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
    
            ]);

            DB::table('subcategories')->insert([

                'name' => 'Consolas',
                'category_id' => '3',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
    
            ]);

            DB::table('subcategories')->insert([

                'name' => 'NES',
                'category_id' => '3',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
    
            ]);

            DB::table('subcategories')->insert([

                'name' => 'SNES',
                'category_id' => '3',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
    
            ]);

            DB::table('subcategories')->insert([

                'name' => 'SEGA Genesis',
                'category_id' => '3',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
    
            ]);

            DB::table('subcategories')->insert([

                'name' => 'Playstation',
                'category_id' => '3',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
    
            ]);

            DB::table('subcategories')->insert([

                'name' => 'Arcade Cabinets',
                'category_id' => '3',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
    
            ]);

            DB::table('subcategories')->insert([

                'name' => 'Indumentaria',
                'category_id' => '4',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
    
            ]);

            DB::table('subcategories')->insert([

                'name' => 'Decoracion',
                'category_id' => '4',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
    
            ]);

            DB::table('subcategories')->insert([

                'name' => 'Accesorios',
                'category_id' => '4',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
    
            ]);
        
    }
}
