<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Boisson extends Model
{
	protected $table = 'Boisson';
    protected $fillable=['NomBoisson', 'Prix'];
    public $timestamps=false;
}
