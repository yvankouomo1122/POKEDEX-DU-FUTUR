<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Attack extends Model
{
    use HasFactory;

    protected $fillable = [
        'pokemon_id',
        'name',
        'image',
        'damage',
        'description',
        'type_id',
    ];

    public function pokemon()
    {
        return $this->belongsTo(Pokemons::class);
    }

    public function type()
    {
        return $this->belongsTo(Types::class);
    }
}
