<?php

namespace App\Http\Controllers\Tickets;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tickets\Event;
use App\Models\Tickets\Ticket;
use App\User;

class TicketsController extends Controller
{
	public function index()
    {
    	return response()->json(Ticket::all());
    }

    public function store(Request $request)
    {
    	/*$this->validate($request,
            [
                'name' => 'required|max:255',
                'for' => 'required',
                'cycle' => 'required',
                'date' => 'required',
                'timer' => 'required',
                'cycle_type' => 'required',
            ],
            [
                'name.required' => 'Debe ingresar el nombre de la alarma',
                'for.required' => '',
                'cycle_type.required' => '',
            ]
        );*/

        $ticket = new Ticket();
        
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
