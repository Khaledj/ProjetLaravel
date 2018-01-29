@extends('template.template')
      
@section('titre')
    Détail de la boisson
@endsection

@section('content')
    <h3>Boisson : {{$details[0]->nomboisson}}</h3>
    <h3>Prix : {{$details[0]->prixboisson}} centimes d'euros</h3>
@endsection