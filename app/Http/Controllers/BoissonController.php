<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Boisson;


class BoissonController extends Controller
{

//Methode ordreBoisson qui permet de lister les boissons par ordre alphabétique//
 function ordreBoisson() {
  $tboisson = Boisson::select("NomBoisson","CodeBoisson")->orderBy("NomBoisson")->get();
  return view('boisson.boisson_ordre',['ordre'=>$tboisson]);
  }

//Méthode prixCroissant qui permet de lister les boissons en fonction du prix croissant//
  function prixCroissant() {
   $boisson = Boisson::select("NomBoisson","Prix")->orderBy("Prix")->get();
   return view('boisson.prix', ['boisson'=> $boisson]);
  }

//Méthode detail qui permet de donner le nom et le prix d'une boisson //
  function detail($code) {
  $boisson = Boisson::select('*')->where('CodeBoisson',$code)->get();
  return view('boisson.afficheboisson',['detail'=>$boisson]);
  }

//Méthode create qui permet de retourner la vue du formulaire//
  function create(){
    return view('boisson.ajout');
  }

//Méthode store qui permet d'ajouter une boisson via  un formulaire//
  function store(Request $request){
    $boisson = new Boisson(); // création d'une boisson//
    $boisson->CodeBoisson = $request->input('codeboisson'); //CodeBoisson prend la valeur de codeboison du formulaire//
    $boisson->NomBoisson = $request->input('boisson'); //NomBoisson prend la valeur de boisson du formulaire//
    $boisson->Prix = $request->input('prix'); //Prix prend la valeur du prix du formulaire//
    $boisson->save(); //je sauvegarde la nouvelle boisson

    return redirect('/boissons');
  }

 //Méthode edit qui permet de retourner la vue du formulaire correspondant à la boisson selectionnée//
 function edit($code) {
  $boisson = Boisson::find($code); //je recherche toutes les valeurs de la boisson qui correspond au code de la boisson//
 	return view('boisson.modification',['boisson'=>$boisson]);
 }

//Méthode update qui permet de retourner une modification d'une boisson en fonction du code de la boisson correspondant//
function update(Request $request,$code) {
  $boisson = Boisson::find($code); //je recherche toutes les valeurs de la boisson qui correspond à son code boisson//
  $boisson->NomBoisson = $request->input('boisson'); //je modifie le NomBoisson en fonction du formulaire
  $boisson->Prix = $request->input('prix'); // je modifie le Prix en fonction du formulaire
  $boisson->save(); // je sauvegarde la boisson modifiée
  return redirect('/boissons'); 
 }

//Méthode qui permet de supprimer une boisson existante en fonction du code de la boisson//
  function delete($code) { 
    Boisson::find($code)->delete(); // je recherche toutes les valeurs de la boisson qui correspod au code de la boisson et tu les supprime//
    return redirect('/boissons');
  }
}













