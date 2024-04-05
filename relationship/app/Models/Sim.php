<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Sim extends Model
{
    use HasFactory;

    protected $guarded = [];

    // Una sim pertenece a un telefono (BelongsTo)
    public function phone():BelongsTo{
        return $this->belongsTo(Phone::class);
    }
}
