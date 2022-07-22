@extends('backend.layouts.master')

@section('title')
	Bookings - Admin Panel
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
                <h4 class="page-title pull-left">Booking</h4>
                <ul class="breadcrumbs pull-left">
                    <li><a href="{{ route('admin.dashboard')}}">Dashboard</a></li>
                    <li><span>All Bookings</span></li>
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
                            <h4 class="">Edit Bookings</h4>
                        </div>
                        <div class="col-6">
                            <a class="btn btn-success text-white pull-right " href="{{ route('reports.index')}}">All Bookings</a>
                        </div>
                    </div>
                    @include('backend.layouts.partials._messages')
                    <form action="" method="post">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6 col-sm-12">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" aria-describedby="nameHelp" value="">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Update Booking</button>
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
