@extends('template.template')
@section('titre')
  Affichage des boissons avec prix
@endsection
@section('content')
 @foreach ($detailBoisson as $drinkName)
  <p>Nom boisson: <td>{{$drinkName->NomBoisson}}</td></p>
  <p>Prix: <tr>{{$drinkName->Prix}}</tr>cts</p>
  @endforeach
   <a href="\modif"> <button class="button button3"> <div class="glyphicon glyphicon-pencil"></button></a>
@endsection