<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class MachineCafeController extends Controller
{

  // Fonction de Khaled
  function machine()
  {
       // $drinkChoice =['Café au lait' => 60, 'Thé' => 70, 'Expresso' => 40, 'Café long' => 50];
      // return view('machineACafe', compact('drinkChoice'));

    $listeboisson = DB::select('select NomBoisson, CodeBoisson,Prix from boisson');
      return view('machineacafe.machine', ['boissons' => $listeboisson]);
  }

  
}

?>
