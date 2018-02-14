<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ListeBoissonController extends Controller {

//Méthode listeBoisson qui permet de selectionner le NomBoisson/Prix en fonction de la bse de données//
  function index()
  {
      //Manuellement//
      // $drinkChoice =['Café au lait' => 60, 'Thé' => 70, 'Expresso' => 40, 'Café long' => 50];
      // return view('machineACafe', compact('drinkChoice'));
    
    //Je selectionne le Nom,Prix et code en fonction de la base de doonée et je retourne un tableau associatif boissons//
    $listeboissons = DB::select('select nomBoisson, codeBoisson,prix from boissons');
      return view('boisson.listeboisson', ['boissons' => $listeboissons]);
  }


//Méthode detailBoisson qui permet de selectionner le Nom,Prix en fonction du code de la boisson//
  function show($boissoncode)
  {
    //Je selectionne le Nom,Prix en fonction du code de la boisson et je retourne un tableau associatif detailboisson//
    $boisson = DB::select('select nomBoisson, prix from boissons where codeBoisson = ?',[$boissoncode]);
    return view('boisson.detailboisson',['detailboisson' => $boisson]);
  }

}
?>