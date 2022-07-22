<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Division;
use App\Models\District;
use Illuminate\Support\Facades\Auth;

class DistrictsController extends Controller
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
        if (is_null($this->user) || !$this->user->can('districts.index')) {
            abort(403,"Sorry !! You are unauthorized to view dashboard.");
        }

        $districts = District::orderBy('name','asc')->get();
        return view('backend.pages.districts.index',compact('districts'));
    }

    public function create()
    {	
        if (is_null($this->user) || !$this->user->can('districts.create')) {
            abort(403,"Sorry !! You are unauthorized to view dashboard.");
        }

    	$divisions = Division::orderBy('priority', 'asc')->get();
    	return view('backend.pages.districts.create',compact('divisions'));
    }

    public function store(Request $request)
    {	
        if (is_null($this->user) || !$this->user->can('districts.create')) {
            abort(403,"Sorry !! You are unauthorized to view dashboard.");
        }

    	$this->validate($request, [
	        'name'        => 'required|max:20',
	        'division_id' => 'required',
	    ],
		[
	    	'name.required' => 'please provide a district name.',
	    	'division_id.required'   => 'please provide a division ID.',
		]);

    	$district = new District();
    	$district->name = $request->name;
    	$district->division_id = $request->division_id;
    	$district->save();

    	session()->flash('success', 'A new district has added successfully.');
    	return redirect()->route('districts.index');
    }

    public function edit($id)
    {   
        if (is_null($this->user) || !$this->user->can('districts.edit')) {
            abort(403,"Sorry !! You are unauthorized to view dashboard.");
        }

    	$divisions = Division::orderBy('priority', 'asc')->get();
        $district  = District::find($id);

        if (!is_null($district)) {
        	return view('backend.pages.districts.edit',compact('district','divisions'));
        } 
        else {
        	return redirect()->route('districts.index');
        }
    }

    public function update(Request $request, $id)
    {   
        if (is_null($this->user) || !$this->user->can('districts.edit')) {
            abort(403,"Sorry !! You are unauthorized to view dashboard.");
        }

        $this->validate($request, [
	        'name'        => 'required|max:15',
	        'division_id' => 'required',
	    ],
		[
	    	'name.required' => 'please provide a district name.',
	    	'priority.required'   => 'please provide a district priority.',
		]);

    	$district = District::find($id);
    	$district->name        = $request->name;
    	$district->division_id = $request->division_id;
    	$district->save();

    	session()->flash('success', 'District has updated successfully.');
    	return redirect()->route('districts.index');
    }

    public function destroy($id)
    {   
        if (is_null($this->user) || !$this->user->can('districts.delete')) {
            abort(403,"Sorry !! You are unauthorized to view dashboard.");
        }

        $district = District::find($id);

        if (!is_null($district)) {
            $district->delete();
        }

        session()->flash('success','District has deleted successfully!!');
        return back();
    }
}