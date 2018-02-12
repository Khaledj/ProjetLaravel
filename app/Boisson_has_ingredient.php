<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Boisson_has_ingredient extends Model
{
  
    protected $primaryKey = 'Boisson_CodeBoisson';
    // 'Ingredients_CodeIngredient'];
  
    protected $keyType = 'string';

    protected $fillable=['Quantite'];

    //colonne created_at et updated_at n'existent pas//
    public $timestamps=false;

}
