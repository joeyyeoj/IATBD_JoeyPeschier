<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Huisdier extends Model
{
    use HasFactory;
    protected $table="huisdier";


    public function myOwner(){
        return $this->belongsTo(\App\Models\User::class, "eigenaar", "id");
    }

    public function myAanvragen(){
        return $this->hasMany(\App\Models\Aanvraag::class, "huisdierId");
    }

    
}
