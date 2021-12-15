<?php

namespace App\Http\Controllers;

use App\Models\Atelier;
use App\Models\Recette;
use Illuminate\Http\Request;

class IngredientController extends Controller
{
    public function create()
    {
        $recettes = Recette::all();

        return view(
            'ingredient/create',
            ['recettes' => $recettes]
        );
    }
}
