@extends('template.template')
@section('titre')
Ajouter une boisson
@endsection
@section('content')

      <form method="post" action="/modif">
        {{csrf_field()}}
        <input type="hidden" name="_token" value="{{ csrf_token() }}">


       
      	Boisson :<br>
       <input type="text" name="boisson" placeholder="Ecrire une boisson">
       <br>
       Prix : <br>
       <input type="text" name="prix" placeholder="Ecrire un prix">
       <br>
       <input type="submit" value="submit">
   </form> 
    </div>

@endsection