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
            'nom' => $this->faker->firstName,
            'prenom' => $this->faker->lastName,
            'bio' => $this->faker->paragraph,
            'photo' => $this->faker->imageUrl,
            'banner' => $this->faker->imageUrl,
            'localisation' => $this->faker->city,
            'statut' => $this->faker->word,
            'email' => $this->faker->unique()->safeEmail,
            'password' => bcrypt('password'), // Par défaut, un mot de passe chiffré pour 'password'
            'domaine' => $this->faker->word,
        ];
    }
}
