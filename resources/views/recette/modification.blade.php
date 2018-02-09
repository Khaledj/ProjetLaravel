@extends('template.template')
@section('titre')
Modifier une recette
@endsection
@section('content')
{{-- <table>
	<tr>
		<th>Code Boisson</th>
		<th>code Ingredient</th>
		<th>Quantité</th>
	</tr>
@foreach ($recettes as $recette)
@if ($recette->Boisson_CodeBoisson === 'cal')
	<tr>
		<td>{{$recette->Boisson_CodeBoisson}}</td>
		<td>	{{$recette->Ingredients_CodeIngredient}}</td>
		<td>{{$recette->Quantite}}</td>
	</tr>
@endif
@endforeach
</table> --}}
      <form method="post" action="/recettes">
        {{csrf_field()}}
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        
        Quantité :<br>
        <b> <input type="text" name="quantite" placeholder="Ecrire une quantité"> </b>
        <br>
       <input type="submit" value="submit">
   </form> 
    </div>

@endsection