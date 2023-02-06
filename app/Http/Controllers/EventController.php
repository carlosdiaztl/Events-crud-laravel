<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){
        $events = Event::all();
       
        return view('events.index', compact('events'));
    }
    public function create(){
        
       
        return view('events.create');
    }
    public function store(Event $event){
        dd($event);


        return redirect()->back();
    }
    //
}
