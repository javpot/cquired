<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Publication;
use App\Models\Client;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Publication>
 */
class PublicationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
             'status' => $this->faker->word,
            'description' => $this->faker->paragraph,
            'titre' => $this->faker->sentence,
            'client_id' => function () {
        return Client::factory()->create()->id;
    },
        ];
    }
}
