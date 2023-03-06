@extends('layouts.app')
@section('content')
    <h1>
        {{ $event->name }} event
    </h1>
    <div class="d-flex justify-content-center "style="width: 100vw">
        <div class="card" style="width: 40rem">

            <div class="card-body">
                <h5 class="card-title">{{ $event->name }}</h5>
                <p class="card-text">Price {{ $event->price }}</p>
                <p class="card-text">Stock {{ $event->quantity }} </p>
                <p class="card-text">Date Event{{ $event->date_event }} </p>
                {{-- <a href="{{ route('events.index') }} " class="btn btn-primary">Buy</a> --}}
                @inject('auth', 'App\Http\Middleware\Authenticate')
                <form method="POST" action="{{ route('reservas.store', [($user = auth()->user()->id), $event->id]) }}">
                    @csrf

                    <button type="submit" class="btn btn-primary">Reservar</button>
                </form>
            </div>
        </div>
    </div>
@endsection
