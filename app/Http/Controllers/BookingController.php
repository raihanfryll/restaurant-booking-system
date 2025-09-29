<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Http\Requests\StoreBookingRequest;
use App\Http\Requests\UpdateBookingRequest;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $random_num = random_int(100000000000, 999999999999);
        $time = strtotime($request->bookingdate);
        $newformat = date('Y-m-d', $time);
        Booking::create([
            'bookingNo' => $random_num,
            'fullName' => $request->name,
            'emailId' => $request->email,
            'phoneNumber' => $request->phonenumber,
            'bookingDate' => $newformat,
            'bookingTime' => $request->bookingtime,
            'noAdults' => $request->noadults,
            'noChildrens' => $request->nochildrens,
            'tableId' => $request->bookingdate,
        ]);

        Alert::success('Booking Success', 'Your order sent successfully. Booking number is ' . $random_num);
        return back();
    }


    public function newBooking()
    {
        $newBooking = Booking::whereNull('boookingStatus')
            ->orWhere('boookingStatus', '')->get();

        return view('admin.bookings.newBooking', compact('newBooking'));
    }

    public function allBooking()
    {
        $allBooking = Booking::all();

        return view('admin.bookings.allBooking', compact('allBooking'));
    }

    public function accBooking()
    {
        $accBooking = Booking::where('boookingStatus', 'Accepted')->get();

        return view('admin.bookings.accBooking', compact('accBooking'));
    }

    public function rejectBooking()
    {
        $rjcBooking = Booking::where('boookingStatus', 'Rejected')->get();

        return view('admin.bookings.rejectBooking', compact('rjcBooking'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Booking $booking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Booking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $booking = Booking::find($id);
        $booking->tableId = $request->table;
        $booking->boookingStatus = $request->status;
        $booking->adminremark = $request->officialremak;
        $booking->update();

        Alert::success('Booking Success', 'Your order sent successfully');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Booking $booking)
    {
        //
    }
}
