<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Slider;
use Image;
use File;

class SlidersController extends Controller
{
    public function index()
    {   
        $sliders = Slider::orderBy('long_title','asc')->get();
        return view('backend.pages.sliders.index',compact('sliders'));
    }

    public function create()
    {	
    	return view('backend.pages.sliders.create');
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
	    	'short_title.required'=> 'please provide slider title.',
	    	'long_title.required' => 'please provide slider title.',
	    	'priority.required'   => 'please provide slider priority.',
	    	'image.required'      => 'please provide slider image.',
	    	'image.image'         => 'please provide a valide slider image.',
	    	'button_link.url'     => 'please provide a valid slider button link.',
		]);

    	$slider = new Slider();
    	$slider->short_title = $request->short_title;
    	$slider->long_title  = $request->long_title;
    	$slider->button_text = $request->button_text;
    	$slider->button_link = $request->button_link;
    	$slider->priority    = $request->priority;

    	//insert image also
    	if ($request->image != NULL) {
    		$image = $request->file('image');
    		$img = time().'.'.$image->getClientOriginalExtension();
    		$location = public_path('images/sliders/'.$img);
    		
            Image::make($image)->save($location);
    		$slider->image = $img;
    	}
    	$slider->save();

    	session()->flash('success', 'A new slider has added successfully.');
    	return redirect()->route('sliders.index');
    }

     public function edit($id)
    {   
        $slider = Slider::find($id);
        if (!is_null($slider)) {
        	return view('backend.pages.sliders.edit',compact('slider'));
        } else {
        	return redirect()->route('sliders.index');
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
	    	'title.required'   => 'please provide slider title.',
	    	'priority.required'=> 'please provide slider priority.',
	    	'button_link.url'  => 'please provide a valid slider button link.',
		]);

        $slider = Slider::find($id);
    	$slider->short_title = $request->short_title;
    	$slider->long_title  = $request->long_title;
    	$slider->button_link = $request->button_link;
    	$slider->priority    = $request->priority;

    	//insert image also
    	if ($request->image != NULL) {
    		// Delete the old image from directory
    		if (File::exists('images/sliders/'.$slider->image)) {
    			File::delete('images/sliders/'.$slider->image);
    		}

    		$image = $request->file('image');
    		$img = time().'.'.$image->getClientOriginalExtension();
    		$location = public_path('images/sliders/'.$img);
    		Image::make($image)->save($location);
    		$slider->image = $img;
    	}
    	$slider->save();

    	session()->flash('success', 'Slider has updated successfully.');
    	return redirect()->route('sliders.index');
    }

    public function destroy($id)
    {
        $slider = Slider::find($id);
        if (!is_null($slider)) {
            $slider->delete();
        }
        session()->flash('success','Slider has deleted successfully!!');
        return back();
    }



}
