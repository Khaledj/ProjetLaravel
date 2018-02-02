<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Boisson;


class BoissonController extends Controller
{

  function create(){
    return view('boisson.ajout');
  }

  function store(Request $request){
    $boisson = new Boisson();
    $boisson->CodeBoisson = $request->input('codeboisson');
    $boisson->NomBoisson = $request->input('boisson');
    $boisson->Prix = $request->input('prix');

    $boisson->save();

    return redirect('/boissons');
  }

  function ordreBoisson() {
  $tboisson = Boisson::select("NomBoisson")->orderBy("NomBoisson")->get();
  return view('boisson.boisson_ordre',['ordre'=>$tboisson]);
  }



  function prixCroissant() {
   $boisson = Boisson::select("NomBoisson","Prix")->orderBy("Prix")->get();
   return view('boisson.prix', ['boisson'=> $boisson]);
  }

  

  function detail($code) {
  $boisson = Boisson::select('*')->where('CodeBoisson',$code)->get();
  return view('boisson.afficherprixboisson',['detail'=>$boisson]);
  }

// function edit() {
// 	return view('modif.modification');
// }

// function update(Request $request) {
//  return $request->input();
// }

}










