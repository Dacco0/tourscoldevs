<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\ActualizarTourRequest;
use App\Http\Requests\GuardarTourRequest;
use App\Models\Tour;
use Illuminate\Http\Request;

class TourController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Tour::all();
        // $tours = Tour::all();

        // // Codifica los tours como JSON con formato legible
        // $formatted_response = json_encode($tours, JSON_PRETTY_PRINT);

        // // Retorna la respuesta JSON con formato legible
        // return response($formatted_response)->header('Content-Type', 'application/json');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(GuardarTourRequest $request)
    {
        Tour::create($request->all());
        return response()->json([
            'res' => true,
            'msg' => 'Tour Guardado Correctamente'
        ],200);
    }

    /**
     * Display the specified resource.
     */
    public function show(Tour $tour)
    {
        return response()->json([
            'res' => true,
            'tour' => $tour
        ],200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ActualizarTourRequest $request, Tour $tour)
    {
        $tour->update($request->all());
        return response()->json([
            'res' => true,
            'msg' => 'Tour Actualizado Correctamente'
        ],200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tour $tour)
    {
        $tour->delete();
        return response()->json([
            'res' => true,
            'msg' => 'Tour Eliminado Correctamente'
        ],200);
    }
}
