<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use App\Models\Ticket;
use Illuminate\Http\Request;

class FlightController extends Controller
{
    public function index()
    {
        $flights = Flight::all();
        return view('flights', compact('flights'));
    }

    public function show(Flight $flight)
    {
        $boarding = Ticket::where('flight_id', $flight->id)->where('is_boarding', 1)->count();
        $total = Ticket::where('flight_id', $flight->id)->count();
        $flight = $flight->load(['tickets']);

        return view('flight-show', compact('flight', 'boarding', 'total'));
    }
}
