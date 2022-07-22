@extends('frontend.layouts.master')

@section('header-top')
    @include('frontend.layouts.partials._header-top')
@endsection

@section('content')
<section class="default-form-area pt-5  pb-5 bg-color">
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
                    <form id="contact_form" action="{{ route('booking.submit') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label">Full Name</label>
                                    <input type="text" class="form-control" value="{{ $user->first_name }} {{ $user->last_name }}" readonly>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label">Gardian Name</label>
                                    <input type="email" name="last_name" class="form-control" value="{{$user->gardian}}" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label">Email</label>
                                    <input type="email" name="last_name" class="form-control" value="{{$user->email}}" readonly>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label">Phone Number</label>
                                    <input type="text" class="form-control" value="{{$user->phone}}" readonly >
                                </div>
                            </div>
                            
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label">Age</label>
                                    <input type="text" class="form-control" value="{{$user->date_of_birth}}" readonly >
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label">Gender</label>
                                    <input type="text" class="form-control" value="{{$user->sex}}" readonly>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            {{-- <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label">Blood Group</label>
                                    <input type="text" class="form-control" value="{{get_blood_group_list()[$user->blood_group]}}" readonly>
                                </div>
                            </div> --}}
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label">Available Appoinment Dates</label>
                                    <select class="form-control" name="date">
                                        <option>Select Appoinment Date</option>
                                        @foreach($everyMonth as $date)
                                        <option value="{{$date}}">{{$date}}</option><br>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <textarea class="form-control" rows="3">
                                        {{$user->address}}
                                    </textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="" />
                                <button type="submit" class="btn default-btn" data-loading-text="Please wait...">Submit</button>
                            </div>
                        </div>
                    </form><!--./ consultation form -->
                </div>
            </div>
        </div>
    </div>
</section>
@endsection