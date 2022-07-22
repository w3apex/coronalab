<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Division;
use App\Models\District;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class PatientsController extends Controller
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
        if (is_null($this->user) || !$this->user->can('patients.index')) {
            abort(403, "Sorry !! You are unauthorized to view any patients.");
        }

    	$users = User::all();
    	return view('backend.pages.patients.index', compact('users'));
    }

    public function create()
    {	
        if (is_null($this->user) || !$this->user->can('patients.create')) {
            abort(403, "Sorry !! You are unauthorized to create any patients.");
        }

    	$divisions = Division::orderBy('priority','asc')->get();
        $districts = District::orderBy('name','asc')->get();

    	return view('backend.pages.patients.create', compact('divisions','districts'));
    }

    public function store(Request $request)
    {	
        if (is_null($this->user) || !$this->user->can('patients.create')) {
            abort(403, "Sorry !! You are unauthorized to create any patients.");
        }

    	$this->validate($request, [
	        'first_name'  => 'required|max:30',
	        'last_name'   => 'required|max:30',
	        'email'       => 'required|max:100|email|unique:users',
	        'password'    => 'required|min:6|confirmed',
	        'phone'       => 'required|unique:users',
	        'division_id' => 'required',
	        'district_id' => 'required',
	        'address'     => 'required|max:100',
	    ]);

    	$user = new User();
    	$user->first_name     = $request->first_name;
    	$user->last_name      = $request->last_name;
    	$user->email          = $request->email;
    	$user->password       = Hash::make($request->password);
    	$user->phone          = $request->phone;
    	$user->division_id    = $request->division_id;
    	$user->district_id    = $request->district_id;
    	$user->address        = $request->address;
    	$user->profile_status = 1;
    	$user->ip_address     = $request->ip();
    	$user->save();

    	session()->flash('success', 'A new patient has added successfully.');
    	return redirect()->route('patients.index');
    }

    public function edit($id)
    {   
        if (is_null($this->user) || !$this->user->can('patients.edit')) {
            abort(403, "Sorry !! You are unauthorized to edit any patients.");
        }

    	$divisions = Division::orderBy('priority','asc')->get();
        $districts = District::orderBy('name','asc')->get();
        $user = User::find($id);

        if (!is_null($user)) {
        	return view('backend.pages.patients.edit',compact('divisions','districts','user'));
        } 
        else {
        	return redirect()->route('patients.index');
        }
    }

    public function update(Request $request, $id)
    {   
        if (is_null($this->user) || !$this->user->can('patients.edit')) {
            abort(403, "Sorry !! You are unauthorized to edit any patients.");
        }

    	$user = User::find($id);

        $this->validate($request, [
	        'first_name'  => 'required|max:30',
	        'last_name'   => 'required|max:30',
	        'email'       =>'required|string|email|max:100|unique:users,email,'.$user->id,
	        /*'password'    => 'required|min:6|confirmed',*/
	        'phone'       => 'required|max:15|unique:users,phone,'.$user->id,
	        'division_id' => 'required',
	        'district_id' => 'required',
	        'address'     => 'required|max:100',
	    ]);
    	
    	$user->first_name     = $request->first_name;
    	$user->last_name      = $request->last_name;
    	$user->email          = $request->email;
    	/*if($request->password != NULL || $request->password != ""){
            $user->password = Hash::make($request->password);
        }*/
    	$user->phone          = $request->phone;
    	$user->division_id    = $request->division_id;
    	$user->district_id    = $request->district_id;
    	$user->address        = $request->address;
    	$user->ip_address     = $request->ip();
    	$user->save();

    	session()->flash('success', 'User has updated successfully.');
    	return redirect()->route('patients.index');
    }

    public function destroy($id)
    {   
        if (is_null($this->user) || !$this->user->can('patients.delete')) {
            abort(403, "Sorry !! You are unauthorized to delete any patients.");
        }

        $user = User::find($id);

        if (!is_null($user)) {
            $user->delete();
        }

        session()->flash('success','Patient has deleted successfully.');
        return back();
    }
}
