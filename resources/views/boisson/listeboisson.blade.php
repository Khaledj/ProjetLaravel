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
            <td><a href = "/modif/{{$nomboisson->CodeBoisson}}" > <button type="button" class="btn btn-warning"> Modifier </button></a></td>
            <td> <a href ="/supp/{{$nomboisson->CodeBoisson}}"> <button type="button" class="btn btn-danger"> Supprimer </button></a></td>
            @endforeach
        </tr>
      </thead>
    </table>
  </div>
<a href = "/ajout" > <button type="button" class="btn btn-success"> Ajouter  </button></a>
<a href = "/boisson_ordre" > <button type="button" class="btn btn-primary"> Tri Boisson </button></a>
<a href = "/prix_croissant" > <button type="button" class="btn btn-info"> Tri Prix Croissant </button></a>


  
    
@endsection
