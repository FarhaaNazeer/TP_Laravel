<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'imagePath' => Str::random(10),
            'is_enable' => true,
            'created_at' => now(),
            'updated_at' => now()
        ];
    }
}
