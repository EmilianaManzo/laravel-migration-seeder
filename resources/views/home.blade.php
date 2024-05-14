@extends('layout.main')

@section('content')

<div class="container">
    <div class="card-body">
        <h5 class="card-title">Ciao User</h5>
        <p class="card-text">Cerca il treno più adatto alle tue esigenze</p>
        <a href="{{ route('treni') }}" class="btn btn-primary">TRENI</a>

    </div>
</div>

@endsection
