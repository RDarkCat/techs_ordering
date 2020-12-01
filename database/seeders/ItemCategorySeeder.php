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
        $categories_ids = [];

        for ($i = 14; $i <= 71; $i++) {
            $categories_ids[] = $i;
        }

        $str = '';
        $count = count($categories_ids);

        for ($i = 1; $i <= 100; $i++) {
            if ($i == 100) {
                $str.= "('".$i."', '".$categories_ids[rand(1, $count-1)]."');";
            } else {
                $str.= "('".$i."', '".$categories_ids[rand(1, $count-1)]."'), ";
            }

        }

        $sql = "INSERT INTO `category_item` (`item_id`, `category_id`) VALUES ".$str;

        DB::unprepared($sql);
    }
}
