@extends('template.template')
@section('titre')
Affichage des boissons avec prix croissant
@endsection
@section('content')
<table>
	<tr>
@foreach($boisson as $liste)
 <td>{{$liste->NomBoisson}}</td> 
 <td>{{$liste->Prix}}</td>
</tr>
@endforeach
</table>
@endsection