@extends('layout')

@section('body')
    <section class="px-16 py-8 w-screen">
        <div>
            <div class="flex justify-between border-b-2 border-black h-fit w-full">
                <h1 class="mb-4 text-3xl font-bold text-black">
                    Ticket Booking for
                </h1>
                <h1 class="mb-4 text-3xl font-bold text-black">
                    {{ $flight->flight_code }}
                </h1>
            </div>
            <div class="flex justify-between h-fit w-full">
                <p>{{ $flight->origin }} → {{ $flight->destination }}</p>
                <p>Departure: <b>{{ $flight->departure_time }}</b></p>
                <p>Arrived: <b>{{ $flight->arrival_time }}</b></p>
            </div>

            <div class="pt-4">
                <form action="{{ route('ticket.store') }}" method="POST" class="contents">
                    @csrf
                    <input type="hidden" name="flight_id" value="{{ $flight->id }}">
                    <div class="flex gap-y-2 gap-x-4 my-2 w-[400px]">
                        <label for="passanger_name">Passenger Name</label>
                        <input class="h-[35px] rounded-lg border border-black p-1 w-full" type="text" name="passanger_name" id="passanger_name">
                        @error('passanger_name')
                            <p class="text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="flex gap-x-4 my-2 w-[400px]">
                        <label for="passanger_phone">Passenger Phone</label>
                        <input class="h-[35px] rounded-lg border border-black p-1 w-full" type="text" name="passanger_phone" id="passanger_phone">
                        @error('passanger_phone')
                            <p class="text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="flex gap-x-4 my-2 w-[400px]">
                        <label for="seat_number">Seat Number</label>
                        <input class="h-[35px] rounded-lg border border-black p-1 w-full" type="text" name="seat_number" id="seat_number">
                        @error('seat_number')
                            <p class="text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <a href="{{ route('flight.index') }}" class="contents">
                        <button type="button" class="mt-12 h-[35px] rounded-xl bg-amber-200 w-fit px-4 py-1">Cancel</button>
                    </a>
                    <button type="submit" class="h-[35px] rounded-xl bg-green-200 w-fit px-4 py-1">Book Ticket</button>
                </form>
            </div>
            @if (session()->has('success'))
                <p class="text-lg font-bold text-green-400">{{ session('success') }}</p>
            @endif
        </div>
    </section>
@endsection
