@extends('layouts.app')
@section('content')
<div class="d-flex justify-content-center">
<form action="{{route('events.update',$event)}}" method="POST">
    @csrf
@method('PUT')
<div class="form-row ">
    <label for="Name event">Name event</label>
    <input class="form-control" type="text" name="name" placeholder="Name event" value="{{old('name')??$event->name}}">
  </div>
  <div class="form-row">
    <label for="Price">Price</label>
    <input class="form-control" type="number" name="price" placeholder="Price" value="{{old('price')??$event->price}}">
  </div>
  <div class="form-row">
    <label for="Tickets stock">Tickets stock</label>
    <input class="form-control" type="number" name="quantity" placeholder="Tickets stock" value="{{old('quantity')??$event->quantity}}">
  </div>
  <div class="form-row">
    <label for="Date event">Date event</label>
    <input class="form-control" type="date" name="date_event" placeholder="date_event" value="{{old('date_event')??$event->date_event}}">
  </div>

  <div class="form-row mt-3">
    <button type="submit" class="btn btn-primary btn-lg">
        Edit event

    </button>

</div>
</form>
</div>




@endsection

