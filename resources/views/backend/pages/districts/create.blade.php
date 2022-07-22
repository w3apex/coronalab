@extends('backend.layouts.master')

@section('title')
	District Create - Admin Panel
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
                <h4 class="page-title pull-left">Districts</h4>
                <ul class="breadcrumbs pull-left">
                    <li><a href="{{ route('admin.dashboard')}}">Dashboard</a></li>
                    <li><span>All Districts</span></li>
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
                            <h4 class="">Add New District</h4>
                        </div>
                        <div class="col-6">
                            <a class="btn btn-success text-white pull-right" href="{{ route('districts.index')}}">All District</a>
                        </div>
                    </div>
                    @include('backend.layouts.partials._messages')
                    <form action="{{ route('districts.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="name">District Name</label>
                            <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp" placeholder="Enter division name">
                        </div>
                        <div class="form-group">
                            <label for="division_id">Select a Division for this district</label>
                            <select class="form-control" name="division_id">
                                @foreach($divisions as $division)
                                    <option value="{{ $division->id }}">{{ $division->name }}</option>
                                @endforeach
                            </select>
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
