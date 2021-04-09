<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Soort extends Model
{
    use HasFactory;
    protected $table = "soort";

    protected $fillable = [
        'naam',
        'eigenaar',
        'leeftijd',
        'description',
        'fotolocatie',
        'soort',
        'uurtarief',
        'startDatum',
        'endDatum',
    ];
}
