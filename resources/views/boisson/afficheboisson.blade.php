@extends('template.template')

@section('titre')
  Afficher la liste de boisson avec prix
@endsection

@section('content')
@foreach ($detail as $afficher)
  <p>Nom boisson: <td>{{$afficher->nomBoisson}}</td></p>
  <p>Prix: <tr>{{$afficher->prix}}</tr></p>
  @endforeach
@endsection