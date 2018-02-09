@extends('template.template')
@section('titre')
Modifier une boisson : 
<h1>{{$boisson->NomBoisson}} <h1>
@endsection
@section('content')
      <form method="post" action="boissons/{{$boisson->CodeBoisson}}">
        {{csrf_field()}}
        {{method_field("PUT")}}
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        
        Boisson :<br>
        <b> <input type="text" name="boisson" placeholder={{$boisson->CodeBoisson}}></b>
        <br>
        Prix : <br>
        <b><input type="text" name="prix" placeholder={{$boisson->Prix}}></b>
        <br>
       <input type="submit" value="submit">
   </form> 
  

@endsection