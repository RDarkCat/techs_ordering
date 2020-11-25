<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tgs_ids = [];
        $excluded_id = [1, 7, 12, 18, 23, 27, 31, 40];
        $tag_count = 0;

        do {
            $tag_id = rand(1, 49);
            if (!in_array($tag_id, $excluded_id)) {
                $tgs_ids[] = $tag_id;
                $tag_count++;
            }
        } while ($tag_count <= 100);

        $str = '';
        $count = count($tgs_ids);

        for ($i = 1; $i <= 100; $i++) {
            if ($i == 100) {
                $str.= "('".$i."', '".$tgs_ids[rand(1, $count-1)]."');";
            } else {
                $str.= "('".$i."', '".$tgs_ids[rand(1, $count-1)]."'), ";
            }

        }

        $sql = "INSERT INTO `item_tag` (`item_id`, `tag_id`) VALUES ".$str;

        DB::unprepared($sql);
    }
}
