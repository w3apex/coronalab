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
              <a class="btn btn-success text-white pull-right btn-sm" href="{{ route('complete.list') }}">All Complete Lists</a>
            </div>
        </div>
    </div>
</div>
<!-- page title area end -->
<div class="main-content-inner">
	<div class="row">
        <!-- data table start -->
        <div class="col-md-6 mt-5 offset-md-3">
        <table>
            <tr>
              <th>Full Name</th>
              <td>{{ $patient->user->first_name .' '.$patient->user->last_name }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ $patient->user->email }}</td>
            </tr>
            <tr>
                <th>Phone</th>
                <td>{{ $patient->user->phone}}</td>
            </tr>
            <tr>
                <th>Date of Birth</th>
                <td>{{ $patient->user->date_of_birth }}</td>
            </tr>
            <tr>
                <th>Gender</th>
                <td>{{ $patient->user->sex }}</td>
            </tr>
            <tr>
                <th>Booking Date</th>
                <td>{{ $patient->date }}</td>
            </tr>
            <tr>
                <th>Sample Collection Date</th>
                <td>{{ $patient->updated_at }}</td>
            </tr>
            <tr>
                <th>Report</th>
                <td>{{ $patient->report_status }}</td>
            </tr>
            <tr>
                <th>Gardian Name</th>
                <td>{{ $patient->user->gardian }}</td>
            </tr>
            <tr>
                <th>Gardian Phone</th>
                <td>{{ $patient->user->gardian_phone_number }}</td>
            </tr>
            <tr>
                <th>Address</th>
                <td>{{ $patient->user->address }}</td>
            </tr>
        </table>   
          {{-- <form action="" method="post">
            @csrf

            <div class="form-row">
              <div class="form-group col-md-12 col-sm-12">
                <label for="address">Address</label>
                <input type="text" class="form-control" id="address" value="" readonly>
              </div>
            </div>

            <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Update Result</button>
          </form> --}}
        </div>
        <!-- data table end -->
    </div>
</div>
@endsection

@section('scripts')

@endsection
