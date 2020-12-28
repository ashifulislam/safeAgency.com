<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Product List | Nalika - Material Admin Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('user/showEmployer')}}/img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('user/showEmployer')}}/css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('user/showEmployer')}}/css/font-awesome.min.css">
    <!-- nalika Icon CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('user/showEmployer')}}/css/nalika-icon.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('user/showEmployer')}}/css/owl.carousel.css">
    <link rel="stylesheet" href="{{asset('user/showEmployer')}}/css/owl.theme.css">
    <link rel="stylesheet" href="{{asset('user/showEmployer')}}/css/owl.transitions.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('user/showEmployer')}}/css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('user/showEmployer')}}/css/normalize.css">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('user/showEmployer')}}/css/meanmenu.min.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('employer')}}/css/main.css">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('user/showEmployer')}}/css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('user/showEmployer')}}/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('employer')}}/css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="{{asset('user/showEmployer')}}/css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('user/showEmployer')}}/css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="{{asset('user/showEmployer')}}/css/calendar/fullcalendar.print.min.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('user/showEmployer')}}/style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('user/showEmployer')}}/css/responsive.css">
    <link rel="shortcut icon" href="{{asset('user/images/logo/favicon.png')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('user')}}/css/bootstrap-4.1.3.min.css">
    <link rel="stylesheet" href="{{asset('user')}}/css/style.css">
    <!-- modernizr JS
		============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<header class="header-area single-page">
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="logo-area">
                        <a href="index.html"><img style="height:50;width:100px;
                        margin-top:-17px;" src="{{asset('user')}}/images/logo.png" alt="logo"></a>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="custom-navbar">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <div class="main-menu main-menu-light">
                        <ul>
                            <li class="active"><a href="index.html">home</a></li>
                            <li><a href="about.html">about us</a></li>
                            <li><a href="job-category.html">category</a></li>
                            <li><a href="#">Employer</a>
                                <ul class="sub-menu">
                                    <li><a href="{{url('employerProfile')}}">Create Profile</a></li>
                                    <li><a href="blog-details.html">Post Job Type </a></li>
                                    <li><a href="blog-details.html">Post Job Category </a></li>
                                    <li><a href="blog-details.html">Post Job Responsibilities </a></li>
                                </ul>
                            </li>
                            <li><a href="#">Candidate</a>
                                <ul class="sub-menu">
                                    <li><a href="blog-home.html">Create Profile</a></li>
                                    <li><a href="blog-details.html">Apply Job </a></li>

                                </ul>
                            </li>

                            <li class="menu-btn">
                               @if(Auth::guard('employer')->check())
                                    <a class="template-btn" href="{{route('employer.logout')}}"> Logout</a>
                                @else

                                    <a href="#" class="template-btn">login</a>
                                @endif
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
