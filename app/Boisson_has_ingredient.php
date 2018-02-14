<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class Boisson_has_ingredient extends Pivot
{
	 protected $table = 'boissons_has_ingredients';

     protected $fillable=['quantite'];

     //colonne created_at et updated_at n'existent pas//
     public $timestamps=false;

}
