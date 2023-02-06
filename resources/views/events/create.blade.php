<h1> Create a new event</h1>
<form action="{{route('events.store')}} " method="POST">
    @csrf
    <input type="text" placeholder="Name event">

<button type="submit">
Create
</button>
</form>