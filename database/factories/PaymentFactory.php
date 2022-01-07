<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Payment;

class PaymentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Payment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'is_completed' => $this->faker->boolean,
            'paymentable_id' => $this->faker->numberBetween(-10000, 10000),
            'paymentable_type' => $this->faker->word,
        ];
    }
}
