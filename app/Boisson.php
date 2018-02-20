<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Boisson extends Model
{
 
    //création de la table boisson reliée à la base de donnée//
	protected $table = 'boissons';
    
    //définir la clé primaire//
	protected $primaryKey = 'codeBoisson';

	//définir le type de clé primaire en chaîne//
	protected $keyType = 'string';

    
    protected $fillable=['nomBoisson', 'prix'];

    //colonne created_at et updated_at n'existent pas//
    public $timestamps=false;

    //Définition de la relation 1 boisson - 1 vente//
    public function ventes() {
        return $this->hasMany('App\Vente','boissons_codeBoisson');
    }
    
     public function ingredients() {
         return $this->belongsToMany('App\Ingredient','boissons_has_ingredients','boissons_codeBoisson','ingredients_codeIngredient')->withPivot('quantite');
     }
    
    

}
