<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class machineACafeController extends Controller
{

	//Fonction de Veronique
    // function listDrink() {
    //     // $drinkChoice =['Café au lait' => 60, 'Thé' => 70, 'Expresso' => 40, 'Café long' => 50];
    //     $drinkChoice = DB::select('select nomboisson, codeboisson  from boisson');

    //     return view('machineACafe', ['drinks' => $drinkChoice]);

    // }

    // function showDrink ($code) {
     
    //     $drink = DB::select("select nomboisson, prixboisson from boisson where codeboisson = ?", [$code]);
    //     return view('boisson.drinkDetails', ['details' => $drink]);
        
    // }

// Fonction de Thomas
  // function listDrink()
  // {
  //      // $drinkChoice =['Café au lait' => 60, 'Thé' => 70, 'Expresso' => 40, 'Café long' => 50];
  //     // return view('machineACafe', compact('drinkChoice'));

  //   $drinkChoice = DB::select('select nomBoisson, codeBoisson from boisson');
  //     return view('machineACafe', ['boissons' => $drinkChoice]);
  // }

  // function showDrink($code)
  // {
  //   $drink = DB::select('select nomBoisson, prix from boisson where codeBoisson = ?',[$code]);
  //   return view('boisson.affichageBoisson',['detailBoisson' => $drink]);
  // }

  // Fonction de Khaled
  function listDrink()
  {
       // $drinkChoice =['Café au lait' => 60, 'Thé' => 70, 'Expresso' => 40, 'Café long' => 50];
      // return view('machineACafe', compact('drinkChoice'));

    $drinkChoice = DB::select('select NomBoisson, CodeBoisson,Prix from boisson');
      return view('machineACafe', ['boissons' => $drinkChoice]);
  }

  function showDrink($code)
  {
    $drink = DB::select('select NomBoisson, Prix from boisson where CodeBoisson = ?',[$code]);
    return view('boisson.affichageBoisson',['detailBoisson' => $drink]);
  }
}

?>
