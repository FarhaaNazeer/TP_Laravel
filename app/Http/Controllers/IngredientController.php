<?php

namespace App\Http\Controllers;

use App\Http\Requests\IngredientRequest;
use App\Models\Atelier;
use App\Models\Ingredient;
use App\Models\Recette;
use Illuminate\Http\Request;

class IngredientController extends Controller
{
    public function createForm()
    {
        $recettes = Recette::all();
        return view('ingredient/create', ['recettes' => $recettes]);
    }

    public function validForm(IngredientRequest $request)
    {
        if ($request->isMethod('POST')) {

            if (!empty($request)) {
                $ingredient = new Ingredient();

                $ingredient->name = htmlentities(trim($request->get('name')));
                $ingredient->recette_id = htmlentities($request->get('recette'));

                $ingredient->save();

                return redirect('ingredient/create')->with('status', 'Votre ingrédient a bien été enregistré');
            } else {
                return redirect('/ingredient/create')->with('status', 'Vous n\'avez renseigné aucune donnée');
            }
        }
    }
}
