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

                <time class="publish-time" datetime="10:30">
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