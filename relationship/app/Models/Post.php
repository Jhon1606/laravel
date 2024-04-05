<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [];

    // El usuario tiene una imagen, pero es una relación polimorfica (Morph) ¿user_id o post_id?
    // y se especifica el id y tipo con imageable, en este caso le indicamos el tipo post_id,
    // en el modelo User se le indica el user_id
    public function image():MorphMany{
        return $this->morphMany(Image::class, 'imageable');
    }

    public function tags(): MorphToMany{
        return $this->morphToMany(Tag::class, 'taggable');
    }
}
