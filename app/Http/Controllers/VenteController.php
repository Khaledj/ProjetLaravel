<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vente;
use App\Boisson;

class VenteController extends Controller{
/**Affiche toutes les ventes passées */

  // public function index() {
  
  //    $ventes = array (array ("N°" => "1","Boisson commandée" => "Café","Date" => "2018/01/04","Heure" => "08:17:57","Nb de sucres" => "0",),
  //                       array ("N°" => "2","Boisson commandée" => "Thé",  "Date" => "2018/01/04","Heure" => "09:17:57","Nb de sucres" => "1",),
  //                       array ("N°" => "3","Boisson commandée" => "Expresso","Date" => "2018/01/14","Heure" => "18:17:02","Nb de sucres" => "5",),
  //                       array ("N°" => "4","Boisson commandée" => "Expresso","Date" => "2018/01/15","Heure" => "08:17:02","Nb de sucres" => "2",),
  //                       array ("N°" => "5","Boisson commandée" => "Thé","Date" => "2018/01/16","Heure" => "10:17:57","Nb de sucres" => "1",),);
    
  //    return view("vente.listevente",["ventes" => $ventes]);
  //  }

 //Methode listeVente qui permet de lister les ventes//
  function index() {
     $ventes = Vente::select('*')->get();
     return view('vente.venteorm',['ventes'=>$ventes]);
   }

//Méthode create qui permet de retourner la vue du formulaire//
  function create(Request $request){
      return view('machineacafe.machine');
  }

// Méthode store qui permet d'ajouter une vente via  un formulaire//
     function store(Request $request){
     $vente = new Vente(); // création d'une vente //
     //$boisson = Boisson::select("NomBoisson","CodeBoisson")->where("NomBoisson","=",$request->input('boisson'))->get(); 
     $boisson = Boisson::where("NomBoisson","=",$request->input('boisson'))->first(); 
     $vente->Date = date("Y/m/d");
     $vente->NombreSucre = $request->input('sucre');
     $vente->Boisson_CodeBoisson = $boisson->CodeBoisson;
     $vente->Heure = date("H:i:s");
     $vente->save(); //je sauvegarde une nouvelle vente*/
     return redirect('/ventes');
   }


}
?>
