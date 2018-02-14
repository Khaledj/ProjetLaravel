@extends('template.template')
@section('titre')
Ajouter une boisson
@endsection
@section('content')

      <form method="post" action="/boissons">
        {{csrf_field()}}
        <input type="hidden" name="_token" value="{{ csrf_token() }}">


        CodeBoisson:<br>
        <b> <input type="text" name="codeboisson" placeholder="Ecrire un code"> </b>
        <br>
      	NomBoisson :<br>
       <b> <input type="text" name="boisson" placeholder="Ecrire une boisson"> </b>
       <br>
       Prix : <br>
       <b> <input type="text" name="prix" placeholder="Ecrire un prix"> </b>
       <br>
        <input type="submit" value="submit">
   </form> 
    

@endsection