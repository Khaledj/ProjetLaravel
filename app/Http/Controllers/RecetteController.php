<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Boisson_has_ingredient;
use App\Boisson;

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
 	$recettes = Boisson_has_ingredient::select('*')->get();
 	return view('recette.recetteorm',['recettes'=>$recettes]);

 	}
//Méthode create qui permet de retourner la vue du formulaire//
	function create(){
		return view('recette.ajout');
	}

	//Méthode store qui permet d'ajouter une recette via  un formulaire//
    function store(Request $request){
    $recette = new Boisson_has_ingredient(); // création d'une recette//
    $recette->Boisson_CodeBoisson = $request->input('codeboisson');
    $recette->Ingredients_CodeIngredient = $request->input('codeingredient');
    $recette->Quantite = $request->input('quantite'); //Quantité prend la valeur de la quantité du formulaire//
    $recette->save(); //je sauvegarde la nouvelle recette
    return redirect('/recettes');
    }

    //Méthode edit qui permet de retourner la vue du formulaire correspondant à la recette selectionné//
    function edit() {
     //je recherche toutes les valeurs de la recette qui correspond au code de l'ingredient et au code de la boisson//
    $drink = Boisson_has_ingredient::all();
      // $recette = $drink->ingredients;
    return view('recette.modification',['recettes'=>$drink]);
    }
}
?>

    
 

