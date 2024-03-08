<?php

namespace Database\Factories;

use App\Models\Tour;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tour>
 */
class TourFactory extends Factory
{

    protected $model = Tour::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'tours' => $this->faker->name(),
            'descripciones' => $this->faker->sentence(),
            'fecha' => $this->faker->dateTimeBetween($startDate = 'now', $endDate = '+1 years')->format('Y-m-d'),
            'precios' => $this->faker->randomFloat(2, 0, 9999999.99)
        ];
    }
}
