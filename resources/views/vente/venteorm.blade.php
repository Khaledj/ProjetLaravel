@extends('template.template')

@section('image')
    <a href="ventes"><img class="imageCompte" alt="image de comptes"  src="../img/faire-ses-comptes.jpg" /></a>
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
                    @foreach ($vente as $valeur)
                    <tr>
                        <td>{{ $valeur->NumeroVente}}</td>
                        <td>{{ $valeur->Date}}</td>
                        <td>{{ $valeur->NombreSucre}}</td>
                        <td>{{ $valeur->Boisson_CodeBoisson}}</td>
                        <td>{{ $valeur->Heure}}</td>

                    @endforeach
                </tr>
            </thead>
        </table>
    </div>
@endsection

  
   
        
      
      
            
    
        

        
            
          
        
  