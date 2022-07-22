@extends('frontend.layouts.master')

@section('header-top')
    @include('frontend.layouts.partials._header-top')
@endsection

@section('content')
<section class="default-form-area pt-5 bg-color">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 offset-xl-2 mb-5">
                <div class="sec-secondary-title text-center">
                    <h4>Book Appoinment</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-8 offset-xl-2">
                <div class="default-form">
                    <!-- consultation form -->
                    <form id="contact_form" action="{{ route('user.profile.update') }}" method="post">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="first_name" class="form-control" value="{{ $user->first_name }}">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="email" name="last_name" class="form-control" value="{{ $user->last_name }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="email" class="form-control" value="{{ $user->email }}">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="phone" class="form-control" value="{{ $user->phone }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <select class="form-control" name="blood_group">
                                        <option value="">Select blood group</option>
                                        @foreach (get_blood_group_list() as $key=>$item)
                                            <option value="{{$key}}" {{$key == $user->blood_group ? "selected" : ""}}>{{$key.'->'.$item}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <select class="form-control" name="sex">
                                        <option>Select Your Gender</option>
                                        <option value="male" {{$user->sex === "male" ? "selected" : ""}}>Male</option><br>
                                        <option value="female" {{$user->sex =="female" ? "selected" : ""}}>Female</option><br>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <select class="form-control" name="division_id" id="division_id" >
                                       <option value="">Please select your division</option>
                                       @foreach($divisions as $division)
                                        <option value="{{ $division->id}}" {{ $user->division_id == $division->id ? 'selected': '' }}>{{ $division->name}}</option>
                                       @endforeach
                                     </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <select class="form-control" name="district_id" id="district_id" >
                                       <option value="">Please select your division</option>
                                       @foreach($districts as $district)
                                        <option value="{{ $district->id}}" {{ $user->district_id == $district->id ? 'selected': '' }}>{{ $district->name}}</option>
                                       @endforeach
                                     </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <textarea name="form_message" class="form-control" rows="4" placeholder="Message">
                                        {{ $user->address }}
                                    </textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="" />
                                <button type="submit" class="btn default-btn" data-loading-text="Please wait...">Send your message</button>
                            </div>
                        </div>
                    </form><!--./ consultation form -->
                </div>
            </div>
        </div>
    </div>
</section>
@endsection