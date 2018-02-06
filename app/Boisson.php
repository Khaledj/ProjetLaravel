<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Boisson extends Model
{
    //création de la table boisson reliée à la base de donnée//
	protected $table = 'boisson';
    
    //définir la clé primaire//
	protected $primaryKey = 'CodeBoisson';

	//définir le type de clé primaire en chaîne//
	protected $keyType = 'string';

    
    protected $fillable=['NomBoisson', 'Prix'];

    //colonne created_at et updated_at n'existent pas//
    public $timestamps=false;

    //Définition de la relation 1 boisson - 1 vente//
    public function vente() {
        return $this->belongsTo('App\Vente','foreign_key');
    }
    
    public function ingredient() {
        return $this->belongsToMany('App\Ingredient','boisson_has_ingredient','Boisson_CodeBoisson','Ingredients_CodeIngredient');
    }
    
    
}


