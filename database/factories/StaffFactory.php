<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Staff;
use App\Models\StaffRole;
use App\Models\User;

class StaffFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Staff::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'priority' => $this->faker->numberBetween(-10000, 10000),
            'role_id' => StaffRole::factory(),
            'user_id' => User::factory(),
        ];
    }
}
