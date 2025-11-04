<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Agency>
 */
class AgencyFactory extends Factory
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
            'bio' => $this->faker->text,
            'picture' => 'profile_images/pfp-icon.png',
            'banner' => 'banner_images/clientImgAccueil.jpg',
            'email' => $this->faker->unique()->safeEmail,
            'domain' => $this->faker->word,
            'category' => $this->faker->randomElement(['Freelancer','Agency']),
            'saved' => [ 
                'saved' => [random_int(1,150)],
            ],
        ];
    }
}
