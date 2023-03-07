@extends('layouts.app')

@section('content')
    <div class="container">
        <h1> {{ $user->name }} Bienvenido a tus reservas </h1>

        @dump($events)
        <div class="card">
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Date event</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($events as $reservation)
                            <tr>

                                <th scope="row"> {{ $reservation->id }} </th>
                                <td> {{ $reservation->name }}</td>
                                <td>{{ $reservation->price }}</td>
                                <td>{{ $reservation->date_event }}</td>
                                <td>
                                    <form class="d-inline" action="{{ route('reservas.destroy', $reservation->id) }}"
                                        method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button class="btn btn-danger" type="submit">

                                            Delete
                                        </button>
                                    </form>
                                    <a class="btn btn-success" href="{{ route('events.show', $reservation) }}">Pay</a>
                                </td>
                            </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>
        </div>








    </div>
@endsection
