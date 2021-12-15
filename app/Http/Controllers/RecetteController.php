<?php

namespace App\Http\Controllers;

use App\Http\Requests\RecetteRequest;
use App\Models\Recette;
use Illuminate\Http\Request;
use Illuminate\View\View;

class RecetteController extends Controller
{
    public function createForm(): View
    {
        return view('recettes/create');
    }

    public function validForm(RecetteRequest $request)
    {
        if ($request->isMethod('POST')) {
            if (empty(!$request)) {
                $recette = new Recette();

                // dd($request);

                $recette->name = htmlentities($request->get('name'));
                $recette->description = htmlentities($request->get('description'));
                $request->image = htmlentities($request->get('image'));

                $recette->save();

                return redirect('recettes/create')->with('status', 'Votre recette a bien été créée');
            } else {
                return redirect('recettes/create')->with('status', 'Vous n\'avez renseigné aucune donnée');
            }
        }
    }
}
