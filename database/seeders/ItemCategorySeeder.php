<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        DB::table('category_item')->insert([
            'item_id' => rand(1, 100),
            'category_id' => rand(1, 83)
        ]);
    }
}
