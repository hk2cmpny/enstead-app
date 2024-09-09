<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Attandance;

class AttandanceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Attandance::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'user_id' => $this->faker->randomNumber(),
            'attandance_at' => $this->faker->dateTime(),
            'timer' => $this->faker->numberBetween(-10000, 10000),
            'summary' => $this->faker->text(),
        ];
    }
}
