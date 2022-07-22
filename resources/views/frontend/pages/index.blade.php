@extends('frontend.layouts.master')

@section('header-top')
    @include('frontend.layouts.partials._header-top')
@endsection

@section('content')
<!-- ======= Slider Area Start ======= -->
<div class="slider-area">
    <div class="slider-active">
        <!-- single slider -->
        @foreach($sliders as $slider)
        <div class="single-slider">
            <div class="slick-img">
                <img src="{{ asset('images/sliders/'.$slider->image)}}" alt="" class="slick-bg">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="slick-caption">
                            <div class="slick-sub-title">
                                <p style="color: red;">{{ $slider->short_title}}</p>
                            </div>
                            <div class="slick-title">
                                <h1> <strong>{{ $slider->long_title}}</strong></h1>
                            </div>
                            <div class="slick-btn">
                                <a href="{{ route('contact.us')}}" class="btn default-btn">Book Appoinment</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
<!-- ======= Slider Area End ======= -->

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
                                <a class="ripple" href="https://www.youtube.com/watch?v=ODWcLnpeBag">
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

<!-- ======= Service Area Start ======= -->
<section class="service-area sec-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <!-- Section Title -->
                <div class="sec-title text-center sec-title-padding">
                    <h6>Services</h6>
                    <h2>What We<span> Do</span></h2>
                    <div class="small-line"></div>
                </div>
                <!--./ Section Title -->
            </div>
        </div> 
        <div class="row service-wraper">

            <div class="col-xl-4">
                <!-- single practice -->
                <div class="single-service">
                    <div class="service-img">
                        <img src="{{ asset('/frontend/img/service/01.jpg')}}" alt="">
                    </div>
                    <div class="service-info">
                        <div class="service-icon">
                            <!-- <i class="flaticon-plan"></i> -->
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
                        <img src="{{ asset('/frontend/img/service/02.jpg')}}" alt="">
                    </div>
                    <div class="service-info">
                        <div class="service-icon">
                            <!-- <i class="flaticon-research"></i> -->
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
                        <img src="{{ asset('/frontend/img/service/03.jpg')}}" alt="">
                    </div>
                    <div class="service-info">
                        <div class="service-icon">
                            <!-- <i class="flaticon-analytics"></i> -->
                            <h5 class="service-title fw-semi-bold text-capitalize">Corona Viras Test</h5>
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
                            <img src="{{ asset('frontend/img/service/04.jpg')}}" alt="">
                        </div>
                        <div class="service-info">
                            <div class="service-icon">
                                <!-- <i class="flaticon-investment"></i> -->
                                <h5 class="/service-title fw-semi-bold text-capitalize">Hearth Advice</h5>
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
                            <img src="{{ asset('/frontend/img/service/05.jpg')}}" alt="">
                        </div>
                        <div class="service-info">
                            <div class="service-icon">
                                <!-- <i class="flaticon-brain"></i> -->
                                <h5 class="service-title fw-semi-bold text-capitalize">Ambulance Service</h5>
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
                            <img src="{{ asset('frontend/img/service/06.jpg')}}" alt="">
                        </div>
                        <div class="service-info">
                            <div class="service-icon">
                                <!-- <i class="flaticon-management"></i> -->
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
<!-- ======= Service Area End ======= -->

<!-- ======= Funfact Area Start ======= -->
<section class="funfact-area sec-padding">
    <div class="container">
        <div class="row">
        <div class="row pt-5">
            <div class="col-xl-8 offset-xl-2 col-lg-8  col-md-10 offset-lg-2 offset-md-1 pb-30">
                <div class="funfact-service text-center">
                    <h3 class="funfact-service-title text-white text-capitalize fw-semi-bold pb-20">If You Need Any Kind Of Consulting Services Then Fell Free To Contact With Us</h3>
                    <ul>
                      <li><i class="icofont-headphone-alt"></i> +880 1234 2547 89</li>
                      <li><i class="icofont-email"></i> info@example.com</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ======= Funfact Report Area End ======= -->

<!-- ======= Testimonial Area Start ======= -->
<section class="testimonial-area pt-60">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-1 d-none d-md-none d-lg-block">
                <div class="testimonial-img">
                    <img src="{{ asset('frontend/img/testimonial/testimonial-img.png')}}" alt="">
                </div>
            </div>
            <div class="col-xl-7 col-lg-7 col-md-11 offset-xl-1 offset-lg-1">
                <div class="testimonial-info">
                    <div class="sec-secondary-title">
                        <span>What People Say</span>
                        <h2 class="title text-capitalize">Patient Testimonial</h2>
                    </div>
                    <div class="testimonial-wraper">
                        <!-- Single testimonial -->
                        <div class="author-box">
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humou.</p>
                            <div class="author-body">
                                <div class="author-img">
                                    <img src="{{ asset('frontend/img/testimonial/1.png')}}" alt="">
                                </div>
                                <div class="author-info">
                                    <h5 class="text-capitalize fw-medium"><a href="#">Michael Green</a></h5>
                                    <p>Product Manager</p>
                                </div>
                            </div>
                        </div>
                        <!--./ Single testimonial -->
                        <!-- Single testimonial -->
                        <div class="author-box">
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humou.</p>
                            <div class="author-body">
                                <div class="author-img">
                                    <img src="{{ asset('frontend/img/testimonial/1.png')}}" alt="">
                                </div>
                                <div class="author-info">
                                    <h5 class="text-capitalize fw-medium"><a href="#">Michael Green</a></h5>
                                    <p>Product Manager</p>
                                </div>
                            </div>
                        </div>
                        <!--./ Single testimonial -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ======= Testimonial Area End ======= -->

<!-- ======= Consultation Area Start ======= -->
<section class="consultation-area sec-padding parallax">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-12 pb-30">
                <div class="consultation-wrapper">
                    <div class="sec-secondary-title">
                        <span>24/7 SUPPORT</span>
                        <h2 class="title text-capitalize fw-medium">Emergency Helpline <span class="theme-color">Contact</span></h2>
                        <p class="text-white">We will work with you to fully understand your business and your target audience to inform our marketing strategy.</p>
                    </div>
                    
                    <div class="contact-info list-unstyled">
                        <div class="media single-box">
                            <div class="media-top">
                               <i class="flaticon-phone-call"></i>
                            </div>
                            <div class="media-text">
                                <h6 class="contact-info-title fw-rugular text-white">Phone Number</h6>
                                <span class="theme-color">+88 01722 211747</span>
                            </div>
                        </div>
                        <div class="media single-box">
                            <div class="media-top">
                               <i class="flaticon-mail"></i>
                            </div>
                            <div class="media-text">
                                <h6 class="contact-info-title fw-rugular text-white">Email Address</h6>
                                <span class="theme-color">info@coronalab.com</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-lg-6 col-md-12 offset-xl-1 pb-30">
                <!-- consultation form content -->
                <div class="consultation-form-con">
                    <div class="default-form">
                        <!-- consultation form -->
                        <form action="#">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Email">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <input type="tel" class="form-control" placeholder="Subject">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <textarea class="form-control" rows="5" placeholder="Message"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <a href="#" class="btn default-btn">Send Message</a>
                                </div>
                            </div>
                        </form><!--./ consultation form -->
                    </div>
                </div><!--./ consultation form content -->
            </div>
        </div>
    </div>
</section>
<!-- ======= Consultation Area End ======= -->

<!-- ======= Team Area Start ======= -->
<section class="team-area sec-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <!-- Section Title -->
                <div class="sec-title text-center sec-title-padding">
                    <h6>Hello Dear</h6>
                    <h2>Meet Our  <span>Specialists</span></h2>
                    <div class="small-line">
                    </div>
                </div>
                <!--./ Section Title -->
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 pb-30">
                <article class="text-center single-team">
                    <!-- single team -->
                    <div class="team-img">
                       <img src="{{ asset('frontend/img/team/01.jpg')}}" class="img-fluid" alt="">
                    </div>
                    <div class="team-info">
                        <h5 class="team-title text-capitalize">Jason Martin</h5>
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
                        <h5 class="team-title text-capitalize">Donald Martinez</h5>
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
<!-- ======= Team Area End ======= -->

<!-- ======= News Area Start ======= -->
<section class="news-area sec-padding section-bg-color">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <!-- Section Title -->
                <div class="sec-title text-center sec-title-padding">
                    <h6>CLEANING THE GERMS</h6>
                    <h2>Clean Your <span>Hands</span></h2>
                    <div class="small-line">
                    </div>
                </div>
                <!--./ Section Title -->
            </div>
        </div>
        <div class="row hand-wash-process ">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="process-block-one">
                    <div class="rotate-image">
                        <img class="rotate-me" src="{{ asset('frontend/img/resource/testi.png')}}" alt="">
                    </div>
                    <div class="image-box">
                        <img src="{{ asset('frontend/img/resource/h1.png')}}" alt="">
                    </div>
                    <h3>Using Alcohol Gel</h3>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="process-block-one">
                    <div class="rotate-image">
                        <img class="rotate-me" src="{{ asset('frontend/img/resource/testi.png')}}" alt="">
                    </div>
                    <div class="image-box">
                        <img src="{{ asset('frontend/img/resource/h2.png')}}" alt="">
                    </div>
                    <h3>Apply alcohol spray</h3>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="process-block-one">
                    <div class="rotate-image">
                        <img class="rotate-me" src="{{ asset('frontend/img/resource/testi.png')}}" alt="">
                    </div>
                    <div class="image-box">
                        <img src="{{ asset('frontend/img/resource/h3.png')}}" alt="">
                    </div>
                    <h3>Rub Hands Together</h3>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="process-block-one">
                    <div class="rotate-image">
                        <img class="rotate-me" src="{{ asset('frontend/img/resource/testi.png')}}" alt="">
                    </div>
                    <div class="image-box">
                        <img src="{{ asset('frontend/img/resource/h4.png')}}" alt="">
                    </div>
                    <h3>Rub Back Of Each Hand</h3>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="process-block-one">
                    <div class="rotate-image">
                        <img class="rotate-me" src="{{ asset('frontend/img/resource/testi.png')}}" alt="">
                    </div>
                    <div class="image-box">
                        <img src="{{ asset('frontend/img/resource/h5.png')}}" alt="">
                    </div>
                    <h3>Interlaced Fingers</h3>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="process-block-one">
                    <div class="rotate-image">
                        <img class="rotate-me" src="{{ asset('frontend/img/resource/testi.png')}}" alt="">
                    </div>
                    <div class="image-box">
                        <img src="{{ asset('frontend/img/resource/h6.png')}}" alt="">
                    </div>
                    <h3>Rub Until Dry</h3>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ======= News Area End ======= -->
<!-- ======= News Area Start ======= -->
<section class="news-area sec-padding section-bg-color">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <!-- Section Title -->
                <div class="sec-title text-center sec-title-padding">
                    <h6>Blog</h6>
                    <h2>Latest <span>News</span></h2>
                    <div class="small-line">
                    </div>
                </div>
                <!--./ Section Title -->
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-md-6 col-sm-12 pb-30">
                <div class="card border-0 rounded-0">
                  <div class="single-news-img">
                        <img class="card-img-top rounded-0" src="{{ asset('frontend/img/blog/01.jpg')}}" alt="">
                  </div>
                  <div class="news-info">
                    <a href="blog-right-sidebar-single.html"><h6 class="news-title text-capitalize fw-semi-bold">COVID-19 Recommendations for Older Adults</h6></a>
                    <ul class="post-meta">
                        <li><img src="{{ asset('frontend/img/blog/default.png')}}" alt=""></li>
                        <li> By: <a href="#" class="theme-color">coronalab</a></li>
                        <li>Jan 14 2019</li>
                    </ul>
                  </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 col-sm-12 pb-30">
                <div class="card border-0 rounded-0">
                  <div class="single-news-img">
                        <img class="card-img-top rounded-0" src="{{ asset('frontend/img/blog/02.jpg')}}" alt="">
                  </div>
                  <div class="news-info">
                    <a href="blog-right-sidebar-single.html"><h6 class="news-title text-capitalize fw-semi-bold">COVID-19 Risks and Vaccine</h6></a>
                    <ul class="post-meta">
                        <li><img src="{{ asset('frontend/img/blog/default.png')}}" alt=""></li>
                        <li> By: <a href="#" class="theme-color">coronalab</a></li>
                        <li>Jan 14 2019</li>
                    </ul>
                  </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 col-sm-12 pb-30">
                <div class="card border-0 rounded-0">
                  <div class="single-news-img">
                        <img class="card-img-top rounded-0" src="{{ asset('frontend/img/blog/03.jpg')}}" alt="">
                  </div>
                  <div class="news-info">
                    <a href="blog-right-sidebar-single.html"><h6 class="news-title text-capitalize fw-semi-bold">Reduced risk of severe COVID-19</h6></a>
                    <ul class="post-meta">
                        <li><img src="{{ asset('frontend/img/blog/default.png')}}" alt=""></li>
                        <li> By: <a href="#" class="theme-color">coronalab</a></li>
                        <li>Jan 14 2019</li>
                    </ul>
                  </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ======= News Area End ======= -->
@endsection