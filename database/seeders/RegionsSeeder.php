<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RegionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('regions')->insert($this->getData());
    }

    private function getData(): array {

        $faker = \Faker\Factory::create('ru_RU');

        $data = [];
        for ($i = 0; $i < 20; $i++) {
            $data[] = [
                'title' => $faker->city
            ];
        }

        return $data;
    }
}
