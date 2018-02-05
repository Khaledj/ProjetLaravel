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
Route::get('/machine_a_cafe','MachineCafeController@machine');

////Liste boissons////
//Route de la page liste des boissons//
Route::get('/boissons','ListeBoissonController@listeBoisson');

//Route de la page qui affiche le détail une boisson
Route::get('/boisson/{code}','ListeBoissonController@detailBoisson');


////Liste recette////
//Route de la page liste de recette//
Route::get('/recettes','RecetteController@listeRecettes');


////Liste ingredient////
//Route de la page liste des ingredients//
Route::get('/ingredients','IngredientController@listeIngredients');


////Liste vente////
//Route de la page liste des ventes//
Route::get('/ventes','VenteController@listeVente');


////Gestion monnaie////
//Route de la page liste de la gestion de monnaie//
Route::get('/gestion_monnaie','GestionMonnaieController@listeMonnaie');

/////ORM : Modele////

////Boissons////

//Route de la page qui affiche les boissons par ordre alphabétique en ORM
Route::get('/boisson_ordre','BoissonController@ordreBoisson');

// Route de la page qui affiche les prix en ordre croissant et les boissons en ORM
Route::get('/prix_croissant','BoissonController@prixCroissant');

//Route de la page qui affiche les boissons avec un prix en ORM
Route::get('/boisson_ordre/{code}','BoissonController@detail');

///Ajouter///
//ajouter une boisson (saisie du formulaire)//
Route::get('/ajout','BoissonController@create');

//récupération de la saisie du formulaire des boissons//
Route::post('/boissons','BoissonController@store');

///Mettre a jour///
//mettre a jour une boisson (saisie du formulaire)//
Route::get('/modif/{code}','BoissonController@edit');

 //mettre a jour une boisson (récuperation du formulaire)//
 Route::post('/boissons/{code}','BoissonController@update');

///Suppression///
 //demande de validation de suppresion//
 Route::get('/supp/{code}','BoissonController@val');

  //Supprimer une boisson//
 Route::delete('/boissons','BoissonController@delete');
 ?>
