<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Division;
use App\Models\District;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{	

	/**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard()
    {	
        $user = Auth::user();
    	return view('frontend.pages.users.dashboard', compact('user'));
    }

    public function profile()
    {	
    	$divisions = Division::orderBy('priority','asc')->get();
        $districts = District::orderBy('name','asc')->get();
        
    	$user = Auth::user();
    	return view('frontend.pages.users.profile', compact('divisions','districts','user'));
    }

    public function profileUpdate(Request $request)
    {  
        $user = Auth::user();

        $this->validate($request,[
            'first_name'           => ['required', 'string', 'max:30'],
            'last_name'            => ['required', 'string', 'max:30'],
            'email'                => 'required|string|email|max:100|unique:users,email,'.$user->id,
            //'password'             => ['required', 'string', 'min:6', 'confirmed'],
            'sex'                  => ['nullable', 'string', 'max:6'],
            'date_of_birth'        => ['nullable'],
            'blood_group'          => ['nullable', 'string', 'max:3'],
            'phone'                => 'required|max:15|unique:users,phone,'.$user->id,
            'gardian'              => ['nullable', 'string'],
            'gardian_phone_number' => ['nullable', 'max:15'],
            'division_id'          => ['required', 'numeric'],
            'district_id'          => ['required', 'numeric'],
            'address'              => ['required', 'max:100'],
        ]);

        
        $user->first_name  = $request->first_name;
        $user->last_name   = $request->last_name;
        $user->email       = $request->email;
        $user->sex         = $request->sex;
        $user->date_of_birth = $request->date_of_birth;
        $user->blood_group = $request->blood_group;
        $user->division_id = $request->division_id;
        $user->district_id = $request->district_id;
        $user->phone       = $request->phone;
        $user->gardian     = $request->gardian;
        $user->gardian_phone_number = $request->gardian_phone_number;
        $user->address     = $request->address;
        /*if($request->password != NULL || $request->password != ""){
            $user->password = Hash::make($request->password);
        }*/
        $user->ip_address = request()->ip();
        $user->save();

        session()->flash('success', 'User profile has updated successfully.');
        return back();
    }
}
