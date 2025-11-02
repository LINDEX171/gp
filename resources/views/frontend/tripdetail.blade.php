  <section class="section blog">
  <div class="container">
    <h2 class="h2 section-title">Détails du voyage</h2>

    <div class="blog-card">
      <figure class="card-banner">
        <img 
          src="{{ $voyage->departure_photo ? asset('storage/' . $voyage->departure_photo) : asset('assets/images/samagppays.jpg') }}" 
          width="740" height="518" loading="lazy"
          alt="Voyage de {{ $voyage->fullname }}" 
          class="img-cover">
      </figure>

      <div class="card-content">
        <h3>{{ $voyage->fullname }}</h3>
        <p><strong>Départ :</strong> {{ $voyage->departure }} ({{ $voyage->departure1 }})</p>
        <p><strong>Arrivée :</strong> {{ $voyage->arrival }} ({{ $voyage->arrival1 }})</p>
        <p><strong>Date départ :</strong> {{ \Carbon\Carbon::parse($voyage->departure_date)->format('d/m/Y') }}</p>
        <p><strong>Date arrivée :</strong> {{ \Carbon\Carbon::parse($voyage->arrival_date)->format('d/m/Y') }}</p>

        <hr>

        <p><strong>Email :</strong> {{ $voyage->email }}</p>
        <p><strong>Téléphone :</strong> {{ $voyage->phone }}</p>
        <p><strong>WhatsApp :</strong> 
          <a href="https://wa.me/{{ preg_replace('/\D/', '', $voyage->whatsapp) }}" target="_blank">
            {{ $voyage->whatsapp }}
          </a>
        </p>

        <hr>

        <p><strong>Kilos disponibles :</strong> {{ $voyage->weight }} kg</p>
        <p><strong>Prix / kg :</strong> {{ number_format($voyage->price,0,',',' ') }} FCFA</p>

        <p class="text-muted">
          <em>Posté le {{ \Carbon\Carbon::parse($voyage->created_at)->format('d/m/Y à H:i') }}</em>
        </p>

        {{-- <a href="{{ route('voyages.index') }}" class="btn btn-secondary mt-3">⬅ Retour</a> --}}
      </div>
    </div>
  </div>
</section>