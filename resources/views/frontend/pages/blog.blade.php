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
                    <h2>Blogs</h2>
                    <div class="bredcrums">
                        <span><a class="home" href="">Home</a></span> 
                        <span class="active">Blogs</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('content')
<section class="blog-area sec-padding blog-left-sidebar">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-8 col-md-8 col">
                <div class="blog-content">
                    <div class="single-post">
                        <!-- Single Post -->
                        <div class="single-post-img">
                            <img src="img/blog/04.jpg" alt="">
                        </div>
                        <div class="single-post-body">
                            <h3 class="text-capitalize fw-medium"><a href="#">It showed a lady fitted out with a fur hat and fur boa who sat upright, right</a></h3>
                            <ul class="post-meta single-post-meta">
                                <li><img src="img/blog/default.png" alt=""></li>
                                <li> By: <a href="#" class="theme-color">probizz</a></li>
                                <li><i class="icofont-calendar"></i>Jan 14 2019</li>
                                <li><i class="icofont-speech-comments"></i>2 Comments</li>
                            </ul>
                            <div class="single-post-details">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sagittis tellus ante, id pharetra velit luctus nec. Aliquam sed volutpat turpis. Aenean nisl turpis, posuere dictum scelerisque at, auctor in nisl. Sed vitae nulla ornare, lacinia risus non ... </p>
                                <a href="blog-right-sidebar-single.html" class="btn default-btn mt-4">Explore More</a>
                            </div>
                        </div>
                        <!--./ Single Post -->
                    </div>
                    <div class="single-post post-gallery">
                        <!-- Single Post -->
                        <div class="single-post-img single-post-wraper">
                            <div class="single-post-slide">
                                <img src="img/blog/05.jpg" alt="">
                            </div>
                             <div class="single-post-slide">
                                <img src="img/blog/05.jpg" alt="">
                            </div>
                        </div>
                        <div class="single-post-body">
                            <h3 class="text-capitalize fw-medium"><a href="#">It showed a lady fitted out with a fur hat and fur boa who sat upright, right</a></h3>
                            <ul class="post-meta single-post-meta">
                                <li><img src="img/blog/default.png" alt=""></li>
                                <li> By: <a href="#" class="theme-color">probizz</a></li>
                                <li><i class="icofont-calendar"></i>Jan 14 2019</li>
                                <li><i class="icofont-speech-comments"></i>2 Comments</li>
                            </ul>
                            <div class="single-post-details">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sagittis tellus ante, id pharetra velit luctus nec. Aliquam sed volutpat turpis. Aenean nisl turpis, posuere dictum scelerisque at, auctor in nisl. Sed vitae nulla ornare, lacinia risus non ... </p>
                                <a href="blog-right-sidebar-single.html" class="btn default-btn mt-4">Explore More</a>
                            </div>
                        </div>
                        <!--./ Single Post -->
                    </div>
                    <div class="single-post post-quote">
                        <!-- Single Post -->
                        <div class="single-post-body">
                            <h3 class="text-capitalize fw-medium"><a href="#">It showed a lady fitted out with a fur hat and fur boa who sat upright, right</a></h3>
                            <ul class="post-meta single-post-meta">
                                <li><img src="img/blog/default.png" alt=""></li>
                                <li> By: <a href="#" class="theme-color">probizz</a></li>
                                <li><i class="icofont-calendar"></i>Jan 14 2019</li>
                                <li><i class="icofont-speech-comments"></i>2 Comments</li>
                            </ul>
                            <div class="single-post-details">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sagittis tellus ante, id pharetra velit luctus nec. Aliquam sed volutpat turpis. Aenean nisl turpis, posuere dictum scelerisque at, auctor in nisl. Sed vitae nulla ornare, lacinia risus non ... </p>
                                <a href="blog-right-sidebar-single.html" class="btn default-btn mt-4">Explore More</a>
                            </div>
                        </div>
                        <!--./ Single Post -->
                    </div>
                    <div class="single-post post-sound">
                        <!-- Single Post -->
                        <div class="single-post-img">
                            <iframe width="100%" height="400" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/560158971&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"></iframe>
                        </div>
                        <div class="single-post-body">
                            <h3 class="text-capitalize fw-medium"><a href="#">It showed a lady fitted out with a fur hat and fur boa who sat upright, right</a></h3>
                            <ul class="post-meta single-post-meta">
                                <li><img src="img/blog/default.png" alt=""></li>
                                <li> By: <a href="#" class="theme-color">probizz</a></li>
                                <li><i class="icofont-calendar"></i>Jan 14 2019</li>
                                <li><i class="icofont-speech-comments"></i>2 Comments</li>
                            </ul>
                            <div class="single-post-details">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sagittis tellus ante, id pharetra velit luctus nec. Aliquam sed volutpat turpis. Aenean nisl turpis, posuere dictum scelerisque at, auctor in nisl. Sed vitae nulla ornare, lacinia risus non ... </p>
                                <a href="blog-right-sidebar-single.html" class="btn default-btn mt-4">Explore More</a>
                            </div>
                        </div>
                        <!--./ Single Post -->
                    </div>
                    <div class="single-post">
                        <!-- Single Post -->
                        <div class="post-video">
                            <div class="single-post-img">
                                <img src="img/blog/04.jpg" alt="">
                            </div>
                            <div class="default-video-box">
                                <a class="ripple" href="https://www.youtube.com/watch?v=PEppsxIAMXY"><i class="icofont-play"></i></a>
                            </div>
                        </div>

                        <div class="single-post-body">
                            <h3 class="text-capitalize fw-medium"><a href="#">It showed a lady fitted out with a fur hat and fur boa who sat upright, right</a></h3>
                            <ul class="post-meta single-post-meta">
                                <li><img src="img/blog/default.png" alt=""></li>
                                <li> By: <a href="#" class="theme-color">probizz</a></li>
                                <li><i class="icofont-calendar"></i>Jan 14 2019</li>
                                <li><i class="icofont-speech-comments"></i>2 Comments</li>
                            </ul>
                            <div class="single-post-details">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sagittis tellus ante, id pharetra velit luctus nec. Aliquam sed volutpat turpis. Aenean nisl turpis, posuere dictum scelerisque at, auctor in nisl. Sed vitae nulla ornare, lacinia risus non ... </p>
                                <a href="blog-right-sidebar-single.html" class="btn default-btn mt-4">Explore More</a>
                            </div>
                        </div>
                        <!--./ Single Post -->
                    </div>

                    <!-- pagination -->
                    <div class="pagination-wrapper">
                        <ul class="pg-pagination">
                            <li>
                                <a href="#" aria-label="Previous">
                                    <i class="icofont-thin-left"></i>
                                </a>
                            </li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li>
                                <a href="#" aria-label="Next">
                                    <i class="icofont-thin-right"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!--./ pagination -->
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col">
                <div class="blog-sidebar">
                    <div class="widget search-widget">
                        <form action="#" class="search-form">
                            <input type="search" placeholder="Enter Search Keyword">
                            <button type="submit"><i class="icofont-search"></i></button>
                        </form>
                    </div>
                    <div class="widget categories-widget">
                        <h4 class="text-capitalize fw-medium">Categories</h4>
                        <ul>
                            <li><a href="#">Consulting</a></li>
                            <li><a href="#">Business</a></li>
                            <li><a href="#">Investment planing</a></li>
                            <li><a href="#">Market Research</a></li>
                            <li><a href="#">Construction</a></li>
                            <li><a href="#">Design</a></li>
                        </ul>
                    </div>
                    <div class="widget popular-post-widget">
                        <h4 class="text-capitalize fw-medium">Recent posts</h4>
                        <ul>
                            <li>
                                <div class="single-recent-post">
                                    <!-- Single Recent Post -->
                                    <div class="media">
                                        <img class="mr-3" src="img/blog/recent-01.jpg" alt="">
                                        <div class="media-body">
                                            <h6 class="fw-semi-bold text-capitalize"><a class="theme-color-2" href="#">Vehicle Accidents</a></h6>
                                            <p>voluptate velit esse cillum dolore eu fugiat nulla.</p>
                                        </div>
                                   </div>
                                   <!--./ Single Recent Post -->
                                </div>
                            </li>
                            <li>
                                <div class="single-recent-post">
                                    <!-- Single Recent Post -->
                                    <div class="media">
                                        <img class="mr-3" src="img/blog/recent-02.jpg" alt="">
                                        <div class="media-body">
                                            <h6 class="fw-semi-bold text-capitalize"><a class="theme-color-2" href="#">Vehicle Accidents</a></h6>
                                            <p>voluptate velit esse cillum dolore eu fugiat nulla.</p>
                                        </div>
                                   </div>
                                   <!--./ Single Recent Post -->
                                </div>
                            </li>
                            <li>
                                <div class="single-recent-post">
                                    <!-- Single Recent Post -->
                                    <div class="media">
                                        <img class="mr-3" src="img/blog/recent-01.jpg" alt="">
                                        <div class="media-body">
                                            <h6 class="fw-semi-bold text-capitalize"><a class="theme-color-2" href="#">Vehicle Accidents</a></h6>
                                            <p>voluptate velit esse cillum dolore eu fugiat nulla.</p>
                                        </div>
                                   </div>
                                   <!--./ Single Recent Post -->
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="widget tag-widget">
                        <h4 class="text-capitalize fw-medium">Tag Cloud</h4>
                        <div class="tagcloud">
                            <a href="#" class="btn secondary-outline-btn">Consulting</a>
                            <a href="#" class="btn secondary-outline-btn">Business</a>
                            <a href="#" class="btn secondary-outline-btn">Tips</a>
                            <a href="#" class="btn secondary-outline-btn">Blog</a>
                            <a href="#" class="btn secondary-outline-btn">Finance</a>
                            <a href="#" class="btn secondary-outline-btn">Design</a>
                            <a href="#" class="btn secondary-outline-btn">Tag cloud</a>
                            <a href="#" class="btn secondary-outline-btn">Montserrat</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end container -->
</section>
@endsection