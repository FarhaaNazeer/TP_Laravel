<?php

namespace App\Http\Controllers;

use App\Models\Atelier;
use Illuminate\View\View;
use App\Models\Reservation;
use App\Http\Requests\ReservationRequest;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    public function createForm(): View
    {
        $ateliers = Atelier::all();

        return view('reservation/create', ['ateliers' => $ateliers]);
    }

    public function validForm(ReservationRequest $request)
    {
        if ($request->isMethod('POST')) {
            if (!empty($request)) {

                $reservation = new Reservation();

                $reservation->user_id = Auth::id();
                $reservation->atelier_id = htmlentities($request->get('atelier'));
                $reservation->nb_pers = htmlentities($request->get('nb_pers'));

                $reservation->save();

                return redirect('/reservation/create')->with('status', 'Votre réservation a bien été validée');
            } else {
                return redirect('/reservation/create')->with('status', 'Vous n\'avez renseigné aucune donnée');
            }
        }
    }
}
