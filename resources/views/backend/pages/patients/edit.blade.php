@extends('backend.layouts.master')

@section('title')
	Edit Patients - Admin Panel
@endsection

@section('styles')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <style>
        .form-check-label {
            text-transform: capitalize;
        }
    </style>
@endsection

@section('admin-content')
<!-- page title area start -->
<div class="page-title-area">
    <div class="row align-items-center">
        <div class="col-sm-6">
            <div class="breadcrumbs-area clearfix">
                <h4 class="page-title pull-left">Patients</h4>
                <ul class="breadcrumbs pull-left">
                    <li><a href="{{ route('admin.dashboard')}}">Dashboard</a></li>
                    <li><span>All Patients</span></li>
                </ul>
            </div>
        </div>
        <div class="col-sm-6 clearfix">
            <div class="pull-right"></div>
        </div>
    </div>
</div>
<!-- page title area end -->
<div class="main-content-inner">
    <div class="row">
        <!-- data table start -->
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body">
                    <div class="row header-title">
                        <div class="col-6">
                            <h4>Patient Edit</h4>
                        </div>
                        <div class="col-6">
                            <a class="btn btn-success text-white pull-right " href="{{ route('patients.index')}}">All Patients</a>
                        </div>
                    </div>
                    @include('backend.layouts.partials._messages')
                    <form action="{{ route('patients.update',$user->id)}}" method="post">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6 col-sm-12">
                                <label for="first_name">First Name</label>
                                <input type="text" class="form-control" id="first_name" name="first_name" aria-describedby="nameHelp" value="{{ $user->first_name}}">
                            </div>
                            <div class="form-group col-md-6 col-sm-12">
                                <label for="last_name">Last Name</label>
                                <input type="text" class="form-control" id="last_name" name="last_name" aria-describedby="nameHelp" value="{{ $user->last_name}}">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6 col-sm-12">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" aria-describedby="nameHelp" value="{{ $user->email }}">
                            </div>
                            <div class="form-group col-md-6 col-sm-12">
                                <label for="phone">Phone Number</label>
                                <input type="text" class="form-control" id="phone" name="phone" aria-describedby="nameHelp" placeholder="Enter phone" value="{{ $user->phone }}">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6 col-sm-12">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password" aria-describedby="nameHelp" placeholder="Enter password">
                            </div>
                            <div class="form-group col-md-6 col-sm-12">
                                <label for="password_confirmation">Confirm Password</label>
                                <input type="text" class="form-control" id="password_confirmation" name="password_confirmation" aria-describedby="nameHelp" placeholder="Enter confirmation password">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6 col-sm-12">
                                <label for="password_confirmation">Division</label>
                                <select class="form-control" name="division_id" id="division_id" >
                                    <option value="">Please select your division</option>
                                        @foreach($divisions as $division)
                                    <option value="{{ $division->id}}" {{ $division->id == $user->division->id ? 'selected': '' }}>{{ $division->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-6 col-sm-12">
                                <label for="password_confirmation">District</label>
                                <select class="form-control" name="district_id" id="district_id" >
                                    <option value="">Please select your division</option>
                                    @foreach($districts as $district)
                                        <option value="{{ $district->id}}" {{ $district->id == $user->district->id ? 'selected': '' }}>{{ $district->name}}</option>
                                    @endforeach
                                 </select>
                            </div>
                        </div>
                        <div class="form-group col-md-12 col-sm-12">
                            <label for="address">Address</label>
                            <textarea class="form-control" id="address" name="address">{{ $user->address}}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Update Patient</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- data table end -->
    </div>
</div>
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.select2').select2();
        });     
    </script>
@endsection
