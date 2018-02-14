<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ingredient;

class IngredientController extends Controller
{

   //Méthode listeIngredients qui affiche manuellement les valeurs de la variable $ingredients//
    //  function index() { $ingredients = array('Café' => 100,'Eau'=> 100,'Thé'  => 100,'Lait' => 100,'Sucre' => 100);

    //     return view('ingredient.listeingredient', compact('ingredients'));
    // }

    //Méthode ingredient qui affiche la liste des ingredients en fonction de la mise a jour BDD//
	 function index() {
	 	$ingredients = Ingredient::select('*')->get();
	 	return view('ingredient.ingredientorm',['ingredients'=>$ingredients]);
	 } 

    //Méthode create qui permet de retourner la vue du formulaire//
	function create(){
		return view('ingredient.ajout');
	}

	//Méthode store qui permet d'ajouter un ingrédient via  un formulaire//
    function store(Request $request){
    $ingredient = new Ingredient(); // création d'un ingrédient//
    $ingredient->codeIngredient = $request->input('codeingredient'); //CodeIngredient prend la valeur de codeingredient du formulaire//
    $ingredient->nomIngredient = $request->input('ingredient'); //NomIngredient prend la valeur de ingredient du formulaire//
    $ingredient->stockIngredient = $request->input('stock'); //StockIngredient prend la valeur du stock du formulaire//
    $ingredient->save(); //je sauvegarde un nouvelle ingredient
    return redirect('/ingredients');
    }

    //Méthode edit qui permet de retourner la vue du formulaire correspondant à l'ingrédient selectionné//
    function edit($ingredientcode) {
    $ingredient = Ingredient::find($ingredientcode); //je recherche toutes les valeurs de l'ingredient qui correspond au code de l'ingredient//
 	  return view('ingredient.modification',['ingredient'=>$ingredient]);
    }

    //Méthode update qui permet de retourner une modification d'un ingrédient en fonction du code de l'ingrédient correspondant//
    function update(Request $request,$ingredientcode) {
    $ingredient = Ingredient::find($ingredientcode); //je recherche toutes les valeurs de l'ingrédient qui correspond à son code ingrédient//
    $ingredient->nomIngredient = $request->input('ingredient'); //je modifie le NomIngrédient en fonction du formulaire
    $ingredient->stockIngredient = $request->input('stock'); // je modifie le StockIngrédient en fonction du formulaire
    $ingredient->save(); // je sauvegarde l'ingrédient  modifiée
    return redirect('/ingredients'); 
    }

    //Méthode qui permet de supprimer un ingrédient existant en fonction du code de l'ingrédient//
    function destroy($ingredientcode) { 
    Ingredient::find($ingredientcode)->delete(); // je recherche toutes les valeurs de l'ingrédient qui correspod au code de l'ingrédient et tu les supprime//
    return redirect('/ingredients');
  }
  }

?>

