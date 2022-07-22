@extends('backend.layouts.master')

@section('title')
	Service Create - Admin Panel
@endsection

@section('styles')
	<style>
        .form-check-label { text-transform: capitalize; }  
    </style>
@endsection

@section('admin-content')
<!-- page title area start -->
<div class="page-title-area">
    <div class="row align-items-center">
        <div class="col-sm-6">
            <div class="breadcrumbs-area clearfix">
                <h4 class="page-title pull-left">Services</h4>
                <ul class="breadcrumbs pull-left">
                    <li><a href="{{ route('admin.dashboard')}}">Dashboard</a></li>
                    <li><span>All Services</span></li>
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
                            <h4 class="">Create new Service</h4>
                        </div>
                        <div class="col-6">
                            <a class="btn btn-success text-white pull-right " href="{{ route('services.index')}}">All Service</a>
                        </div>
                    </div>
                    @include('backend.layouts.partials._messages')
                    <form action="{{ route('services.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="short_title">Short Title</label>
                            <input type="text" class="form-control" id="short_title" name="short_title" aria-describedby="emailHelp" placeholder="Enter service short title">
                        </div>
                        <div class="form-group">
                            <label for="long_title">Short Title</label>
                            <input type="text" class="form-control" id="long_title" name="long_title" placeholder="Enter service long title">
                        </div>
                        <div class="form-group">
                            <label for="image">Image</label>
                            <input type="file" class="form-control" id="image" name="image">
                        </div>
                        <div class="form-group">
                            <label for="priority">service Priority</label>
                            <input type="text" class="form-control" id="priority" name="priority" aria-describedby="emailHelp" placeholder="Enter division priority">
                        </div>
                        
                        <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Save</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- data table end -->
    </div>
</div>
@endsection

@section('scripts')
    {{-- @include('backend.pages.roles.partials._scripts'); --}}
@endsection
