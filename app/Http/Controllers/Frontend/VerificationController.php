<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;

class VerificationController extends Controller
{
    public function verify($token)
    {
    	$user = User::where('rememberToken', $token)->first();
    	if (!is_null($user)) {
    		$user->profile_status = 1;
    		$user->rememberToken = NULL;
    		$user->save();

	    	session()->flash('success','You are registered successfully !! Login now.');
	    	return redirect('login');
    	} 
    	else {
    		session()->flash('errors','Sorry !! your token is not matched.');
	    	return redirect('/');
    	}

    }
}
