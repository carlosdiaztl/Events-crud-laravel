@extends('layouts.app')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header ">
                            <div class="d-flex justify-content-between">



                                <h3 class="card-title">Events</h3>
                                <a href="{{ route('events.create') }} " class="btn btn-success">Create Event</a>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
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
                                    @foreach ($events as $event)
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

                                                <a class="btn btn-warning"
                                                    href="{{ route('events.edit', $event) }}">Edit</a>
                                                <form class="d-inline" action="{{ route('events.destroy', $event->id) }}"
                                                    method="POST">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button class="btn btn-danger" type="submit">

                                                        Delete
                                                    </button>
                                                </form>

                                                <a class="btn btn-primary"
                                                    href="{{ route('events.show', $event) }}">Show</a>
                                                {{-- <div>{{ $user->id }}--{{ $event->id }} </div> --}}

                                                {{-- <a class="btn btn-primary"
                                                    href="{{ route('reservas.show', [$user, $event]) }}">Show2</a> --}}


                                            </td>


                                        </tr>
                                    @endforeach


                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->


                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
@endsection
