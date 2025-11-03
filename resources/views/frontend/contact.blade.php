<section class="section contact-form">
  <div class="container">
    <p class="section-subtitle">Vous voulez devenir GP ?</p>
    <h2 class="h2 section-title">Demande pour Devenir GP</h2>

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

    <form action="{{ route('voyages.store') }}" method="post" class="form" enctype="multipart/form-data">
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
        <label for="departure">Pays départ</label>
        <input type="text" id="departure" name="departure" placeholder="Ex : France" value="{{ old('departure') }}" required>
      </div>
      <div class="form-group">
        <label for="departure1">Ville départ</label>
        <input type="text" id="departure1" name="departure1" placeholder="Ex : Paris" value="{{ old('departure1') }}" required>
      </div>

      <!-- Pays et ville d’arrivée -->
      <div class="form-group">
        <label for="arrival">Pays d’arrivée</label>
        <input type="text" id="arrival" name="arrival" placeholder="Ex : USA" value="{{ old('arrival') }}" required>
      </div>
      <div class="form-group">
        <label for="arrival1">Ville d’arrivée</label>
        <input type="text" id="arrival1" name="arrival1" placeholder="Ex : New York" value="{{ old('arrival1') }}" required>
      </div>

      <!-- Dates -->
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
        <label for="price">Prix par kilo (en FCFA)</label>
        <input type="number" id="price" name="price" placeholder="Ex : 500" value="{{ old('price') }}" required>
      </div>

      <!-- Photo de profil -->
<div class="form-group">
  <label for="profile_photo">Photo de profil</label>
  <input type="file" id="profile_photo" name="profile_photo" accept="image/*" required>
</div>

<!-- Photo carte d’identité -->
<div class="form-group">
  <label for="id_card_photo">Photo de la carte d’identité</label>
  <input type="file" id="id_card_photo" name="id_card_photo" accept="image/*" required>
</div>

<!-- Dernier jour de dépôt -->
<div class="form-group" style="color: red;">
  <label for="last_deposit_day" style="color: red;">Dernier jour de dépôt</label>
  <input 
    type="date" 
    id="last_deposit_day" 
    name="last_deposit_day" 
    required 
    style="border: 2px solid red; color: red; background-color: #ffeaea;"
  >
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

  @if(session('success'))
<div id="popup-overlay" style="
    position: fixed;
    top: 0; left: 0;
    width: 100%; height: 100%;
    background: rgba(0,0,0,0.6);
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 9999;
">
  <div style="
      background: white;
      padding: 20px 30px 30px 30px;
      border-radius: 12px;
      text-align: center;
      max-width: 400px;
      width: 90%;
      box-shadow: 0 5px 20px rgba(0,0,0,0.3);
      position: relative;
      display: flex;
      flex-direction: column;
      align-items: center;
  ">
    <!-- Image en haut centrée -->
    <img src="{{ asset('assets/images/smagp.png') }}" alt="Success" style="width: 100px; margin-bottom: 20px; display: block;">

    <h2 style="margin-bottom: 15px; font-size: 22px; color: #333;">Succès !</h2>
    <p style="margin-bottom: 25px; color: #555;">Vous serez contacté dans moins de 12h de temps !</p>

    <!-- Bouton centré -->
    <button id="close-popup" class="btn btn-primary" style="display: block; margin: 0 auto;">Fermer</button>
  </div>
</div>

<script>
  document.getElementById('close-popup').addEventListener('click', function() {
    document.getElementById('popup-overlay').style.display = 'none';
  });
</script>
@endif


</section>
