<?php

namespace App\Http\Controllers;

use App\Http\Requests\RecetteRequest;
use App\Models\Ingredient;
use App\Models\Recette;
use Illuminate\Http\Request;
use Illuminate\View\View;

class RecetteController extends Controller
{
    public function createForm(): View
    {
        $ingredients = Ingredient::all();

        return view('recettes/create', ['ingredients' => $ingredients]);
    }

    public function validForm(RecetteRequest $request)
    {
        if ($request->isMethod('POST')) {
            if (empty(!$request)) {

                $recette = new Recette();

                $recette->name = htmlentities($request->get('name'));
                $recette->description = htmlentities($request->get('description'));

                $recette->save();
                $recette_id = $recette->id;
                $recette = Recette::find($recette_id);

                $ingredients = $request->get('ingredients');

                foreach ($ingredients as $key => $ingredient_id) {
                    $recette->ingredients()->attach($ingredient_id);
                }

                return redirect('recette/create')->with('status', 'Votre recette a bien été créée');
            } else {
                return redirect('recette/create')->with('status', 'Vous n\'avez renseigné aucune donnée');
            }
        }
    }
}
