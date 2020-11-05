<?php

namespace App\Http\Controllers\Events;

use App\Http\Controllers\Controller;
use App\Models\Tickets\Event;
use App\Models\Tickets\EventLocation;
use App\Models\Tickets\Ticket;
use App\Models\Tickets\Transaction;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Event::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $locations_data = [];

        $event = Event::where('id', $id)->with('eventLocations')->first();
        $event->event_date = Carbon::parse($event->datetime)->format('d/M/Y');
        $event->event_hour = Carbon::parse($event->datetime)->format('h:i a');

        foreach ($event->eventLocations AS $event_location) {
            $locations_data[$event_location->id] = (object)[
                'id' => $event_location->id,
                'name' => $event_location->name,
                'event_id' => $event_location->event_id,
                'total_tickets' => $event_location->total_tickets,
                'price' => number_format($event_location->price, 0, '.', '.'),
                'price_value' => $event_location->price,
            ];
        }

        $event->locations = $locations_data;
        unset($event->eventLocations);

        return response()->json($event);
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
    public function destroy($id)
    {
        //
    }
}
