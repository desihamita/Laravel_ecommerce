<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'category_name' => 'Sneakers'
        ]);

        DB::table('categories')->insert([
            'category_name' => 'Hoodie'
        ]);
        
        DB::table('categories')->insert([
            'category_name' => 'switer'
        ]);
        
        DB::table('categories')->insert([
            'category_name' => 'kemeja'
        ]);

        DB::table('categories')->insert([
            'category_name' => 'Jilbab'
        ]);

    }
}
