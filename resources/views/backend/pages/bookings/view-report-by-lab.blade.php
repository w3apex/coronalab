@extends('backend.layouts.master')

@section('title')
	View Report - Admin Panel
@endsection

@section('styles')
@endsection

@section('admin-content')
<!-- page title area start -->
<div class="page-title-area">
    <div class="row align-items-center">
        <div class="col-sm-6">
            <div class="breadcrumbs-area clearfix">
                <h4 class="page-title pull-left">Report View</h4>
                <ul class="breadcrumbs pull-left">
                    <li><a href="{{ route('admin.dashboard')}}">Dashboard</a></li>
                    <li><span>Report View</span></li>
                </ul>
            </div>
        </div>
        <div class="col-sm-6 clearfix">
            <div class="pull-right">
              <a class="btn btn-success text-white pull-right btn-sm" href="{{ route('collected.list') }}">All Collected Lists</a>
            </div>
        </div>
    </div>
</div>
<!-- page title area end -->
<div class="main-content-inner">
	<div class="row">
        <!-- data table start -->
        <div class="col-md-6 mt-5 offset-md-3">
          <form action="{{ route('diagnosis.result', $patient->id)}}" method="post">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6 col-sm-12">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" value="{{ $patient->user->first_name .' '.$patient->user->last_name }}" readonly>
                </div>
                <div class="form-group col-md-6 col-sm-12">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email" value="{{ $patient->user->email }}" readonly>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6 col-sm-12">
                    <label for="phone">Phone</label>
                    <input type="text" class="form-control" id="phone" value="{{ $patient->user->phone}}" readonly>
                </div>
                <div class="form-group col-md-6 col-sm-12">
                    <label for="date_of_birth">Age</label>
                    <input type="text" class="form-control" id="date_of_birth" value="{{ $patient->user->date_of_birth }}"  readonly>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6 col-sm-12">
                    <label for="blood_group">Blood Group</label>
                    <input type="text" class="form-control" id="blood_group" value="{{ $patient->user->blood_group}}" readonly>
                </div>
                <div class="form-group col-md-6 col-sm-12">
                    <label for="sex">Gender</label>
                    <input type="text" class="form-control" id="sex" value="{{ $patient->user->sex}}" readonly>
                </div>
            </div>

            <div class="form-row">
              <div class="form-group col-md-12 col-sm-12">
                  <label for="report_status">Gender</label>
                  <select name="report_status" class="form-control">
                    <option value="negative">Negative</option>
                    <option value="positive">Positive</option>
                  </select>
              </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6 col-sm-12">
                    <label for="gardian">Gardian Name</label>
                    <input type="text" class="form-control" id="gardian" value="{{ $patient->user->gardian}}" readonly>
                </div>
                <div class="form-group col-md-6 col-sm-12">
                    <label for="gardian_phone_number">Gardian Phone</label>
                    <input type="text" class="form-control" id="gardian_phone_number" value="{{ $patient->user->gardian_phone_number }}" readonly>
                </div>
            </div>

            <div class="form-row">
              <div class="form-group col-md-12 col-sm-12">
                <label for="address">Address</label>
                <input type="text" class="form-control" id="address" value="{{ $patient->user->address}}" readonly>
              </div>
            </div>

            <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Update Result</button>
          </form>
        </div>
        <!-- data table end -->
    </div>
</div>
@endsection

@section('scripts')

@endsection
