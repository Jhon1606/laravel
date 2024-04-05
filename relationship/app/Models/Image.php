<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Image extends Model
{
    use HasFactory;

    protected $guarded = [];

    // ¿user_id o post_id? No se sabe cual es el tipo y el id asociado a la imagen (relación polimorfica),
    // por eso se utiliza el morphto y se pone el nombre de image-able
    public function imageable():MorphTo{
        return $this->morphTo();
    }
}
