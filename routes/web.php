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

Auth::routes();

 Route::get('/home', 'HomeController@index')->name('home');

//Route de la page home//
Route::get('/', 'IndexController@index')->name('index');

//Route de la page qui correspond à la machine à café//
Route::get('/machine_a_cafe','MachineCafeController@machine')->name('machine');

///////Liste boissons///////

//Route de la page liste des boissons//
Route::get('/boissons','ListeBoissonController@index')->name('boisson')->middleware('auth');
//Route de la page qui affiche le détail une boisson
Route::get('/boisson/{boissoncode}','ListeBoissonController@show')->middleware('auth');

//Liste recette//
 //Route de la page liste de recette//
 //Route::get('/recettes','RecetteController@index')->name('recette')->middleware('auth');//

// Liste ingredient//
//Route de la page liste des ingredients//
 // Route::get('/ingredients','IngredientController@index')->name('ingredient')->middleware('auth');//

//Liste vente//
//Route de la page liste des ventes//
 // Route::get('/ventes','VenteController@index')->name('vente')->middleware('auth');//

//Gestion monnaie//
//Route de la page liste de la gestion de monnaie//
Route::get('/gestion_monnaies','GestionMonnaieController@index')->name('monnaie')->middleware('auth');

/////ORM : Modele////

//////Liste des boissons///////

//Route de la page qui affiche les boissons par ordre alphabétique en ORM
Route::get('/boissons_ordre','BoissonController@ordreBoissons')->middleware('auth');

// Route de la page qui affiche les prix en ordre croissant et les boissons en ORM
Route::get('/prix_croissant','BoissonController@prixCroissant')->middleware('auth');

//Route de la page qui affiche les boissons avec un prix en ORM
Route::get('/boisson_ordre/{boissoncode}','BoissonController@show')->middleware('auth');

///Ajouter///
//ajouter une boisson (saisie du formulaire)//
Route::get('/boissons/create','BoissonController@create')->middleware('auth');

//récupération de la saisie du formulaire des boissons//
Route::post('/boissons','BoissonController@store')->middleware('auth');

///Mettre a jour///
//mettre a jour une boisson (saisie du formulaire)//
Route::get('/boissons/{boissoncode}/edit','BoissonController@edit')->middleware('auth');

//mettre a jour une boisson (récuperation du formulaire)//
Route::put('/boissons/{boissoncode}','BoissonController@update')->middleware('auth');

///Suppression///
//Supprimer une boisson existant//
Route::delete('/boissons/{boissoncode}','BoissonController@destroy')->middleware('auth');

///////Liste des recettes///////

// //Liste des recettes mode ORM//
Route::get('/recettes','RecetteController@index')->name('recette')->middleware('auth');

//Ajouter///
//ajouter une recette (saisie du formulaire)//
Route::get('/recettes/create','RecetteController@create')->middleware('auth');

//récupération de la saisie du formulaire des boissons//
 Route::post('/recettes','RecetteController@store')->middleware('auth');

///Mettre a jour///
//mettre a jour une recette (saisie du formulaire)//
 Route::get('/recettes/{boissoncode}/{ingredientcode}/edit','RecetteController@edit')->middleware('auth');

//mettre a jour une recette (récuperation du formulaire)//
 Route::put('/recettes/{boissoncode}/{ingredientcode}', 'RecetteController@update')->middleware('auth');

 ///Suppression///
//Supprimer une recette existant//
Route::delete('/recettes/{boissoncode}/{ingredientcode}','RecetteController@destroy')->middleware('auth');


///////Liste des ingredients///////

///Liste des ingredients mode ORM///
Route::get('/ingredients','IngredientController@index')->name('ingredient')->middleware('auth');

///Ajouter///
//ajouter un ingrédient (saisie du formulaire)//
Route::get('/ingredients/create','IngredientController@create')->middleware('auth');

//récupération de la saisie du formulaire des boissons//
Route::post('/ingredients','IngredientController@store')->middleware('auth');

///Mettre a jour///
//mettre a jour un ingrédient (saisie du formulaire)//
Route::get('/ingredients/{ingredientcode}/edit','IngredientController@edit')->middleware('auth');

// //mettre a jour un ingrédient (récuperation du formulaire)//
 Route::put('/ingredients/{ingredientcode}', 'IngredientController@update')->middleware('auth');

///Suppression///
//Supprimer une boisson existant//
Route::delete('/ingredients/{ingredientcode}','IngredientController@destroy')->middleware('auth');


////Liste des ventes mode ORM///
 Route::get('/ventes','VenteController@index')->name('vente');

//Ajouter une vente///
//ajouter une vente (saisie du formulaire)//
Route::get('/ventes/create','VenteController@create');

//récupération de la saisie du formulaire des ventes//
Route::post('/machine_a_cafe','VenteController@store');


 ?>


