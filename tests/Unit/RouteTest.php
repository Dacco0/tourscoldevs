<?php

namespace Tests\Unit;

use App\Models\User;
use App\Models\Tour;
use App\Models\Reservation;
use App\Http\Controllers\API\TourController;
use App\Http\Controllers\API\ReservationController;
use Tests\TestCase;
use Illuminate\Database\Eloquent\Factories\Factory;

class RouteTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    //1. traer todos los datos
    public function testGetToursRoute(): void
    {
        $response = $this->get('/api/tours');
        $response->assertStatus(200);
    }
    //2. crear un tour
    public function testPostToursRoute(): void
    {
        $response = $this->post('/api/tours', [
            "tours" => "Leticia",
            "descripciones" => "Visita el pulmon del mundo con este excelente tour a Leticia la capital del departamento del Amazonas. duración 4 días",
            "fecha" => "2024-05-05",
            "precios" => "6500000.00"
        ]);
        $response->assertStatus(200);
    }
    //3. traer un solo tour
    public function testShowTourRoute()
    {
        $tour = Tour::first();
        $this->assertNotNull($tour, 'No hay Tours');
        $response = $this->get("/api/tours/{$tour->id}");
        $response->assertStatus(200);
    }
    //4. actualizar un tour
    public function testUpdateTourRoute()
    {
        $tour = Tour::first();
        $updatedData = [
            "tours" => "San Andres",
            "descripciones" => "Tour a la Maravillosa isla de San Andres por 3 dias recorre la isla, visita el hoyo soplador, cueva de morgan y mas",
            "fecha" => "2024-03-25",
            "precios" => "3500000.00"
        ];
        $response = $this->put("/api/tours/{$tour->id}", $updatedData);
        $response->assertStatus(200);
        $tour->refresh();
        $this->assertEquals($updatedData['tours'], $tour->tours);
        $this->assertEquals($updatedData['descripciones'], $tour->descripciones);
        $this->assertEquals($updatedData['fecha'], $tour->fecha);
        $this->assertEquals($updatedData['precios'], $tour->precios);
    }
    //5. eliminar un tour
    public function testDeleteTourRoute()
    {
        $tour = Tour::factory()->create();
        $response = $this->delete("/api/tours/{$tour->id}");
        $response->assertStatus(200);
        $this->assertNull(Tour::find($tour->id));
    }
    //6.traer todas las reservas
    public function testGetReservationsRoute()
    {
        $response = $this->get('/api/reservations');
        $response->assertStatus(200);
    }
    //7. hacer nueva reserva
    public function testPostReservationRoute(): void
    {
        $response = $this->post('/api/reservations', [
            "tour_id" => 2,
            "nombre_del_usuario_que_reserva" => "Pedro Montano",
            "fecha_de_reserva" => "2024-07-24",
            "numero_de_personas" => "2"
        ]);
        $response->assertStatus(200);
    }
    //8.eliminar reserva
    public function testDeleteReservationRoute()
    {
        $reservation = Reservation::factory()->create();
        $response = $this->delete("/api/reservations/{$reservation->id}");
        $response->assertStatus(200);
        $this->assertNull(Reservation::find($reservation->id));
    }
}
