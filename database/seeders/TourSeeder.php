<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Tour;
use App\Models\Reservation;

class TourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('tours')->insert([
        	[
	        	'tours' => 'San Andres',
	        	'descripciones' => 'Tour a la Maravillosa isla de San Andres por 3 dias recorre la isla, visita el hoyo soplador, cueva de morgan y mas',
	        	'precios' => 2500000.00,
                'fecha' => '2024-03-24',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
        	],
        	[
	        	'tours' => 'Cartagena',
	        	'descripciones' => 'Conoce la espectacular ciudad amurallada, visita boca grande y la isla de Baru durante 4 dias',
	        	'precios' => 4300000.00,
                'fecha' => '2024-05-13',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
        	],
        	[
	        	'tours' => 'Barranquilla',
	        	'descripciones' => 'conoce la capital del atlantico en este genial tour por 3 días todo incluido',
	        	'precios' => 5200000.00,
                'fecha' => '2024-07-24',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

        	],
        	[
        		'tours' => 'Medellin',
	        	'descripciones' => 'visita el hermoso vallé de aburra por 5 días en los cuales podras visitar el parque lleras, las estatuas de botero, el pueblito paisa y mas',
	        	'precios' => 3300000.00,
                'fecha' => '2024-08-25',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
        	],
        	[
        		'tours' => 'Cali',
	        	'descripciones' => 'conoce la sucursal del cielo, la tierra del chontaduro y la capital de la salsa durante 3 días',
	        	'precios' => 2800000.00,
                'fecha' => '2024-12-24',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
        	],
        	[
        		'tours' => 'Soacha',
	        	'descripciones' => 'arriesga tu vida como nunca antes, siente la adrenalina en tu ser visitando este maravilloso municipio cundinamarques ubicado cerca a Bogotá. duracion 2 días',
	        	'precios' => 25000.00,
                'fecha' => '2024-09-15',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
        	],
        	[
        		'tours' => 'Santa Martha',
	        	'descripciones' => 'conoce la imponente sierra nevada, visita las playas y mucho mas en este tour de 4 días',
	        	'precios' => 1800000.00,
                'fecha' => '2024-11-28',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
        	]
        ]);
        Tour::factory(50)->create();

        Reservation::factory(5)->create();
    }
}
