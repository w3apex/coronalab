<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Division;
use App\Models\District;
use App\Notifications\VerifyRegistration;
use Illuminate\Support\Str;

class RegisterController extends Controller
{

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * @Override
     * showRegistrationForm
     *
     *Display the registration form
     * 
     * @return void view
     */
    public function showRegistrationForm()
    {   
        $divisions = Division::orderBy('priority','asc')->get();
        $districts = District::orderBy('name','asc')->get();

        return view('auth.register', compact('divisions','districts'));
    }


    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'first_name'           => ['required', 'string', 'max:30'],
            'last_name'            => ['required', 'string', 'max:30'],
            'email'                => ['required', 'string', 'email', 'max:100', 'unique:users'],
            'password'             => ['required', 'string', 'min:6', 'confirmed'],
            //'sex'                  => ['nullable', 'string', 'max:6'],
            //'date_of_birth'        => ['nullable', 'date'],
            //'blood_group'          => ['nullable', 'string', 'max:3'],
            'phone'                => ['required', 'max:15'],
            //'gardian'              => ['nullable', 'string'],
            //'gardian_phone_number' => ['nullable', 'max:15'],
            'division_id'          => ['required', 'numeric'],
            'district_id'          => ['required', 'numeric'],
            'address'              => ['required', 'max:100'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function register(Request $request)
    {   
        $user =  User::create([
            'first_name'           => $request->first_name,
            'last_name'            => $request->last_name,
            'email'                => $request->email,
            'password'             => Hash::make($request->password),
            'phone'                => $request->phone,
            'division_id'          => $request->division_id,
            'district_id'          => $request->district_id,
            'address'              => $request->address,
            'ip_address'           => request()->ip(),
            //'rememberToken'        => Str::random(50),
        ]);

        $user->notify(new VerifyRegistration($user));
        session()->flash('success','A conformation email has sent to you... Please check and confirm your email.');
        return redirect('/');
    }
}
