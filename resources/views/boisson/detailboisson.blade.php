@extends('template.template')
@section('titre')
 Détails de la boisson
@endsection
@section('content')
 @foreach ($detailboisson as $boisson)
  <p>Nom boisson: <td>{{$boisson->nomBoisson}}</td></p>
  <p>Prix: <tr>{{$boisson->prix}}</tr>cts</p>
  @endforeach
@endsection