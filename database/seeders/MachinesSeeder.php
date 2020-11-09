<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MachinesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('machines')->insert($this->getData());
    }

    private function getData(): array {

        $faker = \Faker\Factory::create('ru_RU');

        $data = [];
        for ($i = 0; $i < 100; $i++) {
            $data[] = [
                'title' => $faker->word,
                'description' => $faker->realText(200,2),
                'price' => $faker->randomFloat(6, 1)
            ];
        }

        return $data;
    }
}
