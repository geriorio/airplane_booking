@extends('layout')

@section('body')
    <section class="px-16 py-8 w-screen">
        <h1 class="text-3xl font-bold text-center w-full">Airplane Booking System</h1>
        <div class="mt-8 grid gap-4 grid-cols-3 w-11/12">
            @foreach ($flights as $flight)
                <div class="p-8 bg-neutral-300 h-fit py w-[400px] rounded-xl">
                    <div class="flex justify-between">
                        <p class="text-lg font-bold">{{ $flight->flight_code }}</p>
                        <p class="text-base">{{ $flight->origin }} -> {{ $flight->destination }}</p>
                    </div>
                    <p>Departure</p>
                    <p class="font-bold">{{ $flight->departure_time }}</p>
                    <p>Arrived</p>
                    <p class="font-bold">{{ $flight->arrival_time }}</p>
                    <div class="mt-2 flex flex-col gap-y-2">
                        <button class="font-semibold bg-gray-400 rounded-lg py-1 px-4 w-fit"
                            onclick="window.location.href='{{ route('ticket.create', $flight->id) }}'">Book Ticket</button>
                        <button class="font-semibold bg-gray-400 rounded-lg py-1 px-4 w-fit"
                            onclick="window.location.href='{{ route('ticket.show', $flight->id) }}'">View Details</button>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection
