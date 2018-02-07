@extends('template.template')

@section('titre')
    Liste des ingrédients
@endsection

@section('content')
    <div class="container">
        <table class="tableauIngredient">
              <table class = "table table-hover table-bordered">
            <thead>
                <tr class="active">
                    <th>CodeIngredient</th>
                    <th>NomIngredient</th>
                    <th>StockIngredient</th>
                    <th>Bouton Modifier</th>
                    <th>Bouton Supprimer</th>
                </tr>
                    @foreach ($ingredient as $valingredient)
                    <tr>
                        <td>{{ $valingredient->CodeIngredient}}</td>
                        <td>{{ $valingredient->NomIngredient}}</td>
                        <td>{{ $valingredient->StockIngredient}}</td>
                        <td><a href = "/modif_ingredient/{{$valingredient->CodeIngredient}}" > <button type="button" class="btn btn-warning"> Modifier </button></a></td>
                        <td> <a href ="/ingredients/{{$valingredient->CodeIngredient}}"> <button type="button" class="btn btn-danger"> Supprimer </button></a></td>
                    @endforeach
                </tr>
            </thead>
        </table>
    </div>
    <a href = "/ajout_ingredient" > <button type="button" class="btn btn-success"> Ajouter  </button></a>
@endsection

  
   