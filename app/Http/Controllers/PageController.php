<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\User;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('landingpage');
    }

    public function check()
    {
        return view('check');
    }

    public function search(Request $request)
    {
        $searchdata = $request->searchdata;
        $bookings = Booking::where('bookingNo', 'like', '%' . $searchdata . '%')
            ->orWhere('phoneNumber', 'like', '%' . $searchdata . '%')
            ->get();

        return view('searchresult', compact('searchdata', 'bookings'));
    }

    public function seedetail($id)
    {
        $booking = Booking::find($id);
        return view('booking-details', compact('booking'));

    }

    public function dashboard()
    {
        $totalSubadmin = User::role('subadmin')->count();
        $totalBookings = Booking::all()->count();
        $totalnewBooking = Booking::whereNull('boookingStatus')
            ->orWhere('boookingStatus', '')->count();
        $rejectBooking = Booking::where('boookingStatus', 'Rejected')->count();
        $accBooking = Booking::where('boookingStatus', 'Accepted')->count();

        return view(
            'admin.dashboard',
            compact(
                'totalSubadmin',
                'totalBookings',
                'totalnewBooking',
                'accBooking',
                'rejectBooking'
            )
        );
    }
}
