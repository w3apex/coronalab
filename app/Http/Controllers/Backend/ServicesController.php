<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Service;
use Image;
use File;

class ServicesController extends Controller
{
    public function index()
    {   
        $services = Service::orderBy('long_title','asc')->get();
        return view('backend.pages.services.index',compact('services'));
    }

    public function create()
    {	
    	return view('backend.pages.services.create');
    }

    public function store(Request $request)
    {	
    	$this->validate($request, [
	        'short_title' => 'required|max:255',
	        'long_title'  => 'required|max:255',
	        'image'       => 'required|image',
	        'priority'    => 'required',
	        'button_link' => 'nullable|url',
	    ],
		[
	    	'short_title.required'=> 'please provide service title.',
	    	'long_title.required' => 'please provide service title.',
	    	'priority.required'   => 'please provide service priority.',
	    	'image.required'      => 'please provide service image.',
	    	'image.image'         => 'please provide a valide service image.',
	    	'button_link.url'     => 'please provide a valid service button link.',
		]);

    	$service = new Service();
    	$service->short_title = $request->short_title;
    	$service->long_title  = $request->long_title;
    	$service->button_text = $request->button_text;
    	$service->button_link = $request->button_link;
    	$service->priority    = $request->priority;

    	//insert image also
    	if ($request->image != NULL) {
    		$image = $request->file('image');
    		$img = time().'.'.$image->getClientOriginalExtension();
    		$location = public_path('images/services/'.$img);
    		
            Image::make($image)->save($location);
    		$service->image = $img;
    	}
    	$service->save();

    	session()->flash('success', 'A new service has added successfully.');
    	return redirect()->route('services.index');
    }

     public function edit($id)
    {   
        $service = Service::find($id);
        if (!is_null($service)) {
        	return view('backend.pages.services.edit',compact('service'));
        } else {
        	return redirect()->route('services.index');
        }
    }

    public function update(Request $request, $id)
    {   
        $this->validate($request, [
	        'short_title' => 'required|max:255',
	        'long_title'  => 'required|max:255',
	        'image'       => 'nullable|image',
	        'priority'    => 'required',
	        'button_link' => 'nullable|url',
	    ],
		[
	    	'title.required'   => 'please provide service title.',
	    	'priority.required'=> 'please provide service priority.',
	    	'button_link.url'  => 'please provide a valid service button link.',
		]);

        $service = Service::find($id);
    	$service->short_title = $request->short_title;
    	$service->long_title  = $request->long_title;
    	$service->button_link = $request->button_link;
    	$service->priority    = $request->priority;

    	//insert image also
    	if ($request->image != NULL) {
    		// Delete the old image from directory
    		if (File::exists('images/services/'.$service->image)) {
    			File::delete('images/services/'.$service->image);
    		}

    		$image = $request->file('image');
    		$img = time().'.'.$image->getClientOriginalExtension();
    		$location = public_path('images/services/'.$img);
    		Image::make($image)->save($location);
    		$service->image = $img;
    	}
    	$service->save();

    	session()->flash('success', 'Service has updated successfully.');
    	return redirect()->route('services.index');
    }

    public function destroy($id)
    {
        $service = Service::find($id);
        if (!is_null($service)) {
            $service->delete();
        }
        session()->flash('success','Service has deleted successfully!!');
        return back();
    }



}
