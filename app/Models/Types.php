<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Types extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'color',
        'image',
    ];

    public function pokemons()
    {
        return $this->belongsToMany(Pokemons::class);
    }
}
