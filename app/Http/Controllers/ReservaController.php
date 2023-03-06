<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Reserva;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReservaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        // ->only('edit','destroy');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($userid)

    {
        if ($userid == auth()->user()->id) {
            $user = DB::table('users')
                ->where('id', $userid)->get()->first();
            $events = Reserva::whereHas('user', function ($query) use ($user) {
                $query->where('id', $user->id);
            })->with('event')->get();

            // dd($events, $user);
            return view('reservas.index', compact('events', 'user'));
        }
        return redirect()->route('events.index')->withErrors('No tienes acceso');




        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($user_id, $event_id)
    {
        dd($event_id, $user_id);
        return view('reservas.create', compact('user_id', 'event_id'));
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $user_id, $event_id)
    {
        // dd($event_id, $user_id);
        $reserva = new Reserva();
        $reserva->user()->associate($user_id);
        $reserva->event()->associate($event_id);
        // dd($reserva);
        $reserva->save();

        // return redirect()->route('reservas.show', [$user_id, $event_id])
        // return redirect()->route('reservas.show', compact('user_id', 'event_id'))
        return redirect()->route('events.index')
            ->with('success', "Su reserva ha sido creada con éxito");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($user, $event)
    {
        // dd($user_id, $event_id);
        // dd($user);
        return view('reservas.show', compact('user', 'event'));
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($reservation)
    {
        // $product = Product::findorFail($product);
        $reservation = Reserva::findorFail($reservation);
        // dd($reservation);

        $reservation->delete();
        //decir que el producto no s epuede liminar porque petence a una tabla 
        return redirect()->route('reservas.index', auth()->user()->id)
            ->withSuccess("The event with id: {$reservation->id}  was deleted");;
        //
    }
}
