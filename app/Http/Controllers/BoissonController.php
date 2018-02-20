<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Boisson;


class BoissonController extends Controller
{

//Methode ordreBoisson qui permet de lister les boissons par ordre alphabétique//
 public function ordreBoissons() {
  $boissons = Boisson::select("nomBoisson","codeBoisson")->orderBy("nomBoisson")->get();
  return view('boisson.boisson_ordre',['ordre'=>$boissons]);
  }

//Méthode prixCroissant qui permet de lister les boissons en fonction du prix croissant//
 public function prixCroissant() {
   $boissons = Boisson::select("nomBoisson","prix")->orderBy("prix")->get();
   return view('boisson.prix', ['boissons'=> $boissons]);
  }

//Méthode detail qui permet de donner le nom et le prix d'une boisson //
 public function show($boissoncode) {
  $boisson = Boisson::select('*')->where('codeBoisson',$boissoncode)->get();
  return view('boisson.afficheboisson',['detail'=>$boisson]);
  }

//Méthode create qui permet de retourner la vue du formulaire//
  public function create(){
    return view('boisson.ajout');
  }

//Méthode store qui permet d'ajouter une boisson via  un formulaire//
  public function store(Request $request){
    $boisson = new Boisson(); // création d'une boisson//
    $boisson->codeBoisson = $request->input('codeboisson'); //CodeBoisson prend la valeur de codeboison du formulaire//
    $boisson->nomBoisson = $request->input('boisson'); //NomBoisson prend la valeur de boisson du formulaire//
    $boisson->prix = $request->input('prix'); //Prix prend la valeur du prix du formulaire//
    $boisson->save(); //je sauvegarde la nouvelle boisson

    return redirect('/boissons');
  }

 //Méthode edit qui permet de retourner la vue du formulaire correspondant à la boisson selectionnée//
 public function edit($boissoncode) {
  $boisson = Boisson::find($boissoncode); //je recherche toutes les valeurs de la boisson qui correspond au code de la boisson//
 	return view('boisson.modification',['boisson'=>$boisson]);
 }

//Méthode update qui permet de retourner une modification d'une boisson en fonction du code de la boisson correspondant//
public function update(Request $request,$boissoncode) {
  $boisson = Boisson::find($boissoncode); //je recherche toutes les valeurs de la boisson qui correspond à son code boisson//
  $boisson->nomBoisson = $request->input('boisson'); //je modifie le NomBoisson en fonction du formulaire
  $boisson->prix = $request->input('prix'); // je modifie le Prix en fonction du formulaire
  $boisson->save(); // je sauvegarde la boisson modifiée
  return redirect('/boissons'); 
 }

//Méthode qui permet de supprimer une boisson existante en fonction du code de la boisson//
  public function destroy($boissoncode) { 
    $boisson = Boisson::find($boissoncode)->delete(); // je recherche toutes les valeurs de la boisson qui correspod au code de la boisson et tu les supprime//
    return redirect('/boissons');
  }
}













