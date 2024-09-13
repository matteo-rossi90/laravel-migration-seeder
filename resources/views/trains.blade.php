{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')

@section('content')
<div class="container my-5">

    <table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Azienda</th>
      <th scope="col">Stazione di partenza</th>
      <th scope="col">Stazione di arrivo</th>
      <th scope="col">Orario di partenza</th>
      <th scope="col">Orario di arrivo</th>
      <th scope="col">Data di partenza</th>
      <th scope="col">Codice treno</th>
      <th scope="col">Numero carrozze</th>
      <th scope="col">In orario</th>
      <th scope="col">Cancellato</th>
    </tr>
  </thead>
  <tbody>
    @foreach ( $list_trains as $train )
    <tr>
      <td>{{$train->id}}</td>
      <td>{{$train->agency}}</td>
      <td>{{$train->departure_station}}</td>
      <td>{{$train->arrival_station}}</td>
      <td>{{$train->departure_time}}</td>
      <td>{{$train->arrival_time}}</td>
      <td>{{$train->departure_date}}</td>
      <td>{{$train->train_code}}</td>
      <td>{{$train->coach}}</td>
      <td>{{$train->on_time ? 'In orario' : 'In ritardo'}}</td>
      <td>{{$train->is_cancelled ? 'Cancellato' : '-'}}</td>
    </tr>

    @endforeach
  </tbody>
</table>

</div>

@endsection


@section('titlePage')
    trains
@endsection
