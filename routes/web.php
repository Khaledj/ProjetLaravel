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
Route::get('/', 'IndexController@index');

//Route de la page qui correspond à la machine à café//
Route::get('/machine_a_cafe','MachineCafeController@machine');

///////Liste boissons///////

//Route de la page liste des boissons//
Route::get('/boissons','ListeBoissonController@index');
//Route de la page qui affiche le détail une boisson
Route::get('/boisson/{boissoncode}','ListeBoissonController@show');

//Liste recette//
 //Route de la page liste de recette//
 // Route::get('/recettes','RecetteController@index');//

// Liste ingredient//
//Route de la page liste des ingredients//
 // Route::get('/ingredients','IngredientController@index');//

//Liste vente//
//Route de la page liste des ventes//
 // Route::get('/ventes','VenteController@index');//

//Gestion monnaie//
//Route de la page liste de la gestion de monnaie//
Route::get('/gestion_monnaies','GestionMonnaieController@index');

/////ORM : Modele////

//////Liste des boissons///////

//Route de la page qui affiche les boissons par ordre alphabétique en ORM
Route::get('/boissons_ordre','BoissonController@ordreBoissons');

// Route de la page qui affiche les prix en ordre croissant et les boissons en ORM
Route::get('/prix_croissant','BoissonController@prixCroissant');

//Route de la page qui affiche les boissons avec un prix en ORM
Route::get('/boisson_ordre/{boissoncode}','BoissonController@show');

///Ajouter///
//ajouter une boisson (saisie du formulaire)//
Route::get('/boissons/create','BoissonController@create');

//récupération de la saisie du formulaire des boissons//
Route::post('/boissons','BoissonController@store');

///Mettre a jour///
//mettre a jour une boisson (saisie du formulaire)//
Route::get('/boissons/{boissoncode}/edit','BoissonController@edit');

//mettre a jour une boisson (récuperation du formulaire)//
Route::put('/boissons/{boissoncode}','BoissonController@update');

///Suppression///
//Supprimer une boisson existant//
Route::delete('/boissons/{boissoncode}','BoissonController@destroy');

///////Liste des recettes///////

// //Liste des recettes mode ORM//
Route::get('/recettes','RecetteController@index');

//Ajouter///
//ajouter une recette (saisie du formulaire)//
Route::get('/recettes/create','RecetteController@create');

//récupération de la saisie du formulaire des boissons//
Route::post('/recettes','RecetteController@store');


///////Liste des ingredients///////

///Liste des ingredients mode ORM///
Route::get('/ingredients','IngredientController@index');

///Ajouter///
//ajouter un ingrédient (saisie du formulaire)//
Route::get('/ingredients/create','IngredientController@create');

//récupération de la saisie du formulaire des boissons//
Route::post('/ingredients','IngredientController@store');

///Mettre a jour///
//mettre a jour un ingrédient (saisie du formulaire)//
Route::get('/ingredients/{boissoncode}/edit','IngredientController@edit');

//mettre a jour un ingrédient (récuperation du formulaire)//
Route::put('/ingredients/{boissoncode}', 'IngredientController@update');

///Suppression///
//Supprimer une boisson existant//
Route::delete('/ingredients/{boissoncode}','IngredientController@destroy');


////Liste des ventes mode ORM///
 Route::get('/ventes','VenteController@index');


 ?>
