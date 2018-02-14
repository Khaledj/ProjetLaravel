
    <div class="menuTemplate">
  <div class="links">
    @if (Route::has('login'))
    @auth
  
    <a href="{{ route('index')}}">Home </a>
    <a href="{{ route('machine')}}"> Machine à café</a>
    <a href="{{ route('boisson')}}">Liste des boissons </a>
    <a href="{{ route('recette')}}">Liste des Recettes</a>
    <a href="{{ route('ingredient')}}">Liste des Ingrédients</a>
    <a href="{{route ('vente')}}">Liste des Ventes</a>
    <a href="{{route('monnaie')}}">Gestion Monnaie</a>
      <a href="{{ url('/home') }}"> {{ Auth::user()->name }} </a>
    @else
     <a href="{{ route('index')}}">Home </a>
     <a href="{{ route('machine')}}"> Machine a café</a>
     <a href="{{ route('login') }}">Login</a>
     <a href="{{ route('register') }}">Register</a>
    @endauth
   
<form id="logout-form "  action="{{ route('logout') }}" method="POST" style="display: none;">
    {{ csrf_field() }}
</form>
@endif
</div>
</div>


                        