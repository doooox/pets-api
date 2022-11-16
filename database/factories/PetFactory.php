<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pet>
 */
class PetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'animal' => $this->faker->randomElement(['cat', 'dog', 'bunny', 'bird', 'gold fish']),
            'name' => $this->faker->name(),
            'age' => $this->faker->numberBetween(1, 15),
            'owner' => $this->faker->name()
        ];
    }
}
