<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    // Si no encuentra la tabla, le pasamos como segundo parámetro el nombre de la tabla, 
    // como en este caso (clients_service) 
    public function services(){
        return $this->belongsToMany(Service::class, 'clients_services');
    }
}
