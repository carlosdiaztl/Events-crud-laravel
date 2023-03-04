@extends('layouts.app')
@section('content')
    <h1>
        ruta en mantenimiento ya que se debehacer la query
    </h1>
    <h1>hola {{ $user }} </h1>
    <h1>
        detalles de tu reserva
        {{ $event }}

    </h1>

    {{-- <div class="card-body">
        <table id="table-events" class="table table-striped table-bordered nowrap" style="width:100%">
            <tr>
                <th scope="col">
                    Id
                </th>
                <th scope="col">
                    Event name
                </th>
                <th scope="col">
                    Price
                </th>
                <th scope="col">
                    Tickets stock
                </th>
                <th scope="col">
                    Date event
                </th>
                <th scope="col">
                    Actions
                </th>

            </tr>

            </thead>
            <tbody>

                <tr>
                    <th scope="row">
                        {{ $event->id }}

                    </th>
                    <td>
                        {{ $event->name }}

                    </td>
                    <td>
                        {{ $event->price }}

                    </td>
                    <td>
                        {{ $event->quantity }}

                    </td>
                    <td>
                        {{ $event->date_event }}

                    </td>
                    <td>

                        <a class="btn btn-warning" href="{{ route('events.edit', $event) }}">Edit</a>
                        <form class="d-inline" action="{{ route('events.destroy', $event->id) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger" type="submit">

                                Delete
                            </button>
                        </form>

                        <a class="btn btn-primary" href="{{ route('events.show', $event) }}">Show</a>
                        <div>{{ $user->id }}--{{ $event->id }} </div>
                        <form method="POST" action="{{ route('reservas.store', [$user->id, $event->id]) }}">
                            @csrf

                            <button type="submit" class="btn btn-primary">Reservar</button>
                        </form>
                        <a class="btn btn-primary" href="{{ route('reservas.show', [$user, $event]) }}">Show2</a>


                    </td>


                </tr>



            </tbody>
        </table>
    </div> --}}
@endsection
