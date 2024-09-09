<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\SupportTicketResponse;

class SupportTicketResponseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SupportTicketResponse::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'user_id' => $this->faker->randomNumber(),
            'suppert_ticket_id' => $this->faker->randomNumber(),
            'comment' => $this->faker->regexify('[A-Za-z0-9]{1000}'),
        ];
    }
}
