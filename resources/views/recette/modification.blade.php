@extends('template.template')
@section('titre')
Modifier une recette
@endsection
@section('content')
      <form method="post" action="/recettes/{{$recette->pivot->boissons_codeBoisson}}/{{$recette->pivot->ingredients_codeIngredient}}">
        {{csrf_field()}}
        {{method_field("PUT")}}
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        
        Quantité :<br>
        <b> <input type="text" name="quantite" placeholder="Ecrire une quantité"> </b>
        <br>
       <input type="submit" value="submit">
   </form> 
 

@endsection

