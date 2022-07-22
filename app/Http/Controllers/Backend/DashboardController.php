<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\Admin;
use App\Models\Booking;

class DashboardController extends Controller
{   
    public $user;

    public function __construct()
    {
        $this->middleware(function($request, $next){
            $this->user = Auth::guard('admin')->user();
            return $next($request);
        });
    }
    
    public function index()
    {	
    	// if (is_null($this->user) || !$this->user->can('admin.dashboard')) {
        //     abort(403,"Sorry !! You are unauthorized to view dashboard.");
        // }
        
        $total_roles       = count(Role::select('id')->get());
        $total_admins      = count(Admin::select('id')->get());
        $total_patients    = count(Booking::select('id')->get());
        $total_positives   = count(Booking::where('report_status','positive')->select('id')->get());
        $total_negatives   = count(Booking::where('report_status','negative')->select('id')->get());
        $total_permissions = count(Permission::select('id')->get());
    	return view('backend.pages.dashboard.index',compact('total_roles','total_admins','total_permissions','total_patients','total_positives','total_negatives'));
    }
}
