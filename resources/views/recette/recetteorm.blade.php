@extends('template.template')

@section('titre')
    Liste des recettes
@endsection

@section('content')
    <div class="container">
        <table class="tableauRecette">
              <table class = "table table-hover table-bordered">
            <thead>
                <tr class="active">
                    <th>Boisson_CodeBoisson</th>
                    <th>Ingredients_CodeIngredient</th>
                    <th>Quantiter</th>
                </tr>
                    @foreach ($recette as $valeur)
                    <tr>
                        <td>{{ $valeur->Boisson_CodeBoisson}}</td>
                        <td>{{ $valeur->Ingredients_CodeIngredient}}</td>
                        <td>{{ $valeur->Quantite}}</td>
                            <td><a href = "/modif_recette" > <button type="button" class="btn btn-warning"> Modifier </button></a></td>
                    @endforeach
                </tr>
            </thead>
        </table>
    </div>
     <a href = "/ajout_recette" > <button type="button" class="btn btn-success"> Ajouter  </button></a>
@endsection