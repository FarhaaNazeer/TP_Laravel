<?php

namespace App\Http\Controllers;

use App\Models\Atelier;
use Illuminate\View\View;
use App\Http\Requests\AtelierRequest;

class AtelierController extends Controller
{
    public function createForm(): View
    {
        return view('atelier/create');
    }

    public function validForm(AtelierRequest $request)
    {
        if ($request->isMethod('POST')) {
            if (empty(!$request)) {
                $atelier = new Atelier();

                $atelier->nom = htmlentities($request->get('name'));
                $atelier->nb_pers = htmlentities($request->get('nb_personnes'));
                $atelier->date = htmlentities($request->get('date'));
                $atelier->location = htmlentities($request->get('location'));

                $atelier->save();

                return redirect('atelier/create')->with('status', 'Votre atelier a bien été enregistré');
            } else {
                return redirect('atelier/create')->with('status', 'Vous n\'avez renseigné aucune donnée');
            }
        }
    }
}
