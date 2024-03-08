<?php

namespace Database\Factories;

use App\Models\Reservation;
use App\Models\Tour;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reservation>
 */
class ReservationFactory extends Factory
{
    protected $model = Reservation::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $tourIds = Tour::pluck('id')->toArray();

        $randomTourId = $this->faker->randomElement($tourIds);
        return [
            'tour_id' => $randomTourId,
            'nombre_del_usuario_que_reserva' => $this->faker->name(),
            'fecha_de_reserva' => $this->faker->dateTimeBetween($startDate = 'now', $endDate = '+1 years')->format('Y-m-d'),
            'numero_de_personas' => $this->faker->numberBetween(1, 10)
        ];
    }
}
