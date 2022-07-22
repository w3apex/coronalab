@extends('backend.layouts.master')

@section('title')
    Dashboard - Admin Panel
@endsection

@section('admin-content')
<!-- page title area start -->
<div class="page-title-area">
    <div class="row align-items-center">
        <div class="col-sm-6">
            <div class="breadcrumbs-area clearfix">
                <h4 class="page-title pull-left">Dashboard</h4>
                <ul class="breadcrumbs pull-left">
                    <li><a href="{{route('admin.dashboard')}}">Home</a></li>
                    <li><span>Dashboard</span></li>
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
        <!-- seo fact area start -->
        <div class="col-lg-12">
            <div class="row">
                <div class="col-md-4 mt-4 mb-3">
                    <div class="card">
                        <div class="seo-fact sbg1">
                            <div class="p-4 d-flex justify-content-between align-items-center">
                                <div class="seofct-icon"><i class="ti-thumb-up"></i> Patient Tested</div>
                                <h2>{{$total_patients}}</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-md-4 mb-3">
                    <div class="card">
                        <div class="seo-fact sbg3">
                            <div class="p-4 d-flex justify-content-between align-items-center">
                                <div class="seofct-icon"><i class="ti-share"></i> Positive</div>
                                <h2>{{ $total_positives}}</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-md-4 mb-3">
                    <div class="card">
                        <div class="seo-fact sbg2">
                            <div class="p-4 d-flex justify-content-between align-items-center">
                                <div class="seofct-icon"><i class="ti-share"></i> Negative</div>
                                <h2>{{ $total_negatives}}</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-md-4 mb-3">
                    <div class="card">
                        <div class="seo-fact sbg4">
                            <a href="{{ route('admins.index')}}">
                                <div class="p-4 d-flex justify-content-between align-items-center">
                                    <div class="seofct-icon"><i class="ti-share"></i> Doctors</div>
                                    <h2>30</h2>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-md-4 mb-3">
                    <div class="card">
                        <div class="seo-fact sbg1">
                            <a href="{{ route('admins.index')}}">
                                <div class="p-4 d-flex justify-content-between align-items-center">
                                    <div class="seofct-icon"><i class="ti-share"></i> Lab Technologist</div>
                                    <h2>12</h2>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-md-4 mb-3">
                    <div class="card">
                        <div class="seo-fact sbg4">
                            <a href="{{ route('admins.index')}}">
                                <div class="p-4 d-flex justify-content-between align-items-center">
                                    <div class="seofct-icon"><i class="ti-share"></i> Nurses</div>
                                    <h2>101</h2>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-md-4 mb-3">
                    <div class="card">
                        <div class="seo-fact sbg1">
                            <a href="{{ route('admins.index')}}">
                                <div class="p-4 d-flex justify-content-between align-items-center">
                                    <div class="seofct-icon"><i class="ti-share"></i> Admins</div>
                                    <h2>{{ $total_admins}}</h2>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-md-4 mt-md-4 mb-3">
                    <div class="card">
                        <div class="seo-fact sbg1">
                            <div class="p-4 d-flex justify-content-between align-items-center">
                                <div class="seofct-icon"><i class="ti-share"></i> Doctors</div>
                                <h2>5</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-md-4 mb-3">
                    <div class="card">
                        <div class="seo-fact sbg2">
                            <div class="p-4 d-flex justify-content-between align-items-center">
                                <div class="seofct-icon"><i class="ti-share"></i> Lab Technitians</div>
                                <h2>3</h2>
                            </div>
                        </div>
                    </div>
                </div> -->
                <div class="col-md-4 mt-md-4 mb-3">
                    <div class="card">
                        <div class="seo-fact sbg2">
                            <a href="{{ route('roles.index')}}">
                                <div class="p-4 d-flex justify-content-between align-items-center">
                                    <div class="seofct-icon"><i class="ti-share"></i> Roles</div>
                                    <h2>{{ $total_roles}}</h2>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-md-4 mb-3">
                    <div class="card">
                        <div class="seo-fact sbg1">
                            <div class="p-4 d-flex justify-content-between align-items-center">
                                <div class="seofct-icon"><i class="ti-share"></i> Permissions</div>
                                <h2>{{$total_permissions}}</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- seo fact area end -->
    </div>
</div>
@endsection