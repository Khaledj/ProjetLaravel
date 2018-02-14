<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Boisson;
use App\Ingredient;

class RecetteController extends Controller
{

 //Methode listeRecettes qui affiche manuellement les valeurs de la variable recette//
  // 	function index() {
  // 	$recettes = array('Expresso'	=> array('café'=>1,'eau'=>1),
  // 		             'Café_long'=> array('café'=>2,'eau'=>2),
	 // 			     'Thé'		=> array('thé'=>1,'eau'=>2),
		// 		     'Café au lait'=> array('café'=>1,'eau'=>2,'lait'=>2),
  // 	                );
  //    return view('recette.listerecette',compact('recettes'));
	 // }
// //Méthode recette qui affiche la liste des ingredients en fonction de la mise a jour BDD//
 	function index() {
 	$boissons = Boisson::all();
 	
 	return view('recette.recetteorm',['boissons'=>$boissons]);	
}

}
?>


       

 

