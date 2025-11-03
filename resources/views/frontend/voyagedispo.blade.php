<section class="section blog">
  <div class="container">

    <p class="section-subtitle">Voyages validés</p>
    <h2 class="h2 section-title">Tous les voyages disponibles</h2>

    <ul class="blog-list">
      @forelse($voyages as $voyage)
        <li>
          <div class="blog-card">

            <!-- Image -->
            <figure class="card-banner">
              <img 
                src="{{ asset('assets/images/samagppays.jpg') }}" 
                width="740" height="518" loading="lazy"
                alt="Voyage de {{ $voyage->fullname }}" 
                class="img-cover">

              <!-- Dates -->
              <span class="card-badge">
                <ion-icon name="airplane-outline" style="transform: rotate(-45deg);"></ion-icon>
                <time datetime="{{ $voyage->departure_date }}">
                  {{ \Carbon\Carbon::parse($voyage->departure_date)->format('d/m/Y') }}
                </time>
              </span>

              <span class="card-badge1">
                <ion-icon name="airplane-outline" style="transform: rotate(135deg);"></ion-icon>
                <time datetime="{{ $voyage->arrival_date }}">
                  {{ \Carbon\Carbon::parse($voyage->arrival_date)->format('d/m/Y') }}
                </time>
              </span>
            </figure>

            <!-- Contenu -->
            <div class="card-content">


              <!-- Photos côte à côte -->
<div style="display: flex; gap: 20px; margin-bottom: 20px;   flex-wrap: wrap;">
    <!-- Photo départ -->
    <div style="flex: 1; min-width: 150px;">
        @if($voyage->departure_photo)
            <img 
                src="{{ asset('storage/' . $voyage->departure_photo) }}" 
                alt="Départ de {{ $voyage->fullname }}" 
                style="width: 50%; height: auto; border-radius: 8px;">
        @else
            <img 
                src="{{ asset('assets/images/samagppays.jpg') }}" 
                alt="Départ de {{ $voyage->fullname }}" 
                style="width: 50%; height: auto; border-radius: 8px;">
        @endif
        {{-- <p style="text-align: center; margin-top: 5px; font-weight: bold;">{{ $voyage->departure }} ({{ $voyage->departure1 }})</p> --}}
    </div>

    

    <!-- Photo arrivée -->
    <div style="flex: 1; min-width: 150px;">
        @if($voyage->arrival_photo)
            <img 
                src="{{ asset('storage/' . $voyage->arrival_photo) }}" 
                alt="Arrivée de {{ $voyage->fullname }}" 
                style="width: 50%; height: auto; border-radius: 8px;">
        @else
            <img 
                src="{{ asset('assets/images/samagppays.jpg') }}" 
                alt="Arrivée de {{ $voyage->fullname }}" 
                style="width: 50%; height: auto; border-radius: 8px;">
        @endif
    </div>
</div>


               <div style="display: flex; align-items: center; justify-content: center; gap: 10px; margin: 10px 0; font-weight: bold; font-size: 2rem;">
  <span>{{ $voyage->departure }} ({{ $voyage->departure1 }})</span>
  <ion-icon name="airplane-outline" style="font-size: 36px; color: #007bff; transform: rotate(-45deg);"></ion-icon>
  <span>{{ $voyage->arrival }} ({{ $voyage->arrival1 }})</span>
</div>


              <!-- Nom + trajet -->
              <div class="author-wrapper">
                <figure class="author-avatar">
                  <ion-icon name="person-outline" style="color:#607d8b;font-size:24px;"></ion-icon>
                </figure>
                <div>
                  <p class="author-title">Voyageur</p>
                  <h3 class="author-name">{{ $voyage->fullname }}</h3>
                </div>
              </div>

              <!-- Départ -->
              <div class="author-wrapper">
                <figure class="author-avatar">
                  <ion-icon name="airplane-outline" style="color:#007bff;font-size:24px;"></ion-icon>
                </figure>
                <div>
                  <p class="author-title">Date départ</p>
                  <h3 class="author-name">{{ \Carbon\Carbon::parse($voyage->departure_date)->format('d/m/Y') }}</h3>
                </div>
              </div>

              <!-- Arrivée -->
              <div class="author-wrapper">
                <figure class="author-avatar">
                  <ion-icon name="airplane-outline" style="color:#28a745;font-size:24px;"></ion-icon>
                </figure>
                <div>
                  <p class="author-title">Date arrivée</p>
                  <h3 class="author-name">{{ \Carbon\Carbon::parse($voyage->arrival_date)->format('d/m/Y') }}</h3>
                </div>
              </div>

              <!-- Email -->
              <div class="author-wrapper">
                <figure class="author-avatar">
                  <ion-icon name="mail-outline" style="color:#ff5722;font-size:24px;"></ion-icon>
                </figure>
                <div>
                  <p class="author-title">Email</p>
                  <h3 class="author-name">{{ $voyage->email }}</h3>
                </div>
              </div>

              <!-- Téléphone -->
              <div class="author-wrapper">
                <figure class="author-avatar">
                  <ion-icon name="call-outline" style="color:#795548;font-size:24px;"></ion-icon>
                </figure>
                <div>
                  <p class="author-title">Téléphone</p>
                  <h3 class="author-name">{{ $voyage->phone }}</h3>
                </div>
              </div>

              <!-- WhatsApp -->
              <div class="author-wrapper">
                <figure class="author-avatar">
                  <ion-icon name="logo-whatsapp" style="color:#25D366;font-size:24px;"></ion-icon>
                </figure>
                <div>
                  <p class="author-title">WhatsApp</p>
                  <h3 class="author-name">
                    <a href="https://wa.me/{{ preg_replace('/\D/', '', $voyage->whatsapp) }}" target="_blank" style="color:#25D366;text-decoration:none;">
                      {{ $voyage->whatsapp }}
                    </a>
                  </h3>
                </div>
              </div>

              <!-- Kilos disponibles -->
              <div class="author-wrapper">
                <figure class="author-avatar">
                  <ion-icon name="cube-outline" style="color:#607d8b;font-size:24px;"></ion-icon>
                </figure>
                <div>
                  <p class="author-title">Kilos disponibles</p>
                  <h3 class="author-name">{{ $voyage->weight }} kg</h3>
                </div>
              </div>

              <!-- Prix par kilo -->
              <div class="author-wrapper">
                <figure class="author-avatar">
                  <ion-icon name="cash-outline" style="color:#ffc107;font-size:24px;"></ion-icon>
                </figure>
                <div>
                  <p class="author-title">Prix / kg</p>
                  <h3 class="author-name">{{ number_format($voyage->price,0,',',' ') }} FCFA</h3>
                </div>
              </div>
              


              <div class="author-wrapper">
    <figure class="author-avatar">
        <ion-icon name="chatbubble-ellipses-outline" style="color:#607d8b;font-size:24px;"></ion-icon>
    </figure>
    <div>
        <p class="author-title">Commentaire</p>
        <h3 class="author-name">{{ $voyage->comment }}</h3>
    </div>
</div>



{{-- Dernier jour de dépôt --}}
<div class="author-wrapper">
    <figure class="author-avatar">
        <ion-icon name="calendar-outline" style="color:#dc3545;font-size:24px;"></ion-icon>
    </figure>
    <div>
        <p class="author-title" style="color:red;">Dernier jour de dépôt</p>
        <h3 class="author-name" style="color:red;">
            {{ \Carbon\Carbon::parse($voyage->last_deposit_day)->format('d/m/Y') }}
        </h3>
    </div>
</div>

             
{{-- 
              <p class="text-muted ">
                <em>Posté le {{ \Carbon\Carbon::parse($voyage->created_at)->format('d/m/Y à H:i') }}</em>
              </p> --}}


               {{-- <a href="#" class="btn-link">
                    <span>Read More</span>

                    <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                  </a> --}}

            </div> <!-- end card-content -->

          </div>
        </li>
      @empty
        <p class="text-center">Aucun voyage validé pour le moment.</p>
      @endforelse
    </ul>

  </div>
</section>
