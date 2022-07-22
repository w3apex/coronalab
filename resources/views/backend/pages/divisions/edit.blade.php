@extends('backend.layouts.master')

@section('title')
	Division Edit - Admin Panel
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
                <h4 class="page-title pull-left">Divisions</h4>
                <ul class="breadcrumbs pull-left">
                    <li><a href="{{ route('admin.dashboard')}}">Dashboard</a></li>
                    <li><span>All Divisions</span></li>
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
                            <h4 class="">Edit Divisions</h4>
                        </div>
                        <div class="col-6">
                            <a class="btn btn-success text-white pull-right " href="{{ route('divisions.create')}}">Create new Division</a>
                        </div>
                    </div>
                    @include('backend.layouts.partials._messages')
                    <form action="{{ route('divisions.update', $division->id)}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="name">Division Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ $division->name}}" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                            <label for="priority">Division Priority</label>
                            <input type="text" class="form-control" id="priority" name="priority" value="{{ $division->priority}}" aria-describedby="emailHelp">
                        </div>
                        
                        <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Update</button>
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
