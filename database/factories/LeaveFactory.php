<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Leave;

class LeaveFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Leave::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'user_id' => $this->faker->randomNumber(),
            'date_from' => $this->faker->date(),
            'date_to' => $this->faker->date(),
            'is_half' => $this->faker->boolean(),
            'approved_by' => $this->faker->randomNumber(),
            'approved_date' => $this->faker->date(),
        ];
    }
}
