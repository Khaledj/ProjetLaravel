@extends('template.template')
@section('titre')
 Détails de la boisson
@endsection
@section('content')
 @foreach ($detailboisson as $boisson)
  <p>Nom boisson: <td>{{$boisson->NomBoisson}}</td></p>
  <p>Prix: <tr>{{$boisson->Prix}}</tr>cts</p>
  @endforeach
   <a href="\modif"> <button class="button button3"> <div class="glyphicon glyphicon-pencil"></button></a>
@endsection