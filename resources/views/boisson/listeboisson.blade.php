@extends('template.template')

@section('titre')
Liste des boissons
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
            @foreach ($boissons as $nomboisson)
            <tr>
            <td><a href="/boisson/{{$nomboisson->CodeBoisson}}">{{ $nomboisson->NomBoisson}} </a></td>
        

            <td>{{$nomboisson->Prix}}</td>
            @endforeach
        </tr>
      </thead>
    </table>
  </div>
<a href = "/ajout" > <button class="button button1">   <div class="glyphicon glyphicon-plus"></button></a>
  
    
@endsection
