@extends('template.template')
@section('titre')
Affichage des boissons avec prix croissant
@endsection
@section('content')
<table class = "table table-hover table-bordered">
	<thead>
	<tr class="active">
		  <th>NomBoisson</th>
          <th>Prix</th>
    </tr>
@foreach($boissons as $liste)
<tr>
 <td>{{$liste->nomBoisson}}</td> 
 <td>{{$liste->prix}}</td>
</tr>
@endforeach
</tr>
</thead>
</table>
@endsection


    
        
         

        
          
            
        
          