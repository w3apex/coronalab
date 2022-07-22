<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Division;
use Illuminate\Support\Facades\Auth;

class DivisionsController extends Controller
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
        if (is_null($this->user) || !$this->user->can('divisions.index')) {
            abort(403,"Sorry !! You are unauthorized to view dashboard.");
        }

        $divisions = Division::orderBy('priority','asc')->get();
        return view('backend.pages.divisions.index',compact('divisions'));
    }

    public function create()
    {	
        if (is_null($this->user) || !$this->user->can('divisions.create')) {
            abort(403,"Sorry !! You are unauthorized to create dashboard.");
        }

    	return view('backend.pages.divisions.create');
    }

    public function store(Request $request)
    {	
        if (is_null($this->user) || !$this->user->can('divisions.create')) {
            abort(403,"Sorry !! You are unauthorized to create dashboard.");
        }

    	$this->validate($request, [
	        'name'  => 'required|max:15',
	        'priority' => 'required',
	    ],
		[
	    	'name.required' => 'please provide a division name.',
	    	'priority.required'   => 'please provide a division priority.',
		]);

    	$division = new Division();
    	$division->name = $request->name;
    	$division->priority = $request->priority;
    	$division->save();

    	session()->flash('success', 'A new division has added successfully.');
    	return redirect()->route('divisions.index');
    }

    public function edit($id)
    {   
        if (is_null($this->user) || !$this->user->can('divisions.edit')) {
            abort(403,"Sorry !! You are unauthorized to create dashboard.");
        }

        $division = Division::find($id);

        if (!is_null($division)) {
        	return view('backend.pages.divisions.edit',compact('division'));
        } 
        else {
        	return redirect()->route('divisions.index');
        }
    }

    public function update(Request $request, $id)
    {   
        if (is_null($this->user) || !$this->user->can('divisions.edit')) {
            abort(403,"Sorry !! You are unauthorized to create dashboard.");
        }

        $this->validate($request, [
	        'name'  => 'required|max:15',
	        'priority' => 'required',
	    ],
		[
	    	'name.required' => 'please provide a division name.',
	    	'priority.required'   => 'please provide a division priority.',
		]);

    	$division = Division::find($id);
    	$division->name = $request->name;
    	$division->priority = $request->priority;
    	$division->save();

    	session()->flash('success', 'Division has updated successfully.');
    	return redirect()->route('divisions.index');
    }

    public function destroy($id)
    {   
        if (is_null($this->user) || !$this->user->can('divisions.delete')) {
            abort(403,"Sorry !! You are unauthorized to delete dashboard.");
        }

        $division = Division::find($id);
        /*if (!is_null($division)) {
            $division->delete();
        }*/

        if (!is_null($division)) {
            //Delete all the districts for this devision
            $districts = District::where('division_id', $division->id)->get();
            foreach ($districts as $district) {
                $district->delete();
            }
            $division->delete();
        }
        session()->flash('success','Division has deleted successfully.');
        return back();
    }

}
