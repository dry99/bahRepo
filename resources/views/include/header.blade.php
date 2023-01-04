<header>
        <!-- Header Start -->
        <div class="header-area header-sticky">
            <div class="main-header ">
                <div class="container">
                    <div class="row align-items-center">
                        <!-- logo -->
                        <div class="col-xl-3 col-lg-3">
                            <div class="logo">
                                <!-- <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a> -->
                                <a href="index.html">
                                    <h1 class="font-weight-bold">Ticy Hotels</h1>
                                </a>
                            </div>
                        </div>
                    {{--   @auth
                        <div class="col-xl-3 col-lg-3">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="http://placehold.it/18x18" class="profile-image img-circle"> Username <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#"><i class="fa fa-cog"></i> Account</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#"><i class="fa fa-sign-out"></i> Sign-out</a></li>
                                </ul>
                            </li> 
                        </div>
                        @endauth
                        --}}
                        
                            
                        
                        <div class="col-xl-6 col-lg-6">
                            @guest
                            <!-- main-menu -->
                            <div class="main-menu f-right d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="{{route('customers.register')}}">S'inscrire</a></li>
                                        <li><a href="{{route('customers.login')}}">Se connecter</a></li>
                                        <!-- <li><a href="services.html">Service</a></li> -->
                                        <!-- <li><a href="blog.html">Blog</a>
                                            <ul class="submenu">
                                                <li><a href="blog.html">Blog</a></li>
                                                <li><a href="single-blog.html">Blog Details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Pages</a>
                                            <ul class="submenu">
                                                <li><a href="rooms.html">Rooms</a>
                                                <li><a href="elements.html">Element</a></li>
                                            </ul>
                                        </li> -->
                                        <!-- <li><a href="contact.html">Contact</a></li> -->
                                    </ul>
                                </nav>
                            </div>
                            @endguest
                        </div>
                        
                        <div class="col-xl-3 col-lg-3">
                            @guest
                            <!-- header-btn -->
                            <div class="header-btn">
                                <a href="{{route('register')}}" class="btn btn1 d-none d-lg-block ">Ajouter votre établissement</a>
                            </div>
                            @endguest
                            @auth
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="http://placehold.it/18x18" class="profile-image img-circle"> {{Auth::user()->name}} <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#"><i class="fa fa-cog"></i> Account</a></li>
                                    <li class="divider"></li>
                                    <li><a href="{{route('logout')}}" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i>  {{ __('Logout') }}</a></li>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </ul>
                            </li> 
                            @endauth
                        </div>
                        
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>
