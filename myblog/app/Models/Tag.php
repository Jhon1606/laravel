<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    // Siempre se debe poner el $fillable para los campos que se envían por un form, ya que es por request
    // que se recibe en el controlador y vendría siendo un arreglo, Ej: $request->name, $request->color
    protected $fillable = ['name','slug','color'];

    // Esto es para el SEO OnPage, para tener urls amigables y mejorar la búsqueda en navegadores, Ej: 
    // http://127.0.0.1:8000/admin/edit/tag-de-prueba-4, que sea vea el slug en vez de el id
    public function getRouteKeyName()
    {
        return 'slug';
    }

    //Relación muchos a muchos

    public function posts(){
        return $this->belongsToMany(Post::class);
    }
}
