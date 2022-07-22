@extends('frontend.layouts.master')

@section('header-top')
    @include('frontend.layouts.partials._header-top')
@endsection

@section('content')
<section class="default-form-area pt-5 pb-5 bg-color">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 offset-xl-2 mb-5">
                <div class="sec-secondary-title text-center">
                    <p style="font-size: 25px; color: #000;">Profile of <strong>{{ $user->first_name}} {{ $user->last_name}}</strong></p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="default-form">
                    <form method="post" action="{{ route('user.profile.update') }}">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="first_name" class="col-form-label">First Name</label>
                                
                                    <input id="first_name" type="text" class="form-control" name="first_name" value="{{ $user->first_name }}">

                                    @error('first_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="last_name" class="col-form-label">Last Name</label>
                                
                                    <input id="last_name" type="text" class="form-control" name="last_name" value="{{ $user->last_name }}">

                                    @error('last_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="email" class="col-form-label">E-Mail Address</label>
                                    <input id="email" type="email" class="form-control" name="email" value="{{ $user->email }}">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phone" class="col-form-label">Phone</label>
                                    <input id="phone" type="text" class="form-control" name="phone" value="{{ $user->phone }}">

                                    @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="date_of_birth" class="col-form-label">Age</label>

                                    <input id="date_of_birth" type="text" class="form-control" name="date_of_birth" value="{{ $user->date_of_birth }}">

                                    @error('date_of_birth')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                           <div class="col-md-6">
                                <div class="form-group">
                                    <label for="sex" class="col-form-label">Gender</label>
                                    <select class="form-control" name="sex">
                                        <option>Select Your Gender</option>
                                        <option value="male" {{$user->sex === "male" ? "selected" : ""}}>Male</option><br>
                                        <option value="female" {{$user->sex =="female" ? "selected" : ""}}>Female</option><br>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="blood_group" class="col-form-label">Blood Group</label>
                                    <select class="form-control" name="blood_group">
                                        <option value="">Select blood group</option>
                                        @foreach (get_blood_group_list() as $key=>$item)
                                            <option value="{{$key}}" {{$key == $user->blood_group ? "selected" : "" }}>{{$item}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">

                            </div>
                            <div class="col-md-6">

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="gardian" class="col-form-label">Gardian Name</label>
                                    <input id="gardian" type="text" class="form-control" name="gardian" value="{{ $user->gardian }}">
                                    @error('gardian')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="gardian_phone_number" class="col-form-label">Gardian Phone Number</label>
                                    <input id="gardian_phone_number" type="text" class="form-control" name="gardian_phone_number" value="{{ $user->gardian_phone_number }}">

                                    @error('gardian_phone_number')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="division_id" class="col-form-label">Division</label>
                                    <select class="form-control" name="division_id" id="division_id" >
                                        <option value="">Please select your division</option>
                                        @foreach($divisions as $division)
                                            <option value="{{ $division->id}}" {{ $user->division_id == $division->id ? 'selected': '' }}>{{ $division->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('division_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror   
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="district_id" class="col-form-label">District</label>
                                    <select class="form-control" name="district_id" id="district_id" >
                                       <option value="">Please select your division</option>
                                       @foreach($districts as $district)
                                        <option value="{{ $district->id}}" {{ $user->district_id == $district->id ? 'selected': '' }}>{{ $district->name}}</option>
                                       @endforeach
                                    </select>
                                    @error('district_id')
                                        <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>  

                        <div class="form-group">
                            <label for="address" class="col-form-label">Street Address</label>

                            <textarea name="address" class="form-control" rows="4">
                                {{ $user->address }}
                            </textarea>
                            
                            @error('address')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn default-btn">
                                    {{ __('Update') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection


