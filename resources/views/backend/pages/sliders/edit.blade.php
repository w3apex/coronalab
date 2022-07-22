@extends('backend.layouts.master')

@section('title')
	Slider Edit - Admin Panel
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
                <h4 class="page-title pull-left">Sliders</h4>
                <ul class="breadcrumbs pull-left">
                    <li><a href="{{ route('admin.dashboard')}}">Dashboard</a></li>
                    <li><span>All Sliders</span></li>
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
                            <h4 class="">Edit Sliders</h4>
                        </div>
                        <div class="col-6">
                            <a class="btn btn-success text-white pull-right " href="{{ route('sliders.create')}}">Create new Slider</a>
                        </div>
                    </div>
                    @include('backend.layouts.partials._messages')
                    <form action="{{ route('sliders.update', $slider->id)}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="short_title">Short Title</label>
                            <input type="text" class="form-control" id="short_title" name="short_title" aria-describedby="emailHelp" value="{{ $slider->short_title }}">
                        </div>
                        <div class="form-group">
                            <label for="long_title">Short Title</label>
                            <input type="text" class="form-control" id="long_title" name="long_title" value="{{ $slider->long_title }}">
                        </div>

                        <div class="form-group">
                            <label for="image" class="col-sm-3 control-label">Slider Image</label>
                            <div  class="col-sm-9">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <input type="file" class="form-control" name="image" id="image">
                                    </div>
                                    <div class="col-sm-4">
                                        @if($slider->image)
                                        <img src="{{ asset('images/sliders/'. $slider->image)}}" width="140" height="70">
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="priority">Slider Priority</label>
                            <input type="text" class="form-control" id="priority" name="priority" value="{{ $slider->priority}}" aria-describedby="emailHelp">
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
