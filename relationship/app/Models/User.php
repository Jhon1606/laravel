<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

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
        'password' => 'hashed',
    ];

    // Un usuario puede tener muchos telefonos (HasMany)
    public function phones():HasMany {
        // Una forma si no se respeta la convención de nombres
        // return $this->hasOne(Phone::class, 'user_id', 'id'); 
        return $this->hasMany(Phone::class);  
    }

    // Un usuario puede tener muchos roles (BelongsToMany)
    public function roles():BelongsToMany {
        return $this->belongsToMany(Role::class)->withPivot('added_by'); 
    }

    // El usuario accede a la sim por medio del phone, y el phone tiene muchas sims (HasManyThroughg)
    public function phoneSims():HasManyThrough {
    // Ponemos primero el modelo final que es la sim (Se quiere acceder a la sim por medio del phone),
    // y luego ponemos el modelo por el que va a obtener la sim (Phone)
    // Phone tiene muchas sims, y el usuario accede a la sim por medio del phone (No es una relación directa,
    // es una relación 1 a muchos con modelo de paso "Through")
        return $this->hasManyThrough(Sim::class, Phone::class);
    }

    // El usuario tiene una imagen, pero es una relación polimorfica (Morph) ¿user_id o post_id?
    // y se especifica el id y tipo con imageable, en este caso le indicamos el tipo user_id,
    // en el modelo Post se le indica el post_id
    public function image():MorphMany{
        return $this->morphMany(Image::class, 'imageable');
    }
}
