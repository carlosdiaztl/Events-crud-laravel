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
                            <table id="table-users" class="table table-striped table-bordered nowrap" style="width:100%">
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
                                            
                                            <a class="btn btn-warning" href="{{ route('events.edit', $event) }}">Edit</a>
                                            <form class="d-inline" action="{{route('events.destroy',$event->id)}}" method="POST">
                                                @method('DELETE')
                                                @csrf
                                                <button class="btn btn-danger" type="submit">

                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"/></svg>
                                                </button>
                                            </form>
                                            <a class="btn btn-primary" href="{{ route('events.show', $event) }}">Show</a>
                    
                    
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
