<?php

namespace App\Http\Controllers\Tickets;

use App\Http\Controllers\Controller;
use App\Models\Tickets\EventLocation;
use App\Models\Tickets\Transaction;
use Illuminate\Http\Request;
use App\Models\Tickets\Event;
use App\Models\Tickets\Ticket;
use App\User;
use Illuminate\Support\Facades\DB;

class TicketsController extends Controller
{
	public function index()
    {
    	return response()->json(Ticket::all());
    }

    public function store(Request $request)
    {
        try {
            DB::beginTransaction();

            $tickets_quantity = $request->quantity;

            $transaction = new Transaction();
            $transaction->quantity = $tickets_quantity;
            $transaction->event_id = $request->event_id;
            $transaction->buyer_user_id = $request->user_id;
            $transaction->creator_user_id = 1;
            $success = $transaction->save();

            if ($success) {
                for ($i = 0; $i < $tickets_quantity; $i++) {
                    $ticket = new Ticket();
                    $ticket->event_id = $request->event_id;
                    $ticket->buyer_user_id = $request->user_id;;
                    $ticket->transaction_id = $transaction->id;
                    $ticket->event_location_id = $request->event_selected_location_id;
                    $created = $ticket->save();
                }

                $event_location = EventLocation::where('id', $request->event_selected_location_id)->first();
                $location_available_tickets = $event_location->total_tickets;
                $event_location->total_tickets = $location_available_tickets - $tickets_quantity;
                $event_location->save();
            }

            DB::commit();
            return response()->json(['success' => $success]);
        } catch (Exception $e) {
            DB::rollback();
            return response()->json(['success' => false, 'msg' => 'Ha ocurrido un error al eliminar el usuario. Por favor, intente mas tarde.', 'code' => $e->getCode(), 'error' => $e->getMessage()]);
        }
    }

	public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
