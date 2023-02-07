@extends('layouts.app')
@section('content')
    <h1>
       {{$event->name}} event 
    </h1>
   

    <table>
        <thead>
            <tr>
                <th>
                    Id
                </th>
                <th>
                    Event name
                </th>
                <th>
                    Price
                </th>
                <th>
                    Tickets stock
                </th>
                <th>
                    Date event
                </th>
                <th>
                    Actions
                </th>

            </tr>

        </thead>
        <tbody>
           
                <tr>
                    <td>
                        {{ $event->id }}

                    </td>
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
                        <a href="{{ route('events.edit', $event) }}">Edit</a>
                        <a href="">Delete </a>
                        <a href="{{ route('events.show', $event) }}">Show</a>


                    </td>


                </tr>
            


        </tbody>
    </table>
@endsection
