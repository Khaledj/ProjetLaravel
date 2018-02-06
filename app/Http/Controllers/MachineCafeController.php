<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class MachineCafeController extends Controller
{

  // Methode machine qui permet d'afficher la liste de boisson en fonction de la base de donnée//
	function machine()
	{
  	    //Fait mauellement//
        // $drinkChoice =['Café au lait' => 60, 'Thé' => 70, 'Expresso' => 40, 'Café long' => 50];
        // return view('machineACafe', compact('drinkChoice'));

        // Je selectionne le code,nom et prix de la table boisson et je retourne un tableau associatif boissons//
		$listeboisson = DB::select('select NomBoisson, CodeBoisson,Prix from boisson');
		return view('machineacafe.machine', ['boissons' => $listeboisson]);
	}


}

?>
