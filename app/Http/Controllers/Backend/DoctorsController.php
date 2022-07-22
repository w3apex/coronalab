<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Booking;
use App\Models\User;

class DoctorsController extends Controller
{   
    public $user;

    public function __construct()
    {
        $this->middleware(function($request, $next){
            $this->user = Auth::guard('admin')->user();
            return $next($request);
        });
    }

    public function requestList()
    {   
        if (is_null($this->user) || !$this->user->can('request.list')) {
            abort(403, "Sorry !! You are unauthorized to view any role.");
        }

        $requestLists = Booking::where('lab_tech_sign', '=', 1)->get();
        return view('backend.pages.reports.request-report-by-lab', compact('requestLists'));
    }

    public function confirmResult(Request $request, $id)
    {   
        /*if (is_null($this->user) || !$this->user->can('request.list')) {
            abort(403, "Sorry !! You are unauthorized to view any role.");
        }*/
        
    	$diagnosis = Booking::find($id);
        $diagnosis->doctor_sign = 1;
        $diagnosis->save();

        session()->flash('success', 'Report successfully completed.');
        return back();
    }
}
