<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Client;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Publication>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'titre' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'status' => $this->faker->word,
			'domain' => $this->faker->word,
            'client_id' => function () {
                return Client::factory()->create()->id;
            },
        ];
    }
}
