<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>{{ config('app.name', 'donnorApp') }}</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/user/images/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('/user/vendor/owl-carousel/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/user/vendor/owl-carousel/css/owl.theme.default.min.css') }}">
    <link href="{{ asset('/user/vendor/jqvmap/css/jqvmap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('./user/css/style.css') }}" rel="stylesheet">

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="home" class="brand-logo">
                <img class="logo-abbr" src="{{ asset('/user/images/logo.png') }}" alt="">
                <img class="logo-compact" src="{{ asset('/user/images/logo-text.png') }}" alt="">
                <img class="brand-title" src="{{ asset('/user/images/logo-text.png') }}" alt="">
            </a>

            @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        
                    @endif

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="search_bar dropdown">
                                <span class="search_icon p-3 c-pointer" data-toggle="dropdown">
                                    <i class="mdi mdi-magnify"></i>
                                </span>
                                <div class="dropdown-menu p-0 m-0">
                                    <form>
                                        <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                                    </form>
                                </div>
                            </div>
                        </div>

                        <ul class="navbar-nav header-right">
                        @guest
                        @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                            @else

                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">{{ Auth::user()->f_name }} {{ Auth::user()->s_name }}
                                    <i class="mdi mdi-account"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="home" class="dropdown-item">
                                        <i class="icon-user"></i>
                                        <span class="ml-2">{{ Auth::user()->f_name }} {{ Auth::user()->s_name }} </span>
                                    </a>
                                    <a href="{{ route('logout') }}" class="dropdown-item" 
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                        <i class="icon-key"></i>
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            @endguest
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="quixnav">
            <div class="quixnav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label first">Main Menu</li>
                    
                    
                    <li><a href="widget-basic.html" aria-expanded="false"><i
                                class="icon icon-single-04"></i><span
                                class="nav-text">Donations</span></a></li>
                    <li><a href="widget-basic.html" aria-expanded="false"><i
                                class="icon icon-plug"></i><span
                                class="nav-text">New Donation</span></a></li>            
                    
                    
                </ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

         @yield('content')

        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="#" target="_blank">Sienko Stephen</a> 2022</p>
                <p>Distributed by <a href="https://stephensienko.io.ke/" target="_blank">Sienko</a></p> 
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{ asset('/user/vendor/global/global.min.js') }}"></script>
    <script src="{{ asset('/user/js/quixnav-init.js') }}"></script>
    <script src="{{ asset('/user/js/custom.min.js') }}"></script>


    <!-- Vectormap -->
    <script src="{{ asset('/user/vendor/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset('/user/vendor/morris/morris.min.js') }}"></script>


    <script src="{{ asset('/user/vendor/circle-progress/circle-progress.min.js') }}"></script>
    <script src="{{ asset('/user/vendor/chart.js/Chart.bundle.min.js') }}"></script>

    <script src="{{ asset('/user/vendor/gaugeJS/dist/gauge.min.js') }}"></script>

    <!--  flot-chart js -->
    <script src="{{ asset('/user/vendor/flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('/user/vendor/flot/jquery.flot.resize.js') }}"></script>

    <!-- Owl Carousel -->
    <script src="{{ asset('/user/vendor/owl-carousel/js/owl.carousel.min.js') }}"></script>

    <!-- Counter Up -->
    <script src="{{ asset('/user/vendor/jqvmap/js/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('/user/vendor/jqvmap/js/jquery.vmap.usa.js') }}"></script>
    <script src="{{ asset('/user/vendor/jquery.counterup/jquery.counterup.min.js') }}"></script>


    <script src="{{ asset('/user/js/dashboard/dashboard-1.js') }}"></script>

</body>

</html>