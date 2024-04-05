<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// En el Model hay una función llamada getRouteKey que es la que devuelve el dato a recuperar,
// se le cambia por slug para que coja el nombre de ese campo en dicha tabla

class Curso extends Model
{
    use HasFactory;
    // Esto hace que solo se guarden los campos dentro del arreglo, cualquier otro dato no se guardará
    // protected $fillable = ['name','description','categoria'];

    // Para asignaciones masivas (bastantes campos)
    // Los campos dentro de este array son los que serán ignorados, mientras que en fillable son los campos que no serán ignorados
    protected $guarded = [];


    // Copiamos este metodo del Model donde se extiende la clase Curso, y editamos aquí mismo
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
