<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Booking;

class LabTechnitianController extends Controller
{   
    public $user;

    public function __construct()
    {
        $this->middleware(function($request, $next){
            $this->user = Auth::guard('admin')->user();
            return $next($request);
        });
    }
    
    public function bookedList()
    {	
        if (is_null($this->user) || !$this->user->can('booked.list')) {
            abort(403, "Sorry !! You are unauthorized to view any role.");
        }

    	$bookedLists = Booking::where('booking_status', '=', 'booked')->orderBy('id','desc')->get();
    	return view('backend.pages.bookings.booked-list', compact('bookedLists'));
    }

    public function collectedList()
    {   
        if (is_null($this->user) || !$this->user->can('collected.list')) {
            abort(403, "Sorry !! You are unauthorized to view any role.");
        }

        $collectedLists = Booking::where('booking_status', '=', 'collected')->orderBy('id','desc')->get();
        return view('backend.pages.bookings.collected-list', compact('collectedLists'));
    }

    public function collectedSubmit(Request $request, $id)
    {   
        
        $collectSample = Booking::find($id);
        $collectSample->booking_status = 'collected';
        $collectSample->save();

        session()->flash('success', 'Sample collected successfully.');
        return back();
    }

    public function completeList()
    {   
        if (is_null($this->user) || !$this->user->can('complete.list')) {
            abort(403, "Sorry !! You are unauthorized to view any role.");
        }

        $completeLists = Booking::where('booking_status', '=', 'complete')->orderBy('id','desc')->get();
        return view('backend.pages.bookings.complete-list', compact('completeLists'));
    }

    public function view($id)
    {   
        if (is_null($this->user) || !$this->user->can('view.report')) {
            abort(403, "Sorry !! You are unauthorized to view any role.");
        }

        $patient = Booking::find($id);
        return view('backend.pages.bookings.view-report-by-lab', compact('patient'));
    }

    public function diagnosisResult(Request $request, $id)
    {   
        $diagnosis = Booking::find($id);
        $diagnosis->report_status = $request->report_status;
        $diagnosis->save();

        session()->flash('success', 'Sample diagnosis successfully.');
        return redirect()->route('collected.list');
    }

    public function viewByDoctor($id)
    {   
        $patient = Booking::find($id);
        return view('backend.pages.bookings.view-report-by-doctor', compact('patient'));
    }

    public function completeSubmit(Request $request, $id)
    {   
        $completeResult = Booking::find($id);
        $completeResult->booking_status = 'complete';
        $completeResult->lab_tech_sign  = 1;
        $completeResult->save();

        session()->flash('success', 'Sample diagnosis successfully.');
        return redirect()->route('complete.list');
    }
}
