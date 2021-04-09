<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserFoto extends Model
{
    use HasFactory;
    protected $table = 'fotos';

    protected $fillable = [
        'userId',
        'locatie'
    ];


    public function myOwner(){
        return $this->belongsTo('\App\Models\User::class', "userId", "id");
    }
}
