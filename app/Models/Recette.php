<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recette extends Model
{
    use HasFactory;

    public function ateliers()
    {
        return $this->belongsToMany(Atelier::class, 'ateliers_recettes', 'atelier_id', 'recette_id');
    }

    public function ingredients()
    {
        return $this->belongsToMany(Ingredient::class, 'recette_id', 'ingredient_id');
    }
}
