<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\User;
use App\Models\Booking;
use Illuminate\Support\Facades\Auth;
use DateTime;

class BookingsController extends Controller
{
    public function booking()
    {   
        $user = Auth::user();
        $firstDayofMonth = Carbon::now()->toDateString();
        $lastDayofMonth  = Carbon::now()->endOfMonth()->modify('0 month')->toDateString();

        $start_date = Carbon::createFromFormat('Y-m-d', $firstDayofMonth);
        $end_date   = Carbon::createFromFormat('Y-m-d', $lastDayofMonth);
        $schedule_days = $start_date->diffInDays($end_date);

        $date = new DateTime($firstDayofMonth);

        $everyMonth[] = $date->format('Y-m-d');
 
        for ($i = 0; $i < $schedule_days; $i++) {
            $date->modify('+1 day');
            
            if ($this->checkBookingDate($date->format('Y-m-d'))) {
                $everyMonth[] = $date->format('Y-m-d');
            }
        }
        return view('frontend.pages.bookings.booking', compact('everyMonth','user'));
    }

    public function checkBookingDate($bookingDate)
    {
        $allDate = Booking::where('date', '=', $bookingDate)->get();
        $dateCount = $allDate->count();

        $limit = 5;
        if($dateCount < $limit)
        {
            return true;
        }
        else {
            return false;
        }
    }

    public function store(Request $request)
    {   
        // Validate Data
        $request->validate([
            'date' => 'required',
        ]);

        $booking = new Booking();
        $booking->user_id = Auth::user()->id;
        $booking->ref_id = 'BK'.rand(0000,9999);
        $booking->date = $request->date;
        $booking->booking_status = BOOKED;
        $booking->save();

        session()->flash('success','Booking created successfully.');
        return redirect()->route('booking.list');
    }

    public function bookingList()
    {	
        $bookings = Booking::where('user_id', '=', Auth::user()->id)->get();
    	return view('frontend.pages.bookings.booking-list', compact('bookings'));
    }
    
}
