<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Boisson_has_ingredient;

class RecetteController extends Controller
{

 //Methode listeRecettes qui affiche manuellement les valeurs de la variable recette//
 //  	function listeRecettes() {
 //  	$recette = array('Expresso'	=> array('café'=>1,'eau'=>1),
 //  		             'Café_long'=> array('café'=>2,'eau'=>2),
	// 			     'Thé'		=> array('thé'=>1,'eau'=>2),
	// 			     'Café au lait'=> array('café'=>1,'eau'=>2,'lait'=>2),
 //  	                );
 //     return view('recette.listerecette',compact('recette'));
	// }

//Méthode recette qui affiche la liste des ingredients en fonction de la mise a jour BDD//
	function recette() {
	$recette = Boisson_has_ingredient::select('*')->get();
	return view('recette.recetteorm',['recette'=>$recette]);

	}
//Méthode create qui permet de retourner la vue du formulaire//
	function create(){
		return view('recette.ajout');
	}

	//Méthode store qui permet d'ajouter une recette via  un formulaire//
    function store(Request $request){
    $recette = new Boisson_has_ingredient(); // création d'une recette//
    $recette->Boisson_CodeBoisson = $request->input('codeboisson'); //Boisson_CodeBoisson prend la valeur de codeboisson du formulaire//
    $recette->Ingredients_CodeIngredient = $request->input('codeingredient'); //Ingredients_CodeIngredient prend la valeur de codeingredient du formulaire//
    $recette->Quantiter = $request->input('quantiter'); //Quantité prend la valeur de la quantité du formulaire//
    $recette->save(); //je sauvegarde la nouvelle recette
    return redirect('/recettes');
    }

}
?>

    
 

