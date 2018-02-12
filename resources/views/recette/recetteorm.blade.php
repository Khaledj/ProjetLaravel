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
                    <th>Quantité</th>
                     <th>Modifier</th> 
                </tr>
                    @foreach ($recettes as $recette)
                    <tr>
                        <td>{{ $recette->Boisson_CodeBoisson}}</td>
                        <td>{{ $recette->Ingredients_CodeIngredient}}</td>
                        <td>{{ $recette->Quantite}}</td>
                         <td><a href = "/recettes/{{$recette->Boisson_CodeBoisson}}/{{$recette->Ingredients_CodeIngredient}}/edit" > <button type="button" class="btn btn-primary"> Modifier  </button></a></td> 
                            
                    @endforeach
                </tr>
            </thead>
        </table>
    </div>
     <a href = "/recettes/create" > <button type="button" class="btn btn-success"> Ajouter  </button></a>
@endsection