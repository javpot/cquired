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
            'picture' => $this->faker->imageUrl,
            'banner' => $this->faker->imageUrl,
            'location' => $this->faker->city,
            'email' => $this->faker->unique()->safeEmail,
            'domain' => $this->faker->word,
            'category' => $this->faker->word,
            'saved' => [ 
                'saved' => [random_int(1,150)],
            ],
        ];
    }
}
