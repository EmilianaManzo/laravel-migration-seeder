@extends('layout.main')

@section('content')

<div class="container py-5 ">
    <div class="row">
        <table class="table table-dark table-striped table-hover">
            <thead>
            <tr>
                <th scope="col">Azienda</th>
                <th scope="col">Stazione di Partenza</th>
                <th scope="col">Orario di Partenza</th>
                <th scope="col">Stazione di Arrivo</th>
                <th scope="col">Orario di Arrivo</th>
                <th scope="col">Codice Treno</th>
                <th scope="col"></th>

            </tr>
            </thead>
            <tbody>
            @foreach ($trains as $train)
            <tr>
                <th scope="row">{{$train->agency}}</th>
                <td>{{$train->departure_station}}</td>
                <td>{{$train->departure_time}}</td>
                <td>{{$train->arrival_station}}</td>
                <td>{{$train->departure_time}}</td>
                <td>{{$train->train_code}}</td>
                <td><a href="#" class="btn btn-primary ">Go</a></td>


            </tr>
            @endforeach

            </tbody>
        </table>
    </div>

    <div class="row">
        <div class="paginator">{{$trains->links()}}</div>
    </div>
</div>


@endsection
