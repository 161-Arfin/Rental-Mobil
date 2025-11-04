<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Car;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    public function create(Car $car)
    {
        return view('booking', compact('car'));
    }


    //menampilkan riwayat booking
    public function history()
    {
        $bookings = Booking::with('car')
            ->where('user_id', Auth::id())
            ->latest()
            ->get();

        return view('booking-history', compact('bookings'));
    }

    //menyimpan booking
    public function store(Request $request)
    {
        $request->validate([
            'car_id' => 'required|exists:cars,id',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
        ]);

        $car = Car::findOrFail($request->car_id);
        $days = (strtotime($request->end_date) - strtotime($request->start_date)) / 86400 + 1;
        $total = $days * $car->price_per_day;

        Booking::create([
            'user_id' => Auth::id(),
            'car_id' => $car->id,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'total_price' => $total,
            'status' => 'pending',
            'notes' => $request->notes,
        ]);

        // ✅ Redirect ke halaman riwayat dengan pesan sukses
        return redirect()->route('booking.history')->with('success', 'Booking berhasil! Menunggu konfirmasi admin.');
    }
}
