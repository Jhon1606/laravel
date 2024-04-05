<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Phone extends Model
{
    use HasFactory;

    protected $guarded = [];

    // Un telefono pertenece a un usuario (BelongsTo)
    public function user():BelongsTo {
        return $this->belongsTo(User::class);
    }

    // Un telefono puede tener muchas sims (HasMany)
    public function sims():HasMany{
        return $this->hasMany(Sim::class);
    }
}
