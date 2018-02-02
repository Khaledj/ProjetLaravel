@extends('template.template')

@section('titre')
  Afficher la liste de boisson avec prix
@endsection

@section('content')
@foreach ($detail as $afficher)
  <p>Nom boisson: <td>{{$afficher->NomBoisson}}</td></p>
  <p>Prix: <tr>{{$afficher->Prix}}</tr>cts</p>
  @endforeach
@endsection