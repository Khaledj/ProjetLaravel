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
            @foreach ($boissons as $boisson)
            <td> {{$boisson->nomBoisson}}</td>
            @endforeach
         </tr>
      </thead>
    </table>
  </div>
</div>
<h1> Choississez votre boisson </h1>
 @if (Route::has('login'))
    @auth
      <form method="post" action="{{ route('machine')}}">
        {{csrf_field()}}
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        Boisson:
        <b> <input type="text" name="boisson" placeholder="Ecrire une boisson"> </b>
        Nombre de sucre :
       <b> <input type="text" name="sucre" placeholder="Nombre de sucre"> </b>
        <input type="submit" value="submit">
   </form> 


                    
   @else
    <form method="post" action="{{ route('machine')}}">
        {{csrf_field()}}
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        Boisson:
        <b> <input type="text" name="boisson" placeholder="Ecrire une boisson"> </b>
        Nombre de sucre :
       <b> <input type="text" name="sucre" placeholder="Ecrire le nombre de sucre"> </b>
        <input type="submit" value="submit">
   </form> 
    @endauth
    @endif
@endsection

                
          