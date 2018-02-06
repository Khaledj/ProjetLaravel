<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ListeBoissonController extends Controller {

//Méthode listeBoisson qui permet de selectionner le NomBoisson/Prix en fonction de la bse de données//
  function listeBoisson()
  {
      //Manuellement//
      // $drinkChoice =['Café au lait' => 60, 'Thé' => 70, 'Expresso' => 40, 'Café long' => 50];
      // return view('machineACafe', compact('drinkChoice'));
    
    //Je selectionne le Nom,Prix et code en fonction de la base de doonée et je retourne un tableau associatif boissons//
    $listeboisson = DB::select('select NomBoisson, CodeBoisson,Prix from boisson');
      return view('boisson.listeboisson', ['boissons' => $listeboisson]);
  }


//Méthode detailBoisson qui permet de selectionner le Nom,Prix en fonction du code de la boisson//
  function detailBoisson($code)
  {
    //Je selectionne le Nom,Prix en fonction du code de la boisson et je retourne un tableau associatif detailboisson//
    $boisson = DB::select('select NomBoisson, Prix from boisson where CodeBoisson = ?',[$code]);
    return view('boisson.detailboisson',['detailboisson' => $boisson]);
  }

}
?>