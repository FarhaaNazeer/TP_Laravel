<?php

namespace Database\Factories;

use App\Models\Atelier;
use App\Models\Ingredient;
use App\Models\Recette;
use App\Providers\FakerProviders\FoodProvider;
use Illuminate\Database\Eloquent\Factories\Factory;
use PhpParser\Node\Stmt\TraitUseAdaptation\Alias;

class IngredientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        return [
            'name' => FoodProvider::ingredientName()->foodName,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
