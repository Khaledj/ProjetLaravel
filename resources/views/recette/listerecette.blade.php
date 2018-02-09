@extends('template.template')
@section('titre')
  La liste des recettes 
@endsection
@section('content')
<div class = "container">
	<div class="tableauRecette ">
		<table class = "table table-hover table-bordered">	
			<tr class="active">
				<th><b>NomBoisson</b></th> 
				<th><b>Ingrédients</b></th>
				<th><b>Quantité</b></th>
				<th><b>Ingrédients</b></th>
				<th><b>Quantité</b></th>
				<th><b>Ingrédients</b></th>
				<th><b>Quantité</b></th>
			</tr>
		<tr>
			@foreach($recettes as $nomboissons=>$recettes)
			<td>{{ $nomboissons }}</td>
			@foreach($recettes as $ingredients=>$quantites)

			<td>{{$ingredients}}</td>
			<td>  {{$quantites}}</td>
			@endforeach
			</tr>
			@endforeach
		</table>
	</div> 
@endsection





