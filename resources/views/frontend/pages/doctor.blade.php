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
                    <h2>Doctors</h2>
                    <div class="bredcrums">
                        <span><a class="home" href="">Home</a></span> 
                        <span class="active">Doctors</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('content')
<section class="team-area sec-padding">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 pb-30">
                <article class="text-center single-team">
                    <!-- single team -->
                    <div class="team-img">
                       <img src="{{ asset('frontend/img/team/01.jpg')}}" class="img-fluid" alt="">
                    </div>
                    <div class="team-info">
                        <h5 class="team-title text-capitalize">Jason Martinez</h5>
                        <span>Seneor Consultant</span>
                        <div class="social-network">
                            <ul>
                                <li><a href=""><i class="icofont-facebook"></i></a></li>
                                <li><a href=""><i class="icofont-twitter"></i></a></li>
                                <li><a href=""><i class="icofont-linkedin"></i></a></li>
                                <li><a href=""><i class="icofont-pinterest"></i></a></li>
                                <li><a href=""><i class="icofont-vimeo"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!--./ single team -->
                </article>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 pb-30">
                <article class="text-center single-team">
                    <!-- single team -->
                    <div class="team-img">
                       <img src="{{ asset('frontend/img/team/02.jpg')}}" class="img-fluid" alt="">
                    </div>
                    <div class="team-info">
                        <h5 class="team-title text-capitalize">Jason Martinez</h5>
                        <span>Virus Expert</span>
                        <div class="social-network">
                            <ul>
                                <li><a href=""><i class="icofont-facebook"></i></a></li>
                                <li><a href=""><i class="icofont-twitter"></i></a></li>
                                <li><a href=""><i class="icofont-linkedin"></i></a></li>
                                <li><a href=""><i class="icofont-pinterest"></i></a></li>
                                <li><a href=""><i class="icofont-vimeo"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!--./ single team -->
                </article>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 pb-30">
                <article class="text-center single-team">
                    <!-- single team -->
                    <div class="team-img">
                       <img src="{{ asset('frontend/img/team/03.jpg')}}" class="img-fluid" alt="">
                    </div>
                    <div class="team-info">
                        <h5 class="team-title text-capitalize">Jason Martinez</h5>
                        <span>Consultant</span>
                        <div class="social-network">
                            <ul>
                                <li><a href=""><i class="icofont-facebook"></i></a></li>
                                <li><a href=""><i class="icofont-twitter"></i></a></li>
                                <li><a href=""><i class="icofont-linkedin"></i></a></li>
                                <li><a href=""><i class="icofont-pinterest"></i></a></li>
                                <li><a href=""><i class="icofont-vimeo"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!--./ single team -->
                </article>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 pb-30">
                <article class="text-center single-team">
                    <!-- single team -->
                    <div class="team-img">
                       <img src="{{ asset('frontend/img/team/01.jpg')}}" class="img-fluid" alt="">
                    </div>
                    <div class="team-info">
                        <h5 class="team-title text-capitalize">Jason Martinez</h5>
                        <span>Seneor Consultant</span>
                        <div class="social-network">
                            <ul>
                                <li><a href=""><i class="icofont-facebook"></i></a></li>
                                <li><a href=""><i class="icofont-twitter"></i></a></li>
                                <li><a href=""><i class="icofont-linkedin"></i></a></li>
                                <li><a href=""><i class="icofont-pinterest"></i></a></li>
                                <li><a href=""><i class="icofont-vimeo"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!--./ single team -->
                </article>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 pb-30">
                <article class="text-center single-team">
                    <!-- single team -->
                    <div class="team-img">
                       <img src="{{ asset('frontend/img/team/02.jpg')}}" class="img-fluid" alt="">
                    </div>
                    <div class="team-info">
                        <h5 class="team-title text-capitalize">Jason Martinez</h5>
                        <span>Virus Expert</span>
                        <div class="social-network">
                            <ul>
                                <li><a href=""><i class="icofont-facebook"></i></a></li>
                                <li><a href=""><i class="icofont-twitter"></i></a></li>
                                <li><a href=""><i class="icofont-linkedin"></i></a></li>
                                <li><a href=""><i class="icofont-pinterest"></i></a></li>
                                <li><a href=""><i class="icofont-vimeo"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!--./ single team -->
                </article>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 pb-30">
                <article class="text-center single-team">
                    <!-- single team -->
                    <div class="team-img">
                       <img src="{{ asset('frontend/img/team/03.jpg')}}" class="img-fluid" alt="">
                    </div>
                    <div class="team-info">
                        <h5 class="team-title text-capitalize">Jason Martinez</h5>
                        <span>Consultant</span>
                        <div class="social-network">
                            <ul>
                                <li><a href=""><i class="icofont-facebook"></i></a></li>
                                <li><a href=""><i class="icofont-twitter"></i></a></li>
                                <li><a href=""><i class="icofont-linkedin"></i></a></li>
                                <li><a href=""><i class="icofont-pinterest"></i></a></li>
                                <li><a href=""><i class="icofont-vimeo"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!--./ single team -->
                </article>
            </div>
        </div>
    </div>
</section>
@endsection