<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route de la page home//
Route::get('/index', 'IndexController@bienvenue');

//Route de la page qui correspond à la machine à café//
Route::get('/machineacafe','MachineacafeController@machine');

///////Liste boissons//////

//Route de la page liste des boissons//
Route::get('/boissons','ListeboissonController@listeboisson');

//Route de la page qui affiche le détail une boisson
Route::get('/boisson/{code}','ListeboissonController@detailboisson');


//formulaire des boissons (saisie du formulaire)//
Route::get('/ajout','BoissonController@create');

//récupération de la saisie du formulaire des boissons//
Route::post('/boissons','BoissonController@store');

//////Liste recette///////
//Route de la page liste de recette//
Route::get('/recettes','RecetteController@listerecettes');

//Route de la page liste des ingredients//
Route::get('/ingredients','IngredientController@listIngredients');

//Route de la page liste des ventes//
Route::get('/ventes','VenteController@listeVente');

//Route de la page liste de la gestion de monnaie//
Route::get('/gestionMonnaie','GestionMonnaieController@listMonnaie');


// //Route de la page qui affiche les boissons par ordre alphabétique en ORM
// Route::get('boissons','BoissonController@typeboisson');

// //Route de la page qui affiche les prix en ordre croissant et les boissons en ORM
// Route::get('prix','BoissonController@prixcroissant');

// //Route de la page qui affiche les boissons avec un prix en ORM
// Route::get('/boissons/{code}','BoissonController@detail');

// //mettre a jour une boisson (saisie du formulaire)//
// Route::get('modif','BoissonController@edit');

// //mettre a jour une boisson (récuperation du formulaire)//
// Route::get('modif','BoissonController@update');
?>
