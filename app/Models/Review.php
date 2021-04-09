<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    public function myAanvraag(){
        return $this->belongsTo(\App\Models\Aanvraag::class, "id", "aanvraagId");
    }

    public function myOppasser(){
        return $this->hasOne(\App\Models\User::class, "id", "oppasserId");
    }

    public function myAanbieder(){
        return $this->hasOne(\App\Models\User::class, "id", "aanbiederId");
    }
}
