<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Boisson;
use App\Ingredient;
use App\Boisson_has_ingredient;

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
 	public function index() {
 	$boissons = Boisson::all();
 	return view('recette.recetteorm',['boissons'=>$boissons]);
}

   //Méthode create qui permet de retourner la vue du formulaire//
	public function create(){
		return view('recette.ajout');
	}

	 //Méthode store qui permet d'ajouter une recette via  un formulaire//
    public function store(Request $request){
    $recette = new Boisson_has_ingredient(); // création d'une recette//
    $recette->Boisson_CodeBoisson = $request->input('codeboisson');
    $recette->Ingredients_CodeIngredient = $request->input('codeingredient');
    $recette->Quantiter = $request->input('quantite'); //Quantité prend la valeur de la quantité du formulaire//
    $recette->boissons_codeBoisson = $request->input('codeboisson');
    $recette->ingredients_codeIngredient = $request->input('codeingredient');
    $recette->quantite = $request->input('quantite'); //Quantité prend la valeur de la quantité du formulaire//
    $recette->save(); //je sauvegarde la nouvelle recette
    return redirect('/recettes');
    }

     // //Méthode edit qui permet de retourner la vue du formulaire correspondant à la recette selectionné//
     public function edit($boissoncode,$ingredientcode) {
      //je recherche toutes les valeurs de la recette qui correspond au code de l'ingredient et au code de la boisson//
     // $recette = Boisson_has_ingredient::where("boissons_codeBoisson",$boissoncode)
     // ->where("ingredients_codeIngredient",$ingredientcode)->first();
    $boisson = Boisson::find($boissoncode);
    $recette = $boisson->ingredients->find($ingredientcode);

     return view('recette.modification',['recette'=>$recette]);
     }
     // //Méthode update qui permet de retourner une modification d'une recette//
    public  function update(Request $request, $boissoncode,$ingredientcode) {
      $boisson = Boisson::find($boissoncode);
      $recette = $boisson->ingredients->find($ingredientcode);
      $recette->pivot->update(['quantite' => $request->input('quantite')]);
      return redirect('/recettes');
      }
      //Méthode qui permet de supprimer une recette existant en fonction du code de l'ingrédient et du code boisson//
   public function destroy($boissoncode,$ingredientcode) {
      // je recherche toutes les valeurs de la recette  qui correspond au code de l'ingrédient et au code de la boisson et tu les supprime//
      $boisson = Boisson::find($boissoncode);
      $recette = $boisson->ingredients->find($ingredientcode);
      $recette->pivot->delete();

    return redirect('/recettes');
  }


}
?>





