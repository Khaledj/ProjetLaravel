@extends('template.template')
@section('titre')
  La pause s'impose !
  <br> <h2> Bienvenue {{ Auth::user()->name }} </h2>
@endsection
@section('content')
 <a  href="machine_a_cafe"><img class="imageCafe" alt="image tasse a café"  src="../img/imgcafe.jpg" /></a>
@endsection
