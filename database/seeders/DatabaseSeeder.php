<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();
        $this->call(UsersSeeder::class);
        $this->call(ProfilesSeeder::class);
        $this->call(CountriesSeeder::class);
        $this->call(RegionsSeeder::class);
        $this->call(SettlementsSeeder::class);
        $this->call(ItemsSeeder::class);
        $this->call(ItemUserSeeder::class);
        $this->call(PromosSeeder::class);
        $this->call(OrdersSeeder::class);
        $this->call(CategoriesSeeder::class);
        $this->call(ItemCategorySeeder::class);
        $this->call(CharacteristicsSeeder::class);
        $this->call(PromosSeeder::class);
        $this->call(TagsSeeder::class);
        $this->call(ItemTagSeeder::class);
    }
}
