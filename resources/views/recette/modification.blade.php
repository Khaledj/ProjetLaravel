@extends('template.template')
@section('titre')
Modifier une recette
@endsection
@section('content')
      <form method="post" action="/recettes">
        {{csrf_field()}}
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        
        Quantité :<br>
        <input type="text" name="quantite" placeholder="Ecrire une quantite">
        <br>
       <input type="submit" value="submit">
   </form> 
    </div>

@endsection