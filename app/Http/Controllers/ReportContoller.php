<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Restable;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ReportContoller extends Controller
{
    public function bwdates(Request $request)
    {
        $fdate = $request->fdate;
        $tdate = $request->tdate;

        $bookings = Booking::whereBetween('BookingDate', [Carbon::parse($fdate), Carbon::parse($tdate)])->get();

        return view('admin.BWdateReport.details', compact('fdate', 'tdate', 'bookings'));
    }

    public function index()
    {
        return view('admin.BWdateReport.index');
    }

    public function detailbooking($id, $title)
    {
        $booking = Booking::find($id);
        $tables = Restable::all();
        return view('admin.bookings.details', compact('booking', "title", 'tables'));
    }
}
