@extends('frontend.layouts.master')

@section('header-top')
    @include('frontend.layouts.partials._header-top')
@endsection

@section('breadcrumb')
<section class="page-title d-flex align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-title-content text-center">
                    <h2>Service Us</h2>
                    <div class="bredcrums">
                        <span><a class="home" href="">Home</a></span> 
                        <span class="active">Services</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('content')
<section class="service-area sec-padding">
    <div class="container">
        <div class="row ">

            <div class="col-xl-4">
                <!-- single practice -->
                <div class="single-service">
                    <div class="service-img">
                        <img src="{{ asset('frontend/img/service/01.jpg')}}" alt="">
                    </div>
                    <div class="service-info">
                        <div class="service-icon">
                            <i class="flaticon-plan"></i>
                            <h5 class="service-title fw-semi-bold text-capitalize">Medical Treatment</h5>
                        </div>
                        <p class="text-white">Mauris scelerisque ut ipsum id vulputate. Nulla laoreet, ligula vel congue ultricies, nibh ipsum egestas ipsum nunc.</p>
                        <a href="service-single.html" class="default-btn fw-light">Read More</a>
                    </div>
                </div>
                <!--./ single practice -->
            </div>

            <div class="col-xl-4">
                <!-- single practice -->
                <div class="single-service">
                    <div class="service-img">
                        <img src="{{ asset('frontend/img/service/02.jpg')}}" alt="">
                    </div>
                    <div class="service-info">
                        <div class="service-icon">
                            <i class="flaticon-research"></i>
                            <h5 class="service-title fw-semi-bold text-capitalize">Social Awareness</h5>
                        </div>
                        <p class="text-white">Mauris scelerisque ut ipsum id vulputate. Nulla laoreet, ligula vel congue ultricies, nibh ipsum egestas ipsum nunc.</p>
                        <a href="service-single.html" class="default-btn fw-light">Read More</a>
                    </div>                        
                </div>
                <!--./ single practice -->
            </div>
            <div class="col-xl-4">
                <!-- single practice -->
                <div class="single-service">
                    <div class="service-img">
                        <img src="{{ asset('frontend/img/service/03.jpg')}}" alt="">
                    </div>
                    <div class="service-info">
                        <div class="service-icon">
                            <i class="flaticon-analytics"></i>
                            <h5 class="service-title fw-semi-bold text-capitalize">Corona Viras Test</h5>
                        </div>
                        <p class="text-white">Mauris scelerisque ut ipsum id vulputate. Nulla laoreet, ligula vel congue ultricies, nibh ipsum egestas ipsum nunc.</p>
                        <a href="service-single.html" class="default-btn fw-light">Read More</a>
                    </div>    
                </div>
                <!--./ single practice -->
            </div>
            <div class="col-xl-4 pt-30">
                <!-- single practice -->
                <div class="single-service">
                        <div class="service-img">
                            <img src="{{ asset('frontend/img/service/04.jpg')}}" alt="">
                        </div>
                        <div class="service-info">
                            <div class="service-icon">
                                <i class="flaticon-investment"></i>
                                <h5 class="service-title fw-semi-bold text-capitalize">Hearth Advice</h5>
                            </div>
                            <p class="text-white">Mauris scelerisque ut ipsum id vulputate. Nulla laoreet, ligula vel congue ultricies, nibh ipsum egestas ipsum nunc.</p>
                            <a href="service-single.html" class="default-btn fw-light">Read More</a>
                        </div>
                        
                    </div>
                <!--./ single practice -->
            </div>
            <div class="col-xl-4 pt-30">
                <!-- single practice -->
                <div class="single-service">
                        <div class="service-img">
                            <img src="{{ asset('frontend/img/service/05.jpg')}}" alt="">
                        </div>
                        <div class="service-info">
                            <div class="service-icon">
                                <i class="flaticon-brain"></i>
                                <h5 class="service-title fw-semi-bold text-capitalize">Ambulance Service</h5>
                            </div>
                            <p class="text-white">Mauris scelerisque ut ipsum id vulputate. Nulla laoreet, ligula vel congue ultricies, nibh ipsum egestas ipsum nunc.</p>
                            <a href="service-single.html" class="default-btn fw-light">Read More</a>
                        </div>
                        
                    </div>
                <!--./ single practice -->
            </div>
            <div class="col-xl-4 pt-30">
                <!-- single practice -->
                <div class="single-service">
                        <div class="service-img">
                            <img src="{{ asset('frontend/img/service/06.jpg')}}" alt="">
                        </div>
                        <div class="service-info">
                            <div class="service-icon">
                                <i class="flaticon-management"></i>
                                <h5 class="service-title fw-semi-bold text-capitalize">Online Consulting</h5>
                            </div>
                            <p class="text-white">Mauris scelerisque ut ipsum id vulputate. Nulla laoreet, ligula vel congue ultricies, nibh ipsum egestas ipsum nunc.</p>
                            <a href="service-single.html" class="default-btn fw-light">Read More</a>
                        </div>
                        
                    </div>
                <!--./ single practice -->
            </div>
        </div>
    </div>
</section>
@endsection