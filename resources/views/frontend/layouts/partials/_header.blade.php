<!-- ======= Header Area Start ======= -->
<header class="main-header">
    @yield('header-top')
    <!-- header navigation -->
            <div class="header-nav">
                <nav class="navbar navbar-expand-lg navbar-light p-0">
                    <div class="container">
                    
                      <a class="navbar-brand" href="index.html"><img src="{{ asset('/frontend/img/logo.png')}}" alt=""></a>
                      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav navigation ml-auto">
                                <li>
                                    <a href="{{ route('index')}}">Home <span class="sr-only">(current)</span></a>
                                </li>
                                <li><a href="{{ route('about.us')}}">About</a></li>
                                <li><a href="{{ route('doctors')}}">Doctors</a></li>
                                <li>
                                    <a href="{{ route('services')}}">Services</a>
                                </li>
                                <li>
                                    <a href="{{ route('blogs')}}">News</a>
                                </li>
                                
                                {{-- <li>
                                    <a href="{{ route('appoinments')}}">Appoinment</a>
                                </li> --}}
                               
                                <li>
                                    <a href="{{ route('contact.us')}}">Contact</a>
                                </li>
                            </ul>
                            <ul class="navigation-right">
                                @guest
                                    @if (Route::has('login'))
                                        <li class="search-box"><a href="{{ route('login')}}">Login</i></a></li>
                                    @endif
                                @else
                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('user.dashboard') }}">Dashboard</a>
                                            <a class="dropdown-item" href="{{ route('booking') }}">Booking</a>
                                            <a class="dropdown-item" href="{{ route('booking.list') }}">Booking List</a>
                                            <a class="dropdown-item" href="{{ route('user.profile') }}">Profile Update</a>
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                                Logout
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                @endguest
                            </ul>
                        </div>
                    </div> 
                </nav>
            </div>
            <!--./ header navigation -->
</header>
<!-- ======= Header Area End ======= -->