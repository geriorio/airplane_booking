@extends('layout')

@section('body')
    <section class="px-16 py-8 w-screen">
        <div class="flex justify-between border-b-2 border-black h-fit w-full">
            <h1 class="mb-4 text-3xl font-bold text-black">
                Ticket Details for {{ $flight->flight_code }}
            </h1>
            <h1 class="mb-4 text-3xl font-bold text-black">
                {{ $total }} passengers and {{ $boarding }} boardings
            </h1>
        </div>
        <div class="flex justify-between h-fit w-full">
            <p>{{ $flight->origin }} → {{ $flight->destination }}</p>
            <p>Departure: <b>{{ $flight->departure_time }}</b></p>
            <p>Arrived: <b>{{ $flight->arrival_time }}</b></p>
        </div>
        <h1 class="mb-4 text-3xl font-bold">Passengers List</h1>

        @if (session()->has('success'))
            <p class="font-bold text-lg text-green-400">{{ session('success') }}</p>
        @endif

        <table>
            <thead>
                <tr>
                    <th class="border border-black px-10 text-center">No.</th>
                    <th class="border border-black px-10 text-center">Passenger Name</th>
                    <th class="border border-black px-10 text-center">Passenger Phone</th>
                    <th class="border border-black px-10 text-center">Seat Number</th>
                    <th class="border border-black px-10 text-center">Boarding</th>
                    <th class="border border-black px-10 text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($flight->tickets as $i => $ticket)
                    <tr>
                        <td class="border border-black px-10 text-center">{{ $i + 1 }}.</td>
                        <td class="border border-black px-10 text-center">{{ $ticket->passanger_name }}</td>
                        <td class="border border-black px-10 text-center">{{ $ticket->passanger_phone }}</td>
                        <td class="border border-black px-10 text-center">{{ $ticket->seat_number }}</td>
                        <td class="border border-black px-10 text-center">
                            @if (!$ticket->is_boarding)
                                <form action="{{ route('ticket.update', $ticket->id) }}" method="POST" class="contents">
                                    @method('PUT')
                                    @csrf
                                    <button type="submit" class="rounded-lg bg-green-200 px-4 py-1 w-fit">Confirm</button>
                                </form>
                            @else
                                {{ $ticket->boarding_time }}
                            @endif
                        </td>
                        <td class="border border-black px-10 text-center">
                            <form action="{{ route('ticket.delete', $ticket->id) }}" method="POST" class="contents">
                                @method('DELETE')
                                @csrf
                                @if ($ticket->is_boarding)
                                    <button class="rounded-lg bg-gray-300 font-normal px-4 py-1 w-fit"
                                        disabled>Delete</button>
                                @else
                                    <button class="rounded-lg bg-red-300 font-medium px-4 py-1 w-fit">Delete</button>
                                @endif
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="flex justify-center mt-24 w-full">
            <button class="bg-blue-400 w-[200px] text-lg text-white rounded-xl px-4 py-1"
                onclick="window.location.href='{{ route('flight.index') }}'">Back</button>
        </div>
    </section>
@endsection
