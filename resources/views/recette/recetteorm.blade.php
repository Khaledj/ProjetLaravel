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
            </tr>

            <tr>
               @foreach ($boissons as $boisson)
                 $boisson->ingredients;

               
               @foreach($boisson->ingredients as $recette)
   
                 <tr>
                    <td>{{$recette->pivot->boissons_codeBoisson}}</td>
                    <td>{{$recette->pivot->ingredients_codeIngredient}}</td>
                    <td>{{$recette->pivot->quantite}}</td>
                 </tr>
                @endforeach
            </tr>
            @endforeach
        </thead>
    </table>
</div>
<a href = "/recettes/create" > <button type="button" class="btn btn-success"> Ajouter  </button></a>
@endsection

 