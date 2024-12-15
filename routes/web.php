<?php

use App\Http\Controllers\FlightController;
use App\Http\Controllers\TicketController;
use Illuminate\Support\Facades\Route;

// Flights
Route::get('/flights', [FlightController::class, 'index'])->name('flight.index');
Route::get('/flights/ticket/{flight:id}', [FlightController::class, 'show'])->name('ticket.show');
Route::get('/flights/book/{flight:id}', [TicketController::class, 'create'])->name('ticket.create');

// Tickets
Route::post('/ticket/submit', [TicketController::class, 'store'])->name('ticket.store');
Route::put('/ticket/board/{ticket:id}', [TicketController::class, 'update'])->name('ticket.update');
Route::delete('/ticket/delete/{ticket:id}', [TicketController::class, 'delete'])->name('ticket.delete');
