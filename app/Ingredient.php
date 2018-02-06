<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    //création de la table boisson reliée à la base de donnée//
	protected $table = 'ingredients';
    
    //définir la clé primaire//
	protected $primaryKey = 'CodeIngredient';

	//définir le type de clé primaire en chaîne//
	protected $keyType = 'string';

    //
    protected $fillable=['NomBoisson', 'Prix'];

    //colonne created_at et updated_at n'existent pas//
    public $timestamps=false;

    public function boisson() {
    	return $this->belongsToMany('App\Boisson');
    }

}