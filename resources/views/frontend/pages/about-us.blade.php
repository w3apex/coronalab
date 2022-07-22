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
                    <h2>About Us</h2>
                    <div class="bredcrums">
                        <span><a class="home" href="">Home</a></span> 
                        <span class="active">About</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('content')
<!-- ======= About Area Start ======= -->
<section class="about-area sec-padding section-bg-color">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-12 pb-30">
                <!-- Single About -->
                <div class="single-about">
                    <div class="single-about-info">
                        <div class="single-about-img">
                           <img src="{{ asset('frontend/img/about-img.png')}}" class="img-fluid" alt=""> 
                        </div>
                        <div class="single-about-box">
                            <div class="default-video-box">
                                <a class="ripple" href="https://www.youtube.com/watch?v=PEppsxIAMXY">
                                    <i class="flaticon-play-arrow"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--./ Single About -->
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12 pb-30">
                <!-- Single About Two -->
                <div class="single-about-two">
                    <h2 class="single-about-title pb-3">What is Coronavirus?</h2>
                    <p class="pb-20">Coronavirus disease (COVID-19) is an infectious disease caused by a newly discovered coronavirus. Most people infected with the COVID-19, virus will experience mild to moderate, respiratory illness & recover without requiring special treatment. Older people and those with underlying medical problem like cardiovascular disease.</p>
                    <p class="pb-30">The COVID-19 virus spread primarily through droplet of saliva or discharge from the nose when an infected person coughs or sneezes so it’s important that you also practice respiratory etiquette.</p>
                </div>
                <div class="symptoms row no-gutters"> 
                    <div class="single-symptoms media align-items-center col-sm"> 
                        <div class="icon"> 
                            <img src="{{ asset('frontend/img/icon/s-1.svg')}}" class="svg" alt=""> 
                        </div>
                        <div class="media-body">
                         <p>High Fever</p>
                     </div>
                    </div>
                    <div class="single-symptoms media align-items-center col-sm"> 
                        <div class="icon"> 
                            <img src="{{ asset('frontend/img/icon/s-2.svg')}}" class="svg" alt=""> 
                        </div>
                        <div class="media-body"> 
                            <p>Heavy Tiredness</p>
                        </div>
                    </div>
                    <div class="single-symptoms media align-items-center col-sm"> 
                        <div class="icon"> 
                            <img src="{{ asset('frontend/img/icon/s-3.svg')}}" class="svg" alt=""> 
                        </div>
                        <div class="media-body"> 
                            <p>Dry cough</p>
                        </div>
                    </div>
                </div>
                <!--./ Single About Two -->
            </div>
        </div>
    </div>
</section>
<!-- ======= About Area End ======= -->
@endsection