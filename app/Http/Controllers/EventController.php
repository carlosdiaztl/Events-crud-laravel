<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function index(){
        $events = Event::all();
       
        return view('events.index', compact('events'));
    }
    public function create(){
        
       
        return view('events.create');
    }
    public function store(Request $request){
        // $event->name = 'carlos';
        // dd($request->name);
        // dd($request);
        $request->validate([
            'name' => "required|min:5|max:30|string",
            'price' => "required|min:5|max:990|integer",
            'quantity' => "required|min:10|max:990|integer",
            'date_event' => "required"

        ]);


        $event = Event::create(
        [
            'name'=> $request->name,
            'price'=> $request->price,
            'quantity'=> $request->quantity,
            'date_event'=> $request->date_event
        ]
        );
       


        return redirect()->route('events.index')
        ->withSuccess("The event {$event->name} was created successfully ");
    }
    //
    public function show($id){
        $event = Event::find($id);
        return view('events.show', compact('event'));
    }
    public function edit($id){
        $event = Event::find($id);
        return view('events.edit', compact('event'));
    }
    public function update(Request $request,Event $event){
        $request->validate([
            'name' => "required|min:5|max:30|string",
            'price' => "required|min:5|max:990|integer",
            'quantity' => "required|min:10|max:990|integer",
            'date_event' => "required"

        ]);
        $event->update(
            [
                'name'=> $request->name,
                'price'=> $request->price,
                'quantity'=> $request->quantity,
                'date_event'=> $request->date_event
            ]
            );
            return redirect()->route('events.index')
            ->withSuccess("The event {$event->name} was Edit successfully ");
    }
    public function destroy($id){
        $event = Event::find($id);
        $event->delete();
        return redirect()->route('events.index')
        ->withSuccess("The event with name {$event->name} and id {$event->id}  was delete successfully ");
    }


}
