@extends('template.template')
@section('titre')
Supprimer une boisson
@endsection
@section('content')
      <form method="post" action="/boissons/{{$boisson->CodeBoisson}}">
        {{csrf_field()}}
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
       <input type="submit" value="submit">
   </form> 
    </div>

@endsection