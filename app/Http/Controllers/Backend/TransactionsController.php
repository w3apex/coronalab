<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TransactionsController extends Controller
{
    public function index()
    {	
    	return view('backend.pages.reports.index');
    }

    public function create()
    {	
    	return view('backend.pages.reports.create');
    }

    public function edit()
    {	
    	return view('backend.pages.reports.edit');
    }
}
