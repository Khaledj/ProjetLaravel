@extends('template.template')

@section('titre')
Machine à Café
@endsection

@section('content')
  <div class = "container">
  <div class="tableauBoisson ">
    <table class = "table table-hover table-bordered">
      <thead>
        <tr class="active">
            @foreach ($boissons as $nomboisson)
            <td> {{$nomboisson->NomBoisson}}</td>
            @endforeach
         </tr>
      </thead>
    </table>
  </div>

  
    
@endsection
