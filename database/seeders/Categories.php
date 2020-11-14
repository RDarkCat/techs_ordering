<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Categories extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert($this->getData());
    }

    private function getData(): array {

        $faker = \Faker\Factory::create('ru_RU');

        $data = [];
        for ($i = 0; $i < 20; $i++) {
            $data[] = [
                'name' => $faker->word
            ];
        }

        return $data;
    }
}
