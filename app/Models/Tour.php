<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    use HasFactory;

    protected $fillable = [
        'tours',
        'descripciones',
        'fecha',
        'precios'
    ];

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }

}
