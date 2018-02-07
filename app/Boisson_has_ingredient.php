<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Boisson_has_ingredient extends Model
{
  
    protected $fillable=['Quantiter'];

    //colonne created_at et updated_at n'existent pas//
    public $timestamps=false;

}
