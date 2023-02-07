@extends('layouts.app')
@section('content')
<h1> Create a new event</h1>
<div class="d-flex justify-content-center"> 
    
    <form action="{{ route('events.store') }} " method="POST">
        @csrf 

        <div class="form-row">
            <label for="Name event">Name event</label>
            <input class="form-control form-control-lg" type="text" name="name" placeholder="Name event" value="{{ old('name') }}">
          </div>
          <div class="form-row">
            <label for="Price">Price</label>
            <input class="form-control form-control-lg" type="number" name="price" placeholder="Price" value="{{ old('price') }}">
          </div>
          <div class="form-row">
            <label for="Tickets stock">Tickets stock</label>
            <input class="form-control form-control-lg" type="number" name="quantity" placeholder="Tickets stock" value="{{ old('quantity') }}">
          </div>
          <div class="form-row">
            <label for="Date event">Date event</label>
            <input class="form-control form-control-lg" type="date" name="date_event" placeholder="date_event" value="{{ old('date_event') }}">
          </div>
        
          <div class="form-row mt-3">
            <button type="submit" class="btn btn-primary btn-lg">
                Create event

            </button>
       
        </div>
        


    </form>
  </div>





    
@endsection
