<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aanvraag extends Model
{
    use HasFactory;
    protected $table = 'aanvraag';
    

    public function myOppasser(){
        return $this->hasOne(\App\Models\User::class, "id", "oppasserId");
    }

    public function myPet(){
        return $this->hasOne(\App\Models\Huisdier::class, "id", "huisdierId");
    }

}
