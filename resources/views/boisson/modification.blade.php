@extends('template.template')
@section('titre')
Modifier une boisson
@endsection
@section('content')
      <form method="post" action="/boissons/{{$boisson->CodeBoisson}}">
        {{csrf_field()}}
        {{method_field("PUT")}}
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