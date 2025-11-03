@extends('layouts.auth')

@section('content')

<div class="main-panel">
  <div class="content-wrapper">     
    <div class="row">
      <div class="col-12 grid-margin">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Voyages</h4>

            @if(session('success'))
              <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <div class="table-responsive">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>Nom du client</th>
                    <th>Photo de profil </th>
                    <th>Carte d’identité </th>
                    <th>Départ</th>
                    <th>Photo du départ</th>
                    <th>Arrivée</th>
                    <th>Photo de l'arrivée</th>
                    <th>Date départ</th>
                    <th>Date arrivée</th>
                    <th>Poids (kg)</th>
                    <th>Prix (FCFA)</th>
                    <th>Whatsapp</th>
                    <th>Statut</th>
                    <th>Actions</th>
                    <th>Supprimer</th>
                  </tr>
                </thead>

                <tbody>
                  @forelse($voyages as $voyage)
                    <tr>
                      <td>{{ $voyage->fullname }}</td>

                     {{-- 🧑‍🦱 Photo de profil --}}
<td>
  @if($voyage->profile_photo)
    <a 
      href="{{ asset('storage/'.$voyage->profile_photo) }}" 
      download="profil_{{ Str::slug($voyage->fullname, '_') }}.{{ pathinfo($voyage->profile_photo, PATHINFO_EXTENSION) }}"
      title="Télécharger la photo de profil de {{ $voyage->fullname }}"
    >
      <img 
        src="{{ asset('storage/'.$voyage->profile_photo) }}" 
        alt="Profil" 
        width="50" 
        style="border-radius:50%; border:2px solid #ccc;"
      >
    </a>
  @else
    <span class="text-muted">Aucune</span>
  @endif
</td>

{{-- 🪪 Carte d’identité --}}
<td>
  @if($voyage->id_card_photo)
    <a 
      href="{{ asset('storage/'.$voyage->id_card_photo) }}" 
      download="carte_identite_{{ Str::slug($voyage->fullname, '_') }}.{{ pathinfo($voyage->id_card_photo, PATHINFO_EXTENSION) }}"
      title="Télécharger la carte d'identité de {{ $voyage->fullname }}"
    >
      <img 
        src="{{ asset('storage/'.$voyage->id_card_photo) }}" 
        alt="Carte d'identité" 
        width="50" 
        style="border-radius:5px; border:2px solid #ccc;"
      >
    </a>
  @else
    <span class="text-muted">Aucune</span>
  @endif
</td>


                      {{-- 🌍 Départ --}}
                      <td>{{ $voyage->departure }}</td>
                      <td>
                        @if($voyage->departure_photo)
                          <img src="{{ asset('storage/'.$voyage->departure_photo) }}" alt="Départ" width="50">
                        @endif

                        {{-- Formulaire MAJ photo départ --}}
                        <form action="{{ route('voyages.updatePhoto', $voyage->id) }}" method="POST" enctype="multipart/form-data" style="margin-top:5px">
                          @csrf
                          @method('PUT')
                          <input type="file" name="departure_photo" accept="image/*" style="display:inline-block" required>
                          <button type="submit" class="btn btn-sm btn-outline-primary">Mettre à jour</button>
                        </form>
                      </td>

                      {{-- ✈️ Arrivée --}}
                      <td>{{ $voyage->arrival }}</td>
                      <td>
                        @if($voyage->arrival_photo)
                          <img src="{{ asset('storage/'.$voyage->arrival_photo) }}" alt="Arrivée" width="50">
                        @endif

                        {{-- Formulaire MAJ photo arrivée --}}
                        <form action="{{ route('voyages.updatePhoto', $voyage->id) }}" method="POST" enctype="multipart/form-data" style="margin-top:5px">
                          @csrf
                          @method('PUT')
                          <input type="file" name="arrival_photo" accept="image/*" style="display:inline-block" required>
                          <button type="submit" class="btn btn-sm btn-outline-primary">Mettre à jour</button>
                        </form>
                      </td>

                      {{-- 📅 Dates & infos --}}
                      <td>{{ $voyage->departure_date }}</td>
                      <td>{{ $voyage->arrival_date }}</td>
                      <td>{{ $voyage->weight }}</td>
                      <td>{{ $voyage->price }}</td>
                      <td><a href="https://wa.me/{{ preg_replace('/\D/', '', $voyage->whatsapp) }}" target="_blank" style="color:#25D366;text-decoration:none;">
                      {{ $voyage->whatsapp }}
                    </a></td>

                      {{-- 🟢 Statut --}}
                      <td>
                        @php
                          $badgeClass = match($voyage->status) {
                              'validated' => 'badge badge-outline-success',
                              'rejected' => 'badge badge-outline-danger',
                              default => 'badge badge-outline-warning',
                          };
                        @endphp
                        <span class="{{ $badgeClass }}">{{ ucfirst($voyage->status) }}</span>
                      </td>

                      {{-- ⚙️ Changer le statut --}}
                      <td>
                        <form action="{{ route('voyages.updateStatus', $voyage->id) }}" method="POST">
                          @csrf
                          @method('PUT')
                          <select name="status" onchange="this.form.submit()" class="form-control form-control-sm">
                            <option value="pending" {{ $voyage->status == 'pending' ? 'selected' : '' }}>En attente</option>
                            <option value="validated" {{ $voyage->status == 'validated' ? 'selected' : '' }}>Validé</option>
                            <option value="rejected" {{ $voyage->status == 'rejected' ? 'selected' : '' }}>Rejeté</option>
                          </select>
                        </form>
                      </td>

                      {{-- 🗑️ Supprimer --}}
                      <td>
                        <form action="{{ route('voyages.destroy', $voyage->id) }}" method="POST" onsubmit="return confirm('Voulez-vous vraiment supprimer ce voyage ?');">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-sm btn-outline-danger">Supprimer</button>
                        </form>
                      </td>
                    </tr>
                  @empty
                    <tr>
                      <td colspan="14" class="text-center">Aucun voyage enregistré.</td>
                    </tr>
                  @endforelse
                </tbody>
              </table>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
