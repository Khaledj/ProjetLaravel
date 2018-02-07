@extends('template.template')
@section('titre')
Ajouter une recette
@endsection
@section('content')

      <form method="post" action="/recettes">
        {{csrf_field()}}
        <input type="hidden" name="_token" value="{{ csrf_token() }}">


        Code Boisson:<br>
        <input type="text" name="codeboisson" placeholder="Ecrire un code">
        <br>
      	Code Ingrédient :<br>
        <input type="text" name="codeingredient" placeholder="Ecrire un ingrédient">
        <br>
        Quantité : <br>
        <input type="text" name="quantite" placeholder="Ecrire un stock">
        <br>
        <input type="submit" value="submit">
   </form> 
    </div>

@endsection