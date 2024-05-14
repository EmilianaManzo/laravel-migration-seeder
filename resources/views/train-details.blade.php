@extends('layout.main')

@section('content')
<div class="container py-5 ">
    <table class="table">
        <tbody>
            <tr>
                <th scope="col">Codice Treno</th>
                <td scope="col">{{$train->train_code}}</td>

            </tr>

            <tr>
                <th scope="col">Compagnia</th>
                <td scope="col">{{$train->agency}}</td>

            </tr>
            <tr>
                <th scope="col">Partenza</th>
                <td scope="col">{{$train->departure_station . ' ' . $train->departure_time}}</td>
            </tr>

            <tr>
                <th scope="col">Arrivo</th>
                <td scope="col">{{$train->arrival_station . ' ' . $train->arrival_time}}</td>
            </tr>
            <tr>
                <th scope="col">Numero di carrozze</th>
                <td scope="col">{{$train->number_carriage}}</td>
            </tr>
            <tr>
                <th scope="col">Posti PRM</th>
                <td scope="col">{{$train->seat_prm}}</td>
            </tr>


        </tbody>
      </table>
</div>
@endsection

@section('title')
Dettaglio treno
@endsection
