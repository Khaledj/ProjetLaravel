@extends('template.template')
@section('titre')
Modifier un ingrédient
@endsection
@section('content')
      <form method="post" action="/ingredients/{{$ingredient->CodeIngredient}}">
        {{csrf_field()}}
         {{method_field("PUT")}}
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        
        Ingrédient :<br>
        <input type="text" name="ingredient" placeholder="Ecrire un ingrédient">
        <br>
        Stock : <br>
        <input type="text" name="stock" placeholder="Ecrire un stock">
        <br>
       <input type="submit" value="submit">
   </form> 
    </div>

@endsection
