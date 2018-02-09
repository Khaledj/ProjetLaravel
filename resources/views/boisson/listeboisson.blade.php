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
          <th>Modifier</th>
          <th>Supprimer</th>
        </tr>
            @foreach ($boissons as $boisson)
            <tr>
            <td><a href="/boisson/{{$boisson->CodeBoisson}}">{{ $boisson->NomBoisson}} </a></td>
            <td>{{$boisson->Prix}}</td>
            <td><a href = "/boissons/{{$boisson->CodeBoisson}}/edit" > <button type="button" class="btn btn-primary"> Modifier </button></a></td>
            <td> <form method="post" action="/boissons/{{$boisson->CodeBoisson}}">
               {{csrf_field()}}
               {{method_field("DELETE")}}
             <input type="submit" class="btn btn-danger" value="Supprimer"></td>
          </form>
            @endforeach
        </tr>
      </thead>
    </table>
  </div>
<a href = "/boissons/create" > <button type="button" class="btn btn-success"> Ajouter  </button></a>
<a href = "/boissons_ordre" > <button type="button" class="btn btn-primary"> Tri Boisson </button></a>
<a href = "/prix_croissant" > <button type="button" class="btn btn-info"> Tri Prix Croissant </button></a>  
@endsection
