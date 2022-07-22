@extends('frontend.layouts.master')

@section('header-top')
    @include('frontend.layouts.partials._header-top')
@endsection

@section('content')
<section class="default-form-area pt-5  pb-5 bg-color">
    <div class="container">
        {{-- <div class="row">
            <div class="col-xl-8 offset-xl-2 mb-5">
                <div class="sec-secondary-title text-center">
                    <p style="font-size: 30px; color: #000;">Welcome to <strong>{{ $user->first_name}} {{ $user->last_name}}</strong></p>
                </div>
            </div>
        </div> --}}
        <div class="row">
            <div class="col-xl-6 offset-xl-3">
                <div class="card">
                    <div class="text-center py-4 px-5 overlay-box" style="background-image: url(images/big/img1.jpg);">
                        <div class="profile-photo pb-2">
                            <img src="{{asset('/backend/assets/images/author/avatar.png')}}" width="100" class="img-fluid rounded-circle" alt="">
                        </div>
                        <p style="font-size: 20px; color: #000;">Welcome to</strong></p>
                        <h4 class="mt-3 mb-1">{{ $user->first_name }} {{ $user->last_name }}</h4>
                        <p>{{ $user->email }}</p>
                    </div>
                    <ul class="list-group list-group-flush" style="padding: 0 30px">
                        <li class="list-group-item d-flex justify-content-between">
                            <strong class="mb-0">Gender:</strong> 
                            <span class="text-muted">{{ $user->sex }} </span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <strong class="mb-0">Age:</strong>      
                            <span class="text-muted">{{ $user->date_of_birth }}</span>
                        </li>
                        {{-- <li class="list-group-item d-flex justify-content-between">
                            <strong class="mb-0">Blood Group:</strong> 
                            <span class="text-muted">{{get_blood_group_list()[$user->blood_group]}}</span>
                        </li> --}}
                        <li class="list-group-item d-flex justify-content-between">
                            <strong class="mb-0">Phone:</strong>      
                            <span class="text-muted">+88{{ $user->phone }}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <strong class="mb-0">Gardian Name:</strong>      
                            <span class="text-muted">{{ $user->gardian }}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <strong class="mb-0">Address: </strong> 
                            <span class="text-muted">{{ $user->address }}</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection