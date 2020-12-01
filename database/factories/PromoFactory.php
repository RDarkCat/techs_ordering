<?php

namespace Database\Factories;

use App\Models\Promo;
use Illuminate\Database\Eloquent\Factories\Factory;

class PromoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Promo::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'item_id' => rand(1, 100),
            'status' => $this->faker->boolean,
            'price_per_hour' => $this->faker->randomDigitNotNull,
            'price_per_day' => $this->faker->randomDigitNotNull,
            'description' => $this->faker->text()
        ];
    }
}
