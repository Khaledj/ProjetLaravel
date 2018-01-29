@extends('template.template')
@section('titre')
Affichage des boissons
@endsection
@section('content')
<div class="container">
	<div class ="tableauBoisson">
		<table class="table table-hover table-bordered "> 
			<tr class = "active">
				@foreach($type as $boiss)
				<td><a href="/boissons/{{$boiss->CodeBoisson}}">{{$boiss->NomBoisson}}</a></td> 
				@endforeach
			</tr>
		</table>
	</div>
</div>

@endsection

 

  
 