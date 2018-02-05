@extends('template.template')
@section('titre')
 Détails de la boisson
@endsection
@section('content')
 @foreach ($detailboisson as $boisson)
  <p>Nom boisson: <td>{{$boisson->NomBoisson}}</td></p>
  <p>Prix: <tr>{{$boisson->Prix}}</tr>cts</p>
  @endforeach
@endsection