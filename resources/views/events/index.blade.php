<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>
        Events
    </h1>
    <h4>
       <h4> <a  href="{{route('events.create')}} ">Create a new event</a> </h4> 
    </h4>

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
    <tbody>   @foreach ($events as $event )
        <tr>
            <td>
                {{$event->id}}

            </td>
            <td>
                {{$event->name}}

            </td>
            <td>
                {{$event->price}}

            </td>
            <td>
                {{$event->quantity}}

            </td>
            <td>
                {{$event->date_event}}

            </td>
            <td>
                <a href="">Delete</a>
                <a href="">Edit </a>


            </td>
            
            
        </tr>
            
        @endforeach
      

    </tbody>
</table>
    
</body>
</html>