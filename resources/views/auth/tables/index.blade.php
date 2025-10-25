
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
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Client Name</th>
                                    <th>Departure</th>
                                    <th>Arrival</th>
                                    <th>Departure Date</th>
                                    <th>Arrival Date</th>
                                    <th>Weight (kg)</th>
                                    <th>Price (€)</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($voyages as $voyage)
                                    <tr>
                                        <td>{{ $voyage->fullname }}</td>
                                        <td>{{ $voyage->departure }}</td>
                                        <td>{{ $voyage->arrival }}</td>
                                        <td>{{ $voyage->departure_date }}</td>
                                        <td>{{ $voyage->arrival_date }}</td>
                                        <td>{{ $voyage->weight }}</td>
                                        <td>{{ $voyage->price }}</td>
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
                                        <td>
                                            <form action="{{ route('voyages.updateStatus', $voyage->id) }}" method="POST" >
                                                @csrf
                                                @method('PUT')
                                                <select name="status" onchange="this.form.submit()" class="form-control form-control-sm">
                                                    <option value="pending" {{ $voyage->status == 'pending' ? 'selected' : '' }}>Pending</option>
                                                    <option value="validated" {{ $voyage->status == 'validated' ? 'selected' : '' }}>Validated</option>
                                                    <option value="rejected" {{ $voyage->status == 'rejected' ? 'selected' : '' }}>Rejected</option>
                                                </select>
                                            </form>
                                         </td>
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
                                        <td colspan="10" class="text-center">Aucun voyage enregistré.</td>
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