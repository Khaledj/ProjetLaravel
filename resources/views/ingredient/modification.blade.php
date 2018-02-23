@extends('template.template')
@section('titre')
Modifier un ingrédient : 
<h1>{{$ingredient->nomIngredient}}</h1>
@endsection
@section('content')
      <form method="post" action="/ingredients/{{$ingredient->codeIngredient}}">
        {{csrf_field()}}
         {{method_field("PUT")}}
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        NomIngredient :<br>
        <b> <input type="text" name="ingredient" placeholder="Ecrire un ingrédient"> </b>
        <br>
        Stock : <br>
        <b> <input type="text" name="stock" placeholder="Ecrire un stock"> </b>
        <br>
       <input type="submit" value="submit">
   </form>
    </div>

@endsection
