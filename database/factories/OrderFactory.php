<?php

namespace Database\Factories;

use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Order::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'created_at' => $this->faker->dateTime($max = 'now'),
            'updated_at' => $this->faker->dateTime($max = 'now'),
            'count' => $this->faker->numberBetween($min = 1, $max = 5),
            'delivery_address' => $this->faker->address(),
            'contact_phone' => $this->faker->tollFreePhoneNumber(),
            'user_id' => $this->faker->numberBetween($min = 1, $max = 10),
            'promo_id' => $this->faker->numberBetween($min = 1, $max = 1000),
            'comment' => $this->faker->text()
        ];
    }
}
