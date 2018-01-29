@extends('template.template')

@section('titre')
 Affichage des boissons et prix
@endsection

@section('content')
  <div class = "container">
  <div class="tableauBoisson ">
    <table class = "table table-hover table-bordered">
      <thead>
        <tr class="active">
          <th>NomBoisson</th>
          <th>Prix</th>
        </tr>
            @foreach ($boissons as $drinkName)
            <tr>
            <td><a href="/boisson/{{$drinkName->CodeBoisson}}">{{ $drinkName->NomBoisson}} </a></td>
        

            <td>{{$drinkName->Prix}}</td>
            @endforeach
        </tr>
      </thead>
    </table>
  </div>
<a href = "/ajout" > <button class="button button1">   <div class="glyphicon glyphicon-plus"></button></a>
  
    
@endsection
