
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Home || FAM</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="Gold Stone Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!--// Meta tag Keywords -->
    <!-- Custom-Files -->
    <!-- Bootstrap-Core-Css -->
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" />
    <!-- Testimonials-Css -->
    <link href="{{asset('css/mislider.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/mislider-custom.css')}}" rel="stylesheet" type="text/css" />
    <!-- Style-Css -->
    <link href="{{asset('css/style.css')}}" media="all" rel="stylesheet" type="text/css" />
    <!-- Font-Awesome-Icons-Css -->
    <link href="{{asset('css/fontawesome-all.css')}}" rel="stylesheet" />
    <link href="{{asset('css/preload.css')}}" rel="stylesheet" />
    <link href="{{asset('css/head.css')}}" rel="stylesheet" />
    <!-- //Custom-Files -->
    <link crossorigin="anonymous" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" rel="stylesheet" />
    <!-- Web-Fonts -->
    <link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet" />
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet" />
    <!-- //Web-Fonts -->
</head>

<body>
    <!-- header -->
    {{--<div class="beko" id="animationWindow">--}}
        {{--<div class="bookshelf_wrapper">--}}
            {{--<ul class="books_list">--}}
                {{--<li class="book_item first"></li>--}}
                {{--<li class="book_item second"></li>--}}
                {{--<li class="book_item third"></li>--}}
                {{--<li class="book_item fourth"></li>--}}
                {{--<li class="book_item fifth"></li>--}}
                {{--<li class="book_item sixth"></li>--}}
            {{--</ul>--}}

            {{--<div class="shelf"></div>--}}
        {{--</div>--}}

        {{--<div class="container" id="co"><canvas id="c"></canvas>--}}

            {{--<h1>Welcome To FAM Team</h1>--}}
        {{--</div>--}}
    {{--</div>--}}

    <header>
        <!-- top header -->
        <!-- //top header -->
        <!-- middle header -->
        <div class="middle-w3ls-nav py-2 fixed-header" style="background-color:#fff">
            <div class="container">
                <div class="row"><a class="logo font-italic font-weight-bold col-lg-4 text-lg-left text-center" href="{{url('/')}}">FAM Group</a>

                    <div class="col-lg-8 right-info-agiles mt-lg-0 mt-sm-3 mt-1">
                        <div class="row">
                            <div class="col-sm-4 nav-middle">
                                <i class="far fa-envelope-open text-center mr-md-4 mr-sm-2 mr-4"></i>
                                <div class="agile-addresmk">
                                    <p><span class="font-weight-bold text-dark">Mail Us</span> <a href="mailto:info@fam.co.tz">info@fam.co.tz</a></p>
                                </div>
                            </div>

                            <div class="col-sm-4 col-6 nav-middle mt-sm-0 mt-2">
                                <i class="fas fa-phone-volume text-center mr-md-4 mr-sm-2 mr-4"></i>
                                <div class="agile-addresmk">
                                    <p><span class="font-weight-bold text-dark">Call Us</span> +255743373993</p>
                                </div>
                            </div>

                            <!-- Authentication Links -->
                            @guest
                                {{--<a class="button-head-mow3 text-white" href="/load3/theme/login.html" target="_top">Login</a>--}}
                                <a class="button-head-mow3 text-white" href="{{ route('login') }}">{{ __('Login') }}</a>


                            @if (Route::has('register'))
                            {{-- <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li> --}}
                            @endif
                            @else
                            <li class="nav-item dropdown">
                                {{-- <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a> --}}

                                <a class="button-head-mow3 text-white" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                                                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                            
                            {{--<li ><a  class="button-head-mow3 text-white" href="{{url('admin_receive')}}">Receiving</a></li>--}}
                            {{--<li ><a cl href="{{url('admin_2')}}">Form 2</a></li>--}}

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                 
                            
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            @endguest

                            {{-- <div class="col-sm-4 col-6 top-login-butt text-right mt-sm-2"><a class="button-head-mow3 text-white" href="login.html">Login</a></div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- //middle header -->
        <!-- navigation -->

        <div class="navigation-w3ls">
            <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-nav "><button
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"
                        class="navbar-toggler mx-auto" data-target="#navbarSupportedContent" data-toggle="collapse"
                        type="button"></button>

                <div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
                    <ul class="navbar-nav justify-content-center">
                        <li class="nav-item"><a class="nav-link " href="#">About FAM</a></li>
                        <li class="nav-item dropdown"><a aria-expanded="false" aria-haspopup="true"
                                                         class="nav-link dropdown-toggle " data-toggle="dropdown" href="#" role="button">FAM
                                Activities </a>
                            <div class="dropdown-menu"><a class="dropdown-item" href="#">Economical</a> <a
                                        class="dropdown-item" href="#">Social</a> <a class="dropdown-item"
                                                                                     href="#">Educational</a>
                                <!--<a class="dropdown-item" href="software.html">Drug Crimes</a> <a class="dropdown-item" href="social_media.html">Appeals</a> <a class="dropdown-item" href="photography.html">Dui</a> <a class="dropdown-item" href="course_details.html">More Details</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="form.html">Apply Now</a>-->
                            </div>
                        </li>
                        <li class="nav-item dropdown"><a aria-expanded="false" aria-haspopup="true"
                                                         class="nav-link dropdown-toggle " data-toggle="dropdown" href="#" role="button">FAM TEAM
                            </a>
                            <div class="dropdown-menu"><a class="dropdown-item" href="#">Documents</a> <a
                                        class="dropdown-item" href="#">Register with FAM5</a>
                                <a class="dropdown-item" href="#">Loan Form</a>
                                <a class="dropdown-item" href="{{url('/receiving')}}">Money Receiving Form</a>
                                <!--<a class="dropdown-item" href="404.html">404 Page</a> <a class="dropdown-item" href="coming_soon.html">Coming Soon</a> <a class="dropdown-item" href="form.html">Admission Form</a> <a class="dropdown-item" href="faq.html">Faq</a>-->
                            </div>
                        </li>
                        <!--<li class="nav-item"><a class="nav-link " href="blog.html">Blog</a></li>-->
                        <li class="nav-item"><a class="nav-link " href="#">Gallery</a></li>
                        <li class="nav-item"><a class="nav-link " href="#">Contact Us</a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- //navigation -->
    </header>
    <!-- //header -->


  <main class="py-4">
    @yield('content')
</main>
    
    <!-- //footer -->
    <script src="{{asset('js/head.js')}}"></script>
    <script src="{{asset('js/load.js')}}"></script>
    <script>
        jQuery(document).ready(function($) {
            $(window).load(function() {
                setTimeout(function() {
                    $('#animationWindow').fadeOut('slow', function() {});
                }, 500);

            });
        });
    </script>
    <!-- Js files -->
    <!-- JavaScript -->
    <script src="js/jquery-2.2.3.min.js"></script>
    <!-- Default-JavaScript-File -->
    <script src="js/bootstrap.js"></script>
    <!-- Necessary-JavaScript-File-For-Bootstrap -->
    <!-- banner slider -->
    <script src="js/slider.js"></script>
    <!-- //banner slider -->
    <!-- testimonial-plugin -->
    <script src="js/mislider.js"></script>
    <script>
        jQuery(function($) {
            var slider = $('.mis-stage').miSlider({
                //  The height of the stage in px. Options: false or positive integer. false = height is calculated using maximum slide heights. Default: false
                stageHeight: 320,
                //  Number of slides visible at one time. Options: false or positive integer. false = Fit as many as possible.  Default: 1
                slidesOnStage: false,
                //  The location of the current slide on the stage. Options: 'left', 'right', 'center'. Defualt: 'left'
                slidePosition: 'center',
                //  The slide to start on. Options: 'beg', 'mid', 'end' or slide number starting at 1 - '1','2','3', etc. Defualt: 'beg'
                slideStart: 'mid',
                //  The relative percentage scaling factor of the current slide - other slides are scaled down. Options: positive number 100 or higher. 100 = No scaling. Defualt: 100
                slideScaling: 150,
                //  The vertical offset of the slide center as a percentage of slide height. Options:  positive or negative number. Neg value = up. Pos value = down. 0 = No offset. Default: 0
                offsetV: -5,
                //  Center slide contents vertically - Boolean. Default: false
                centerV: true,
                //  Opacity of the prev and next button navigation when not transitioning. Options: Number between 0 and 1. 0 (transparent) - 1 (opaque). Default: .5
                navButtonsOpacity: 1,
            });
        });
    </script>
    {{-- <!-- //testimonial-plugin -->
    <!-- numscroller-js-file -->
    <script src="{{asset('js/numscroller-1.0.js')}}"></script>
    <!-- //numscroller-js-file -->
    <!-- smooth scrolling -->
    <script src="{{asset('js/SmoothScroll.min.js')}}"></script>
    <!-- //smooth scrolling -->
    <!-- move-top -->
    <script src="{{asset('js/move-top.js')}}"></script>
    <!-- easing -->
    <script src="{{asset('js/easing.js')}}"></script>
    <script src="{{asset('js/jquery-2.2.3.min.js')}}"></script>
    <!-- Default-JavaScript-File -->
    <script src="{{asset('js/bootstrap.js')}}"></script>
    <!-- //Js files --> --}}
</body>

</html>
