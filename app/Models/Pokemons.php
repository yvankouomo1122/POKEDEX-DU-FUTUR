<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pokemons extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'hp',
        'weight',
        'height',
        'type1',
        'type2',
        'image'
    ];

    public function types()
    {
        return $this->belongsToMany(Type::class);
    }

    public function attacks()
    {
        return $this->hasMany(Attack::class);
    }
}
