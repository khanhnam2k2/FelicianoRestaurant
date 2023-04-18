<?php

namespace App\Http\Controllers\Frontend;

use App\Enums\TableStatus;
use App\Http\Controllers\Controller;
use App\Http\Requests\ReservationStoreRequest;
use App\Mail\BookingNotification;
use App\Models\Reservation;
use App\Models\Table;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class ReservationController extends Controller
{
    public function create()
    {
        return view('reservation.create');
    }
    public function store(ReservationStoreRequest $request)
    {

        $reservation = Reservation::create([
            'user_id' => Auth::user()->id,
            'name' => $request->name,
            'email' => $request->email,
            'tel_number' => $request->tel_number,
            'res_date' => $request->res_date,
            'guest_number' => $request->guest_number,
            'message' => $request->message,
        ]);
        $admin_gmail = 'danghanam2k2@gmail.com';
        Mail::to($admin_gmail)->send(new BookingNotification($reservation));
        return to_route('index')->with('message', 'Thank you for making a reservation with us. We will respond to you via email soon.');
    }
}
