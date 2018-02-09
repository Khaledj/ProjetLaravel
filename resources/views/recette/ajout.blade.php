@extends('template.template')
@section('titre')
Ajouter une recette
@endsection
@section('content')

      <form method="post" action="/recettes">
        {{csrf_field()}}
        <input type="hidden" name="_token" value="{{ csrf_token() }}">


        Code Boisson:<br>
         <b> <input type="text" name="codeboisson" placeholder="Ecrire un code"> </b> 
        <br>

      	Code Ingrédient :<br>
        <b> <input type="text" name="codeingredient" placeholder="Ecrire un ingrédient"> </b>
        <br>

        Quantité : <br>
        <b> <input type="text" name="quantite" placeholder="Ecrire un stock"> </b>
        <br>

        <input type="submit" value="submit">
   </form> 
    </div>

@endsection