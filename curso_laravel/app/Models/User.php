<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Casts\Attribute;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // Mutadores y accesores
    protected function name():Attribute
    {
        return new Attribute(
            get: fn($value) => ucwords($value), //Función flecha en php
            set: function($value){
                return strtolower($value); //El atributo name de la tabla user lo convertirá en minuscula y lo guardará así
            }
        );
    }

    // Mutadores y accesores en versiones anteriores

    // Accesor
    // public function getNameAttribute($value){
    //     return ucwords($value);
    // }

    // Mutador
    // public function setNameAttribute($value){
    //     return $this->attributes['name'] = strtolower($value);
    // }
}
