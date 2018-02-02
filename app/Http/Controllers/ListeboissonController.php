<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ListeBoissonController extends Controller {

  function listeBoisson()
  {
       // $drinkChoice =['Café au lait' => 60, 'Thé' => 70, 'Expresso' => 40, 'Café long' => 50];
      // return view('machineACafe', compact('drinkChoice'));

    $listeboisson = DB::select('select NomBoisson, CodeBoisson,Prix from boisson');
      return view('boisson.listeboisson', ['boissons' => $listeboisson]);
  }

  function detailBoisson($code)
  {
    $boisson = DB::select('select NomBoisson, Prix from boisson where CodeBoisson = ?',[$code]);
    return view('boisson.detailboisson',['detailboisson' => $boisson]);
  }

}
?>