@extends('template.template')
@section('titre')
Modifier un ingrédient : 
<h1>{{$ingredient->NomIngredient}}</h1>
@endsection
@section('content')
      <form method="post" action="/ingredients/{{$ingredient->CodeIngredient}}">
        {{csrf_field()}}
         {{method_field("PUT")}}
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        
        Boisson :<br>
        <b> <input type="text" name="ingredient" placeholder="Ecrire un ingrédient"> </b>
        <br>
        Prix : <br>
        <b> <input type="text" name="stock" placeholder="Ecrire un stock"> </b>
        <br>
       <input type="submit" value="submit">
   </form> 
    </div>

@endsection