<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Boisson;


class BoissonController extends Controller
{

  function prixcroissant() {
   $boisson = Boisson::select("NomBoisson","Prix")->orderBy("Prix")->get();
   return view('prix', ['boisson'=> $boisson]);
 }

 function typeboisson() {
  $tboisson = Boisson::all();
  return view('boissons',['type'=>$tboisson]);

}

function detail($code) {
  $boisson = Boisson::select('*')->where('CodeBoisson',$code)->get();
  return view('boissons.afficherprixboisson',['detail'=>$boisson]);
}
  


 function create(){
  return view('ajout.choix');
 }

function store(Request $request){
	$boisson = new Boisson();
    $boisson->CodeBoisson = $request->input('codeboisson');
    $boisson->NomBoisson = $request->input('boisson');
    $boisson->Prix = $request->input('prix');
  
     $boisson->save();

     return redirect('/machineACafe');
}


function edit() {
	return view('modif.modification');
}

function update(Request $request) {
 return $request->input();
}

}







 


  