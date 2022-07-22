<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;

class PagesController extends Controller
{
    public function index()
    {	
    	$sliders = Slider::orderBy('priority','asc')->get();
    	return view('frontend.pages.index',compact('sliders'));
    }

    public function aboutUs()
    {
    	return view('frontend.pages.about-us');
    }

    public function service()
    {
    	return view('frontend.pages.service');
    }

    public function doctor()
    {
    	return view('frontend.pages.doctor');
    }

    public function blog()
    {
    	return view('frontend.pages.blog');
    }

    public function appoinment()
    {
        return view('frontend.pages.appoinment');
    }

    public function contactUs()
    {
    	return view('frontend.pages.contact-us');
    }


}
