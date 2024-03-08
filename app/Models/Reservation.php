<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'tour_id',
        'nombre_del_usuario_que_reserva',
        'fecha_de_reserva',
        'numero_de_personas',
    ];

    public function tour()
    {
        return $this->belongsTo(Tour::class);
    }
}
