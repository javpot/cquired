<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->firstName,
            'bio' => $this->faker->paragraph,
            'picture' => $this->faker->imageUrl,
            'banner' => $this->faker->imageUrl,
            'location' => $this->faker->city,
            'status' => $this->faker->word,
            'email' => $this->faker->unique()->safeEmail,
            'password' => bcrypt('password'), // Par défaut, un mot de passe chiffré pour 'password'
            'domain' => $this->faker->word,
        ];
    }
}
