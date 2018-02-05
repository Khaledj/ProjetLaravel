
@extends('template.template')

@section('titre')
Liste des boissons par ordre alphabétique
@endsection

@section('content')
  <div class = "container">
  <div class="tableauBoisson ">
    <table class = "table table-hover table-bordered">
      <thead>
        <tr class="active">
          <th>NomBoisson</th>
        </tr>
            @foreach ($ordre as $nomboisson)
            <tr>
            <td><a href="/boisson_ordre/{{$nomboisson->CodeBoisson}}">{{$nomboisson->NomBoisson}} </a></td>
            @endforeach
        </tr>
      </thead>
    </table>
  </div>

    
@endsection