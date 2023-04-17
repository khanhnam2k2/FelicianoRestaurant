<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\BookingCanceled;
use App\Mail\BookingConfirmed;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class ReservationController extends Controller
{
    public function index()
    {
        $reservations = Reservation::orderBy('created_at', 'desc')->get();
        return view('admin.reservation.index', compact('reservations'));
    }
    public function show(Reservation $reservation)
    {

        return view('admin.reservation.show', compact('reservation'));
    }
    public function updateStatus(Request $request, Reservation $reservation)
    {
        $request->validate([
            'status' => 'required|in:pending,confirmed,canceled',
        ]);

        $reservation->status = $request->input('status');
        $reservation->save();
        if ($reservation->status == 'confirmed') {
            Mail::to($reservation->email)->send(new BookingConfirmed($reservation));
        } else if ($reservation->status == 'canceled') {
            Mail::to($reservation->email)->send(new BookingCanceled($reservation));
        };
        return redirect()->route('admin.reservation.index')
            ->with('success', 'Table reservation status has been successfully updated');
    }
    public function destroy(Reservation $reservation)
    {
        $reservation->delete();

        return to_route('admin.reservation.index')->with('danger', 'Reservation deleted successfully');
    }
}
