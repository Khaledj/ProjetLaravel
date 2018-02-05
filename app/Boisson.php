<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Boisson extends Model
{
	protected $table = 'Boisson';
	protected $primaryKey = 'CodeBoisson';
	protected $keyType = 'string';
    protected $fillable=['NomBoisson', 'Prix'];
    public $timestamps=false;
}
