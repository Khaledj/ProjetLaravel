@extends('template.template')

@section('image')
    <a href="/ventes"><img class="imageCompte" alt="image de comptes"  src="../img/faire-ses-comptes.jpg" /></a>
@endsection

@section('titre')
    Liste des Ventes
@endsection

@section('content')
    <div class="container">
        <table class="tableauVente">
              <table class = "table table-hover table-bordered">
            <thead>
                <tr class="active">
                    <th>NumeroVente</th>
                    <th>Date</th>
                    <th>NombreSucre</th>
                    <th>Boisson_CodeBoisson</th>
                    <th>Heure</th>

                </tr>
                    @foreach ($ventes as $vente)
                    <tr>
                      
                        <td>{{ $vente->numeroVente}}</td>
                        <td>{{ $vente->date}}</td>
                        <td>{{ $vente->nombreSucre}}</td>
                        <td>{{ $vente->boissons_codeBoisson}}</td>
                        <td>{{ $vente->heure}}</td>

                    @endforeach
                </tr>
            </thead>
        </table>
    <a href = "/machine_a_cafe" > <button type="button" class="btn btn-success"> Ajouter  </button></a>
@endsection

  
   
        
      
      
            
    
        

        
            
          
        
  