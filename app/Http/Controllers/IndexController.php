<?php

namespace App\Http\Controllers;

class IndexController extends Controller{

//méthode bienvenue qui permet de retourner la vue index//
  public function index() {
  	return view('index');
 }
 
}
?>