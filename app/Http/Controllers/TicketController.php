<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function create(Flight $flight)
    {
        return view('ticket-create', ['flight' => $flight]);
    }

    public function store(Request $request)
    {
        $validator = $request->validate([
            'flight_id' => 'required',
            'passanger_name' => 'required|string',
            'passanger_phone' => 'required|string',
            'seat_number' => 'required|string',
        ]);

        Ticket::create($validator);
        return redirect()->back()->with('success', 'Ticket book success');
    }

    public function update(Request $request, Ticket $ticket)
    {
        $ticket->update(['boarding_time' => now(), 'is_boarding' => 1]);
        return redirect()->back()->with('success', 'Ticket status update success');
    }

    public function delete(Request $request, Ticket $ticket)
    {
        if ($ticket->is_boarding) {
            return redirect()->back()->with('error', 'Ticket Deletion is failed because user is boarding');
        }
        
        $ticket->delete();
        return redirect()->back()->with('success', 'Ticket delete success');
    }
}
