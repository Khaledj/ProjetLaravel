@extends('template.template')
@section('titre')
Modifier une recette
@endsection
@section('content')
      <form method="post" action="/recettes/{{$recette->Boisson_CodeBoisson}}/{{$recette->Ingredients_CodeIngredient}}">
        {{csrf_field()}}
        {{method_field("PUT")}}
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        
        Quantité :<br>
        <b> <input type="number" name="quantite" placeholder="Ecrire une quantité"> </b>
        <br>
       <input type="submit" value="submit">
   </form> 
 

@endsection

