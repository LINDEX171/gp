@extends('layouts.auth')

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <!-- Voyages en attente -->
            <div class="col-sm-4 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h5>Voyages en attente</h5>
                        <div class="d-flex align-items-center">
                            <h2 class="mb-0">{{ $voyagesEnAttente }}</h2>
                            <i class="icon-lg mdi mdi-timer-sand text-warning ml-auto"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Voyages validés -->
            <div class="col-sm-4 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h5>Voyages validés</h5>
                        <div class="d-flex align-items-center">
                            <h2 class="mb-0">{{ $voyagesValides }}</h2>
                            <i class="icon-lg mdi mdi-check-circle text-success ml-auto"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Voyages rejetés -->
            <div class="col-sm-4 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h5>Voyages rejetés</h5>
                        <div class="d-flex align-items-center">
                            <h2 class="mb-0">{{ $voyagesRejetes }}</h2>
                            <i class="icon-lg mdi mdi-close-circle text-danger ml-auto"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
