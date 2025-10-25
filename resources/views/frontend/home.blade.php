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

      <section class="section hero"
        style="background-image: url('./assets/images/hero-bg-bottom.png') url('./assets/images/hero-bg-top.png')">
        <div class="container">

          <img src="./assets/images/shape-1.png" width="61" height="61" alt="Vector Shape" class="shape shape-1">

          <img src="./assets/images/shape-2.png" width="56" height="74" alt="Vector Shape" class="shape shape-2">

          <img src="./assets/images/shape-3.png" width="57" height="72" alt="Vector Shape" class="shape shape-3">

          <div class="hero-content">

            <p class="section-subtitle">Explore Your Travel</p>

            <h2 class="hero-title">Trusted Travel Agency</h2>

            <p class="hero-text">
              I travel not to go anywhere, but to go. I travel for travel's sake the great affair is to move.
            </p>

            <div class="btn-group">
              <a href="#" class="btn btn-primary">Contact Us</a>

              <a href="#" class="btn btn-outline">Learn More</a>
            </div>

          </div>

          <figure class="hero-banner">
            <img src="./assets/images/hero-banner.png" width="686" height="812" loading="lazy" alt="hero banner"
              class="w-100">
          </figure>

        </div>
      </section>



      <!-- 
        - #DESTINATION
      -->

      <section class="section destination">
        <div class="container">

          <p class="section-subtitle">Destinations</p>

          <h2 class="h2 section-title">Choose Your Place</h2>

          <ul class="destination-list">

            <li class="w-50">
              <a href="#" class="destination-card">

                <figure class="card-banner">
                  <img src="./assets/images/destination-1.jpg" width="1140" height="1100" loading="lazy"
                    alt="Malé, Maldives" class="img-cover">
                </figure>

                <div class="card-content">
                  <p class="card-subtitle">Malé</p>

                  <h3 class="h3 card-title">Maldives</h3>
                </div>

              </a>
            </li>

            <li class="w-50">
              <a href="#" class="destination-card">

                <figure class="card-banner">
                  <img src="./assets/images/destination-2.jpg" width="1140" height="1100" loading="lazy"
                    alt="Bangkok, Thailand" class="img-cover">
                </figure>

                <div class="card-content">
                  <p class="card-subtitle">Bangkok</p>

                  <h3 class="h3 card-title">Thailand</h3>
                </div>

              </a>
            </li>

            <li>
              <a href="#" class="destination-card">

                <figure class="card-banner">
                  <img src="./assets/images/destination-3.jpg" width="1110" height="480" loading="lazy"
                    alt="Kuala Lumpur, Malaysia" class="img-cover">
                </figure>

                <div class="card-content">
                  <p class="card-subtitle">Kuala Lumpur</p>

                  <h3 class="h3 card-title">Malaysia</h3>
                </div>

              </a>
            </li>

            <li>
              <a href="#" class="destination-card">

                <figure class="card-banner">
                  <img src="./assets/images/destination-4.jpg" width="1110" height="480" loading="lazy"
                    alt="Kathmandu, Nepal" class="img-cover">
                </figure>

                <div class="card-content">
                  <p class="card-subtitle">Kathmandu</p>

                  <h3 class="h3 card-title">Nepal</h3>
                </div>

              </a>
            </li>

            <li>
              <a href="#" class="destination-card">

                <figure class="card-banner">
                  <img src="./assets/images/destination-5.jpg" width="1110" height="480" loading="lazy"
                    alt="Jakarta, Indonesia" class="img-cover">
                </figure>

                <div class="card-content">
                  <p class="card-subtitle">Jakarta</p>

                  <h3 class="h3 card-title">Indonesia</h3>
                </div>

              </a>
            </li>

          </ul>

        </div>
      </section>


      <!-- 
        - #POPULAR
      -->
  


        @include('frontend.travel')


      <!-- 
        - #ABOUT
      -->

      <section class="section about">
        <div class="container">

          <div class="about-content">

            <p class="section-subtitle">About Us</p>

            <h2 class="h2 section-title">Explore all tour of the world with us.</h2>

            <p class="about-text">
              Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or
              randomised words
              which don't look even slightly believable.
            </p>

            <ul class="about-list">

              <li class="about-item">

                <div class="about-item-icon">
                  <ion-icon name="compass"></ion-icon>
                </div>

                <div class="about-item-content">
                  <h3 class="h3 about-item-title">Tour guide</h3>

                  <p class="about-item-text">
                    Lorem Ipsum available, but the majority have suffered alteration in some.
                  </p>
                </div>

              </li>

              <li class="about-item">

                <div class="about-item-icon">
                  <ion-icon name="briefcase"></ion-icon>
                </div>

                <div class="about-item-content">
                  <h3 class="h3 about-item-title">Friendly price</h3>

                  <p class="about-item-text">
                    Lorem Ipsum available, but the majority have suffered alteration in some.
                  </p>
                </div>

              </li>

              <li class="about-item">

                <div class="about-item-icon">
                  <ion-icon name="umbrella"></ion-icon>
                </div>

                <div class="about-item-content">
                  <h3 class="h3 about-item-title">Reliable tour</h3>

                  <p class="about-item-text">
                    Lorem Ipsum available, but the majority have suffered alteration in some.
                  </p>
                </div>

              </li>

            </ul>

            <a href="#" class="btn btn-primary">Booking Now</a>

          </div>

          <figure class="about-banner">
            <img src="./assets/images/about-banner.png" width="756" height="842" loading="lazy" alt="" class="w-100">
          </figure>

        </div>
      </section>

      {{-- ------------------------------- contact ---------------------------- --}}

      <section class="section contact-form">
  <div class="container">
    <p class="section-subtitle">Contactez-nous</p>
    <h2 class="h2 section-title">Obtenir un devis</h2>

    <!-- Message de succès -->
    @if(session('success'))
      <div class="alert alert-success">
        {{ session('success') }}
      </div>
    @endif

    <!-- Affichage des erreurs -->
    @if($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <form action="{{ route('voyages.store') }}" method="post" class="form">
      @csrf

      <!-- Nom complet -->
      <div class="form-group">
        <label for="fullname">Nom complet</label>
        <input type="text" id="fullname" name="fullname" placeholder="Votre nom complet" value="{{ old('fullname') }}" required>
      </div>

      <!-- Téléphone -->
      <div class="form-group">
        <label for="phone">Téléphone</label>
        <input type="tel" id="phone" name="phone" placeholder="Votre numéro de téléphone" value="{{ old('phone') }}" required>
      </div>

      <!-- WhatsApp -->
      <div class="form-group">
        <label for="whatsapp">WhatsApp</label>
        <input type="tel" id="whatsapp" name="whatsapp" placeholder="Numéro WhatsApp" value="{{ old('whatsapp') }}" required>
      </div>

      <!-- Email -->
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Votre email" value="{{ old('email') }}" required>
      </div>

      <!-- Pays et ville de départ -->
      <div class="form-group">
        <label for="departure">Pays et ville de départ</label>
        <input type="text" id="departure" name="departure" placeholder="Ex : France, Paris" value="{{ old('departure') }}" required>
      </div>

      <!-- Pays et ville d’arrivée -->
      <div class="form-group">
        <label for="arrival">Pays et ville d’arrivée</label>
        <input type="text" id="arrival" name="arrival" placeholder="Ex : USA, New York" value="{{ old('arrival') }}" required>
      </div>

      <!-- Date départ et date arrivée -->
      <div class="form-group">
        <label for="departure-date">Date départ</label>
        <input type="date" id="departure-date" name="departure-date" value="{{ old('departure-date') }}" required>
      </div>

      <div class="form-group">
        <label for="arrival-date">Date arrivée</label>
        <input type="date" id="arrival-date" name="arrival-date" value="{{ old('arrival-date') }}" required>
      </div>

      <!-- Kilos disponibles -->
      <div class="form-group">
        <label for="weight">Kilos disponibles</label>
        <input type="number" id="weight" name="weight" placeholder="Ex : 10 kg" value="{{ old('weight') }}" required>
      </div>

      <!-- Prix par kilo -->
      <div class="form-group">
        <label for="price">Prix par kilo</label>
        <input type="number" id="price" name="price" placeholder="Ex : 5 € / kg" value="{{ old('price') }}" required>
      </div>

      <!-- Commentaire -->
      <div class="form-group">
        <label for="comment">Commentaire</label>
        <textarea id="comment" name="comment" rows="4" placeholder="Vos remarques">{{ old('comment') }}</textarea>
      </div>

      <!-- Bouton envoyer -->
      <button type="submit" class="btn btn-primary">Envoyer</button>
    </form>
  </div>
</section>




      <!-- 
        - #BLOG
      -->
      
      <section class="section blog">
        <div class="container">

          <p class="section-subtitle">From The Blog Post</p>

          <h2 class="h2 section-title">Latest News & Articles</h2>

          <ul class="blog-list">

            <li>
              <div class="blog-card">

                <figure class="card-banner">

                  <a href="#">
                    <img src="./assets/images/popular-1.jpg" width="740" height="518" loading="lazy"
                      alt="A good traveler has no fixed plans and is not intent on arriving." class="img-cover">
                  </a>

                  <span class="card-badge">
                    <ion-icon name="time-outline"></ion-icon>

                    <time datetime="12-04">04 Dec</time>
                  </span>

                </figure>

                <div class="card-content">

                  <div class="card-wrapper">

                    <div class="author-wrapper">
                      <figure class="author-avatar">
                        <img src="./assets/images/author-avatar.png" width="30" height="30" alt="Jony bristow">
                      </figure>

                      <div>
                        <a href="#" class="author-name">Jony bristow</a>

                        <p class="author-title">Admin</p>
                      </div>
                    </div>

                    <time class="publish-time" datetime="10:30">10:30 AM</time>

                  </div>

                  <h3 class="card-title">
                    <a href="#">
                      A good traveler has no fixed plans and is not intent on arriving.
                    </a>
                  </h3>

                  <a href="#" class="btn-link">
                    <span>Read More</span>

                    <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                  </a>

                </div>

              </div>
            </li>

            <li>
              <div class="blog-card">

                <figure class="card-banner">

                  <a href="#">
                    <img src="./assets/images/blog-2.jpg" width="740" height="518" loading="lazy"
                      alt="A good traveler has no fixed plans and is not intent on arriving." class="img-cover">
                  </a>

                  <span class="card-badge">
                    <ion-icon name="time-outline"></ion-icon>

                    <time datetime="12-04">04 Dec</time>
                  </span>

                </figure>

                <div class="card-content">

                  <div class="card-wrapper">

                    <div class="author-wrapper">
                      <figure class="author-avatar">
                        <img src="./assets/images/author-avatar.png" width="30" height="30" alt="Jony bristow">
                      </figure>

                      <div>
                        <a href="#" class="author-name">Jony bristow</a>

                        <p class="author-title">Admin</p>
                      </div>
                    </div>

                    <time class="publish-time" datetime="10:30">10:30 AM</time>

                  </div>

                  <h3 class="card-title">
                    <a href="#">
                      A good traveler has no fixed plans and is not intent on arriving.
                    </a>
                  </h3>

                  <a href="#" class="btn-link">
                    <span>Read More</span>

                    <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                  </a>

                </div>

              </div>
            </li>

            <li>
              <div class="blog-card">

                <figure class="card-banner">

                  <a href="#">
                    <img src="./assets/images/blog-3.jpg" width="740" height="518" loading="lazy"
                      alt="A good traveler has no fixed plans and is not intent on arriving." class="img-cover">
                  </a>

                  <span class="card-badge">
                    <ion-icon name="time-outline"></ion-icon>

                    <time datetime="12-04">04 Dec</time>
                  </span>

                </figure>

                <div class="card-content">

                  <div class="card-wrapper">

                    <div class="author-wrapper">
                      <figure class="author-avatar">
                        <img src="./assets/images/author-avatar.png" width="30" height="30" alt="Jony bristow">
                      </figure>

                      <div>
                        <a href="#" class="author-name">Jony bristow</a>

                        <p class="author-title">Admin</p>
                      </div>
                    </div>

                    <time class="publish-time" datetime="10:30">10:30 AM</time>

                  </div>

                  <h3 class="card-title">
                    <a href="#">
                      A good traveler has no fixed plans and is not intent on arriving.
                    </a>
                  </h3>

                  <a href="#" class="btn-link">
                    <span>Read More</span>

                    <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                  </a>

                </div>

              </div>
            </li>

          </ul>

        </div>
      </section>

    <section class="section blog">
  <div class="container">

    <p class="section-subtitle">Voyages validés</p>
    <h2 class="h2 section-title">Tous les voyages disponibles</h2>

    <ul class="blog-list">
      @forelse($voyages as $voyage)
        <li>
          <div class="blog-card">
            <figure class="card-banner">
              <a href="#">
                <img 
                  src="{{ asset('assets/images/popular-1.jpg') }}" 
                  width="740" height="518" loading="lazy"
                  alt="Voyage de {{ $voyage->fullname }}" 
                  class="img-cover">
              </a>

              <span class="card-badge">
                <ion-icon name="time-outline"></ion-icon>
                <time datetime="{{ $voyage->departure_date }}">
                  {{ \Carbon\Carbon::parse($voyage->departure_date)->format('d M Y') }}
                </time>
              </span>
            </figure>

            <div class="card-content">
              <div class="card-wrapper">
                <div class="author-wrapper">
                  <figure class="author-avatar">
                    <img src="{{ asset('assets/images/author-avatar.png') }}" width="30" height="30" alt="Auteur">
                  </figure>
                  <div>
                    <a href="#" class="author-name">{{ $voyage->fullname }}</a>
                    <p class="author-title">{{ $voyage->email }}</p>
                  </div>
                </div>

                <time class="publish-time">
                  {{ \Carbon\Carbon::parse($voyage->created_at)->format('H:i') }}
                </time>
              </div>

              <h3 class="card-title">
                <a href="#">
                  {{ $voyage->departure }} → {{ $voyage->arrival }}
                </a>
              </h3>

              <p class="text-muted">
                <strong>{{ $voyage->weight }} kg</strong> disponibles à 
                <strong>{{ number_format($voyage->price, 2) }} € / kg</strong>
              </p>

              <a href="#" class="btn-link">
                <span>Voir détails</span>
                <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
              </a>
            </div>
          </div>
        </li>
      @empty
        <p class="text-center">Aucun voyage validé pour le moment.</p>
      @endforelse
    </ul>

  </div>
</section>



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