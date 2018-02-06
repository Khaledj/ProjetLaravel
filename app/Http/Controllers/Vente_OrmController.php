<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vente;

class Vente_OrmController extends Controller
{
    //Methode listeVente qui permet de lister les ventes//
 function listeVente() {
    $vente = Vente::select('*')->get();
    return view('vente.venteorm',['vente'=>$vente]);
  }
}
