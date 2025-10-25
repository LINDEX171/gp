<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tourest - Explore the World</title>

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style.css">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Comforter+Brush&family=Heebo:wght@400;500;600;700&display=swap"
    rel="stylesheet">

</head>

<body id="top">

  <!-- 
    - #HEADER
  -->
 
           
<header class="header" data-header>
  <div class="container flex items-center justify-between">

    {{-- Logo --}}
    <a href="#" class="logo">
      <h1 class="logo">Tourest</h1>
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
      <li><a href="#" class="navbar-link">Home</a></li>
      <li><a href="#" class="navbar-link">About Us</a></li>
      <li><a href="#" class="navbar-link">Tours</a></li>
      <li><a href="#" class="navbar-link">Destinations</a></li>
      <li><a href="#" class="navbar-link">Blog</a></li>
      <li><a href="#" class="navbar-link">Contact Us</a></li> 
 
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


  <main>
    <article>

      <!-- 
        - #HERO
      -->

      @include('frontend.hero')


      <!-- 
        - #DESTINATION
      -->

      @include('frontend.destination')

      <!-- 
        - #POPULAR
      -->
  


        @include('frontend.travel')


      <!-- 
        - #ABOUT
      -->
     @include('frontend.about')
     
      {{-- ------------------------------- contact ---------------------------- --}}

     @include('frontend.contact')




      <!-- 
        - #BLOG
      -->
      
    @include('frontend.blog')

     @include('frontend.voyagedispo')


    </article>
  </main>





  <!-- 
    - #FOOTER
  -->

@yield('footer')





  <!-- 
    - #GO TO TOP
  -->

  <a href="#top" class="go-top" data-go-top aria-label="Go To Top">
    <ion-icon name="chevron-up-outline"></ion-icon>
  </a>





  <!-- 
    - custom js link
  -->
  <script src="./assets/js/script.js"></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>