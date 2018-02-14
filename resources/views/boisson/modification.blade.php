@extends('template.template')
@section('titre')
Modifier une boisson : 
<h1>{{$boisson->nomBoisson}} <h1>
@endsection
@section('content')
      <form method="post" action="/boissons/{{$boisson->codeBoisson}}">
        {{csrf_field()}}
        {{method_field("PUT")}}
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        
        NomBoisson :<br>
        <b> <input type="text" name="boisson" placeholder="Ecrire une boisson"></b>
        <br>
        Prix : <br>
        <b><input type="text" name="prix" placeholder="Ecrire un prix"></b>
        <br>
       <input type="submit" value="submit">
   </form> 
  

@endsection