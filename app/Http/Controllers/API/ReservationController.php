<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\GuardarReservationRequest;
use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Reservation::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(GuardarReservationRequest $request)
    {
        Reservation::create($request->all());
        return response()->json([
            'res' => true,
            'msg' => 'Reserva Guardada Correctamente'
        ],200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reservation $reservation)
    {
        $reservation->delete();
        return response()->json([
            'res' => true,
            'msg' => 'Reserva Eliminada Correctamente'
        ],200);
    }
    public function reservationsByUser($username)
    {
        $reservations = Reservation::where('nombre_del_usuario_que_reserva', $username)->get();
        return response()->json($reservations);
    }
}
