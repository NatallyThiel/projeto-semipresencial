<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Coach extends Model
{
    protected $fillable = [
        'image',
        'name',
    ];

    public function pokemon():HasMany
    {
        return $this->hasMany(Pokemon::class);
    }
}

