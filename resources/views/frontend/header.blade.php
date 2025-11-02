<header class="header" data-header>
  <div class="container flex items-center justify-between">

    {{-- Logo --}}
    <a href="{{ url('/') }}" class="logo">
      <img src="assets/images/smagp.png" width="90" height="90" alt="">
      
      {{-- <h1 class="logo">Tourest</h1> --}}
    </a>

    {{-- <a href="#" class="logo">
     <img src="assets/images/logod.png" width="110px" height="110px" alt="">
    </a> --}}

 <button class="nav-toggle-btn" data-nav-toggle-btn aria-label="Toggle Menu">
        <ion-icon name="menu-outline" class="open"></ion-icon>
        <ion-icon name="close-outline" class="close"></ion-icon>
      </button>
 <nav class="navbar">

    {{-- Menu de navigation --}}
       <ul class="navbar-list flex items-start gap-6">
      <li><a href="{{ url('/') }}" class="navbar-link">Accueil</a></li>
      <li><a href="{{ url('/gp') }}" class="navbar-link">Devenir GP</a></li>
      <li><a href="{{ url('/voyagedispo') }}" class="navbar-link">Voyages Disponibles</a></li>
      {{-- <li><a href="{{ url('/') }}" class="navbar-link">Contactez nous</a></li>  --}}
 
    </ul>
    <ul class="navbar-list flex items-start gap-4">
      {{-- <li><a href="#" class="navbar-link">Home</a></li>
      <li><a href="#" class="navbar-link">About Us</a></li>
      <li><a href="#" class="navbar-link">Tours</a></li>
      <li><a href="#" class="navbar-link">Destinations</a></li>
      <li><a href="#" class="navbar-link">Blog</a></li>
      <li><a href="#" class="navbar-link">Contact Us</a></li> --}}
       @if (Route::has('login'))
        @auth
        <li><a href="{{ url('/dashboard') }}" class="btn btn-secondary ">Dashboard</a></li>
        @else
      <li> <a href="{{ route('login') }}" class="btn btn-secondary">Log in</a></li>
      @if (Route::has('register'))
           <li><a href="{{ route('register') }}" class="btn btn-secondary">Register</a></li> 
          @endif
        @endauth
      @endif
    </ul>
  </nav>
    {{-- Boutons alignés horizontalement à droite --}}
    {{-- <div class=" items-center gap-2">

      @if (Route::has('login'))
        @auth
          <a href="{{ url('/dashboard') }}" class="btn btn-secondary ">Dashboard</a>
        @else
          <a href="{{ route('login') }}" class="btn btn-secondary">Log in</a>

          @if (Route::has('register'))
            <a href="{{ route('register') }}" class="btn btn-secondary">Register</a>
          @endif
        @endauth
      @endif
    </div> --}}

  </div>
</header>
