@extends('template.template')
@section('titre')
Ajouter un ingrédient
@endsection
@section('content')

      <form method="post" action="/ingredients">
        {{csrf_field()}}
        <input type="hidden" name="_token" value="{{ csrf_token() }}">


        CodeIngrédient:<br>
        <input type="text" name="codeingredient" placeholder="Ecrire un code">
        <br>
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