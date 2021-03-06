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
                    <th> Modifier</th>
                    <th> Supprimer</th>
                </tr>
                    @foreach ($ingredients as $ingredient)
                    <tr>
                        <td>{{ $ingredient->codeIngredient}}</td>
                        <td>{{ $ingredient->nomIngredient}}</td>
                        <td>{{ $ingredient->stockIngredient}}</td>
                        <td><a href = "/ingredients/{{$ingredient->codeIngredient}}/edit" > <button type="button" class="btn btn-primary"> Modifier </button></a></td>
                        <td> <form method="post" action="/ingredients/{{$ingredient->codeIngredient}}">
                        {{csrf_field()}}
                        {{method_field("DELETE")}}
                        <input type="submit" class="btn btn-danger" value="Supprimer"></td>
                        </form>
                    @endforeach
                </tr>
            </thead>
        </table>
    </div>
    <a href = "/ingredients/create" > <button type="button" class="btn btn-success"> Ajouter  </button></a>
@endsection

  
   