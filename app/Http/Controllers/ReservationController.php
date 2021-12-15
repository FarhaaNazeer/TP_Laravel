<?php

namespace App\Http\Controllers;

use App\Models\Atelier;
use Illuminate\View\View;
use App\Models\Reservation;
use App\Http\Requests\ReservationRequest;

class ReservationController extends Controller
{
    public function createForm(): View
    {
        return view('reservation/create');
    }

    public function validForm(ReservationRequest $request)
    {
        if ($request->isMethod('POST')) {
            if (empty(!$request)) {
                $reservation = new Reservation();

                $reservation->save();

                return redirect('reservation/create')->with('status', 'Votre réservation a bien été validée');
            } else {
                return redirect('reservation/create')->with('status', 'Vous n\'avez renseigné aucune donnée');
            }
        }
    }
}
