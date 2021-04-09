<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use \App\Http\Traits\UserFotoTrait;

class User extends Authenticatable
{
    use UserFotoTrait;
    use HasFactory, Notifiable;
    protected $table = 'users';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'leeftijd',
        'omschrijving',
        'role',
        'admin',
        'blocked',
        'honden',
        'katten',
        'vogels',
        'reptielen',
        'knaagdieren'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function myPets(){
        return $this->hasMany(\App\Models\Huisdier::class, "eigenaar");
    }

    public function myPhotos(){
        return $this->hasMany(\App\Models\UserFoto::class, "userId");
    }

    public function myReviews(){
        return $this->hasMany(\App\Models\Review::class, "oppasserId");
    }
    
}
