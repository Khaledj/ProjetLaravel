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

//Liste recette//
// Route de la page liste de recette//
// Route::get('/recettes','RecetteController@listeRecettes');//

// Liste ingredient//
// //Route de la page liste des ingredients//
// Route::get('/ingredients','IngredientController@listeIngredients');//

//Liste vente//
//Route de la page liste des ventes//
// Route::get('/ventes','VenteController@listeVente');//

//Gestion monnaie//
//Route de la page liste de la gestion de monnaie//
Route::get('/gestion_monnaie','GestionMonnaieController@listeMonnaie');

/////ORM : Modele////

////Liste des boissons////

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
//Supprimer une boisson existant//
Route::get('/boissons/{code}','BoissonController@delete');

///Liste des recettes///

//Liste des recettes mode ORM//
Route::get('/recettes','RecetteController@recette');

//Ajouter///
//ajouter un ingrédient (saisie du formulaire)//
Route::get('/ajout_recette','RecetteController@create');

//récupération de la saisie du formulaire des boissons//
Route::post('/recettes','RecetteController@store');


////Liste des ingredients////

///Liste des ingredients mode ORM///
Route::get('/ingredients','IngredientController@ingredient');

///Ajouter///
//ajouter un ingrédient (saisie du formulaire)//
Route::get('/ajout_ingredient','IngredientController@create');

//récupération de la saisie du formulaire des boissons//
Route::post('/ingredients','IngredientController@store');

///Mettre a jour///
//mettre a jour un ingrédient (saisie du formulaire)//
Route::get('/modif_ingredient/{code}','IngredientController@edit');

//mettre a jour un ingrédient (récuperation du formulaire)//
Route::post('/ingredients/{code}', 'IngredientController@update');

///Suppression///
//Supprimer une boisson existant//
Route::get('/ingredients/{code}','IngredientController@delete');

////Liste des ventes mode ORM///
Route::get('/ventes','VenteController@vente');


 ?>
