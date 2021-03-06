<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vente extends Model
{
    //création de la table boisson reliée à la base de donnée//
	protected $table = 'ventes';
    
    //définir la clé primaire//
	protected $primaryKey = 'numeroVente';

    protected $fillable=['date','nombreSucre','heure'];

    //colonne created_at et updated_at n'existent pas//
    public $timestamps=false;


    //Définition de la relation n vente - 1 boisson//
    public function boisson() {
    	return $this->belongsTo('App\Boisson');
    }

}
