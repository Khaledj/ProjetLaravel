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
                <th>NomBoisson</th>
                <th>boissons_codeBoisson</th>
                <th>NomIngredient</th>
                <th>ingredients_codeIngredient</th>
                <th>Quantité</th> 
                <th>Modifier</th>
                <th>Supprimer</th>
            </tr>

            <tr>
               @foreach ($boissons as $boisson)
                @foreach($boisson->ingredients as $recette)
                
                 <tr>
                    <td>{{$boisson->nomBoisson}}</td>
                    <td>{{$recette->pivot->boissons_codeBoisson}}</td>
                    <td>{{$recette->nomIngredient}}</td>
                    <td>{{$recette->pivot->ingredients_codeIngredient}}</td>
                    <td>{{$recette->pivot->quantite}}</td>
                    <td><a href = "/recettes/{{$recette->pivot->boissons_codeBoisson}}/{{$recette->pivot->ingredients_codeIngredient}}/edit" > <button type="button" class="btn btn-primary"> Modifier </button></a></td>
                   
                 <td> <form method="post" action="/recettes/{{$recette->pivot->boissons_codeBoisson}}/{{$recette->pivot->ingredients_codeIngredient}}">
                        {{csrf_field()}}
                        {{method_field("DELETE")}}
                        <input type="submit" class="btn btn-danger" value="Supprimer"></td>
                        </form>
                @endforeach
            </tr>
            @endforeach
        </thead>
    </table>
</div>
<a href = "/recettes/create" > <button type="button" class="btn btn-success"> Ajouter  </button></a>
@endsection

 