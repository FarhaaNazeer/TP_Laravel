<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AtelierFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom' => $this->faker->jobTitle(),
            'date' => $this->faker->dateTime(),
            'location' => $this->faker->city(),
            'created_at' => now(),
            'updated_at' => now()
        ];
    }
}
