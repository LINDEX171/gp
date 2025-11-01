 <section class="section contact-form">
  <div class="container">
    <p class="section-subtitle">Vous voulez devenir GP? </p>
    <h2 class="h2 section-title">Demande pour Devenir GP</h2>

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

      <!-- Pays et  -->
      <div class="form-group">
        <label for="departure">Pays départ</label>
        <input type="text" id="departure" name="departure" placeholder="Ex : France" value="{{ old('departure') }}" required>
      </div>
       <!-- ville d’arrivée -->
       <div class="form-group">
        <label for="departure1">ville départ</label>
        <input type="text" id="departure1" name="departure1" placeholder="Ex : Paris" value="{{ old('arrival1') }}" required>
      </div>


      <!-- Pays et ville d’arrivée -->
      <div class="form-group">
        <label for="arrival">Pays d’arrivée</label>
        <input type="text" id="arrival" name="arrival" placeholder="Ex : USA " value="{{ old('arrival') }}" required>
      </div>
 <!-- ville d’arrivée -->
       <div class="form-group">
        <label for="arrival1">ville d’arrivée</label>
        <input type="text" id="arrival1" name="arrival1" placeholder="Ex : New York" value="{{ old('arrival1') }}" required>
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
        <label for="price">Prix par kilo(en fcfa)</label>
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