<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert($this->getData());
    }

    private function getData(): array {

        $faker = \Faker\Factory::create('ru_RU');

        $data = [];
        for ($i = 0; $i < 100; $i++) {
            $data[] = [

                'name' => $faker->word,
                'description' => $faker->realText(100,2),
                'price' => $faker->randomFloat(6, 1),
                'settlement_id' => 1,
                'title' => $faker->word
            ];
        }

        return $data;
    }
}
