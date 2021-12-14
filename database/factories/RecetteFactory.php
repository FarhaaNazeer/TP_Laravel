<?php

namespace Database\Factories;

use App\Providers\FakerProviders\FoodProvider;
use Illuminate\Database\Eloquent\Factories\Factory;

class RecetteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => FoodProvider::ingredientName()->beverageName,
            'description' => $this->faker->text($maxNbChars = 200),
            'image' => $this->faker->image(),
            'created_at' => now(),
            'updated_at' => now()

        ];
    }
}
