
@extends('layouts.auth')


@section('content')

<div class="main-panel">
         <div class="content-wrapper">     
    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Voyages</h4>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Client Name</th>
                                    <th>Departure</th>
                                    <th>Arrival</th>
                                    <th>Departure Date</th>
                                    <th>Arrival Date</th>
                                    <th>Weight (kg)</th>
                                    <th>Price (€)</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($voyages as $voyage)
                                <tr>
                                    <td>
                                        <input type="checkbox">
                                    </td>
                                    <td>{{ $voyage->fullname }}</td>
                                    <td>{{ $voyage->departure }}</td>
                                    <td>{{ $voyage->arrival }}</td>
                                    <td>{{ $voyage->departure_date }}</td>
                                    <td>{{ $voyage->arrival_date }}</td>
                                    <td>{{ $voyage->weight }}</td>
                                    <td>{{ $voyage->price }}</td>
                                    <td>
                                        @if($voyage->status == 'validated')
                                            <div class="badge badge-outline-success">Validated</div>
                                        @elseif($voyage->status == 'rejected')
                                            <div class="badge badge-outline-danger">Rejected</div>
                                        @else
                                            <div class="badge badge-outline-warning">Pending</div>
                                        @endif
                                    </td>
                                    <td>
                                        @if($voyage->status == 'pending')
                                            <form action="{{ route('voyages.valider', $voyage->id) }}" method="POST" style="display:inline-block;">
                                                @csrf
                                                @method('PUT')
                                                <button type="submit" class="btn btn-sm btn-success">Valider</button>
                                            </form>

                                            <form action="{{ route('voyages.rejeter', $voyage->id) }}" method="POST" style="display:inline-block;">
                                                @csrf
                                                @method('PUT')
                                                <button type="submit" class="btn btn-sm btn-danger">Rejeter</button>
                                            </form>
                                        @endif

                                        <form action="{{ route('voyages.destroy', $voyage->id) }}" method="POST" style="display:inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-outline-danger">Supprimer</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        @if($voyages->isEmpty())
                            <p class="text-center mt-3">Aucun voyage enregistré.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection