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
                    @foreach ($recettes as $recette)
                    <tr>
                        <td>{{ $recette->Boisson_CodeBoisson}}</td>
                        <td>{{ $recette->Ingredients_CodeIngredient}}</td>
                        <td>{{ $recette->Quantiter}}</td>
                            
                    @endforeach
                </tr>
            </thead>
        </table>
    </div>
     <a href = "/recettes/create" > <button type="button" class="btn btn-success"> Ajouter  </button></a>
@endsection
