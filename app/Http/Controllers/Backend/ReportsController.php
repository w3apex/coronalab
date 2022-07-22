<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class ReportsController extends Controller
{
    public function index()
    {	
    	return view('backend.pages.transactions.index');
    }

    public function create()
    {	
    	return view('backend.pages.transactions.create');
    }

    public function edit()
    {	
    	return view('backend.pages.transactions.edit');
    }
}
