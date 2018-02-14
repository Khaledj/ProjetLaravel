@extends('template.template')
@section('titre')
Ajouter un ingrédient
@endsection
@section('content')

      <form method="post" action="/ingredients">
        {{csrf_field()}}
        <input type="hidden" name="_token" value="{{ csrf_token() }}">


        CodeIngrédient:<br>
        <b> <input type="text" name="codeingredient" placeholder="Ecrire un code"> </b>
        <br>
      	NomIngrédient :<br>
        <b> <input type="text" name="ingredient" placeholder="Ecrire un ingrédient"> </b>
        <br>
        Stock : <br>
        <b> <input type="text" name="stock" placeholder="Ecrire un stock"> </b> 
        <br>
        <input type="submit" value="submit">
   </form> 
    </div>

@endsection