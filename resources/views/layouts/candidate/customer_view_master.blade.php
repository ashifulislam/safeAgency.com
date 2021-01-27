<!DOCTYPE html>
<html lang="en">

<head>

    <title>SafeAgency.com</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="#">
    <meta name="keywords" content="Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="#">
    <!-- Favicon icon -->
    <link rel="icon" href="{{asset('local_agent\files\assets\images\favicon.ico')}}" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="{{asset('local_agent\files\bower_components\bootstrap\css\bootstrap.min.css')}}">
    <!-- feather Awesome -->
    <link rel="stylesheet" type="text/css" href="{{asset('local_agent\files\assets\icon\feather\css\feather.css')}}">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="{{asset('local_agent\files\assets\css\style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('local_agent\files\assets\css\jquery.mCustomScrollbar.css')}}">
   <style>

       .header-area.main-header1
       {
           padding: 20px 0;
       }

       .container1
       {
           max-width: 960px;
       }
       .row1
       {
           display: -ms-flexbox;
           display: flex;
           -ms-flex-wrap: wrap;
           flex-wrap: wrap;
           margin-right: -180px;
           margin-left: 30px;
       }

       .main-menu1 ul
     {
       float:right;
     }


    .main-menu1 ul li
    {
       display:inline;
       position: relative;
    }

    .main-menu1 ul li a
    {
        color: #222;
        font-family: "Open Sans",sans-serif;
        text-transform: uppercase;
        font-size: 14px;
        font-weight: 600;
        display: inline-block;
        padding: 15px;
    }

    .main-menu1 ul li ul.sub-menu1
    {

       padding: 10px;

       opacity: 0;
       visibility: hidden;
       position: absolute;
       top: 250%;
       left: 0;
       width: 250px;
       background: #f9f9f9;
       z-index: 5;
       -webkit-transition: .5s;
       -moz-transition: .5s;
       -o-transition: .5s;
       transition: .5s;
    }

   .template-btn1
   {
       color: #fff !important;
       background: #ff9902;
   }
   .main-menu1 .menu-btn1
   {
       margin-left: 0;
   }
   .main-menu1 .menu-btn1
   {
       display: inline;
       margin-left: 60px;
   }


   </style>
</head>

<body>
<!-- Pre-loader start -->
<div class="theme-loader">
    <div class="ball-scale">
        <div class='contain'>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
        </div>
    </div>
</div>


<!-- Pre-loader end -->
<div id="pcoded" class="pcoded">
    <div class="pcoded-overlay-box"></div>
    <div class="pcoded-container navbar-wrapper">

        <nav class="navbar header-navbar pcoded-header">
                        <div class="navbar-wrapper">


                            <header class="header-area main-header1">
                                <div class="container1" >
                                    <div class="row1" >
                                        <div class="col-lg-2">
                                            <div class="logo-area">
                                                <a href="index.html"><img style="height:50;width:100px;
                        margin-top:-17px;" src="{{ asset('user/images/logo.png')}}" alt="logo"></a>
                                            </div>
                                        </div>
                                        <div class="col-lg-10">
                                            <div>
                                                <span></span>
                                                <span></span>
                                                <span></span>
                                            </div>
                                            <div class="main-menu1">
                                                <ul>
                                                    <li class="active"><a href="{{route('home.page')}}">home</a></li>
                                                    <li>
                                                        <a href="about.html">about us</a></li>
                                                    <li>
                                                        <a href="#">agent</a>
                                                        <ul class="sub-menu1">
                                                            <li><a href="{{route('localAgent.dashboard')}}">Your Profile </a></li>

                                                        </ul>
                                                    </li>                            <li><a href="#">employer</a>
                                                        <ul class="sub-menu1">
                                                            <li><a href="{{url('employerProfile')}}">Registration</a></li>
                                                            <li><a href="{{route('employer.show')}}">Your Profile </a></li>
                                                            <li><a href="blog-details.html">Post a Job </a></li>

                                                        </ul>
                                                    </li>
                                                    <li><a href="#">candidate</a>
                                                        <ul class="sub-menu1">
                                                            <li><a href="{{route('candidate.profile')}}">Create Profile</a></li>
                                                            <li><a href="{{route('candidate.home')}}">Your Profile</a></li>
                                                            <li><a href="{{url('jobApplication')}}">Apply Job </a></li>

                                                        </ul>
                                                    </li>

                                                    <li class="menu-btn1">
                                                        <a href="#" class="login">log in</a>
                                                        <a href="{{url('employerProfile')}}" class="template-btn1">sign up</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </header>

{{--                            @include('layouts/user/header')--}}
            </div>
        </nav>


    <!-- Sidebar chat start -->
        <div id="sidebar" class="users p-chat-user showChat">
            <div class="had-container">
                <div class="card card_main p-fixed users-main">
                    <div class="user-box">
                        <div class="chat-inner-header">
                            <div class="back_chatBox">
                                <div class="right-icon-control">
                                    <input type="text" class="form-control  search-text" placeholder="Search Friend" id="search-friends">
                                    <div class="form-icon">
                                        <i class="icofont icofont-search"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="main-friend-list">
                            <div class="media userlist-box" data-id="1" data-status="online" data-username="Josephin Doe" data-toggle="tooltip" data-placement="left" title="Josephin Doe">
                                <a class="media-left" href="#!">
                                    <img class="media-object img-radius img-radius" src="{{asset('local_agent\files\assets\images\avatar-3.jpg')}}" alt="Generic placeholder image ">
                                    <div class="live-status bg-success"></div>
                                </a>
                                <div class="media-body">
                                    <div class="f-13 chat-header">Josephin Doe</div>
                                </div>
                            </div>
                            <div class="media userlist-box" data-id="2" data-status="online" data-username="Lary Doe" data-toggle="tooltip" data-placement="left" title="Lary Doe">
                                <a class="media-left" href="#!">
                                    <img class="media-object img-radius" src="{{asset('local_agent\files\assets\images\avatar-2.jpg')}}" alt="Generic placeholder image">
                                    <div class="live-status bg-success"></div>
                                </a>
                                <div class="media-body">
                                    <div class="f-13 chat-header">Lary Doe</div>
                                </div>
                            </div>
                            <div class="media userlist-box" data-id="3" data-status="online" data-username="Alice" data-toggle="tooltip" data-placement="left" title="Alice">
                                <a class="media-left" href="#!">
                                    <img class="media-object img-radius" src="{{asset('local_agent\files\assets\images\avatar-4.jpg')}}" alt="Generic placeholder image">
                                    <div class="live-status bg-success"></div>
                                </a>
                                <div class="media-body">
                                    <div class="f-13 chat-header">Alice</div>
                                </div>
                            </div>
                            <div class="media userlist-box" data-id="4" data-status="online" data-username="Alia" data-toggle="tooltip" data-placement="left" title="Alia">
                                <a class="media-left" href="#!">
                                    <img class="media-object img-radius" src="{{asset('local_agent\files\assets\images\avatar-3.jpg')}}" alt="Generic placeholder image">
                                    <div class="live-status bg-success"></div>
                                </a>
                                <div class="media-body">
                                    <div class="f-13 chat-header">Alia</div>
                                </div>
                            </div>
                            <div class="media userlist-box" data-id="5" data-status="online" data-username="Suzen" data-toggle="tooltip" data-placement="left" title="Suzen">
                                <a class="media-left" href="#!">
                                    <img class="media-object img-radius" src="{{asset('local_agent\files\assets\images\avatar-2.jpg')}}" alt="Generic placeholder image">
                                    <div class="live-status bg-success"></div>
                                </a>
                                <div class="media-body">
                                    <div class="f-13 chat-header">Suzen</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sidebar inner chat start-->
        <div class="showChat_inner">
            <div class="media chat-inner-header">
                <a class="back_chatBox">
                    <i class="feather icon-chevron-left"></i> Josephin Doe
                </a>
            </div>
            <div class="media chat-messages">
                <a class="media-left photo-table" href="#!">
                    <img class="media-object img-radius img-radius m-t-5" src="{{asset('local_agent\files\assets\images\avatar-3.jpg')}}" alt="Generic placeholder image">
                </a>
                <div class="media-body chat-menu-content">
                    <div class="">
                        <p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
                        <p class="chat-time">8:20 a.m.</p>
                    </div>
                </div>
            </div>
            <div class="media chat-messages">
                <div class="media-body chat-menu-reply">
                    <div class="">
                        <p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
                        <p class="chat-time">8:20 a.m.</p>
                    </div>
                </div>
                <div class="media-right photo-table">
                    <a href="#!">
                        <img class="media-object img-radius img-radius m-t-5" src="{{asset('local_agent\files\assets\images\avatar-4.jpg')}}" alt="Generic placeholder image">
                    </a>
                </div>
            </div>
            <div class="chat-reply-box p-b-20">
                <div class="right-icon-control">
                    <input type="text" class="form-control search-text" placeholder="Share Your Thoughts">
                    <div class="form-icon">
                        <i class="feather icon-navigation"></i>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sidebar inner chat end-->
        <div class="pcoded-main-container">
            <div class="pcoded-wrapper">
                <nav class="pcoded-navbar">
                    <div class="pcoded-inner-navbar main-menu">
                        <div class="pcoded-navigatio-lavel">Navigation</div>
                        <ul class="pcoded-item pcoded-left-item">
{{--                            <li class="pcoded-hasmenu">--}}
{{--                                <a href="javascript:void(0)">--}}
{{--                                    <span class="pcoded-micon"><i class="feather icon-sidebar"></i></span>--}}
{{--                                    <span class="pcoded-mtext">Agent</span>--}}
{{--                                </a>--}}
{{--                                <ul class="pcoded-submenu">--}}
{{--                                    <li class=" pcoded-hasmenu">--}}
{{--                                        <router-link to="/agentsProfile">--}}
{{--                                            <span class="pcoded-mtext">Agent</span>--}}
{{--                                        </router-link>--}}
{{--                                        <ul class="pcoded-submenu">--}}
{{--                                            <li class=" ">--}}
{{--                                                <router-link to="/message">--}}
{{--                                                    <span class="pcoded-mtext">Profile</span>--}}
{{--                                                </router-link>--}}
{{--                                            </li>--}}
{{--                                            <li class=" ">--}}
{{--                                                <a href="menu-header-fixed.htm">--}}
{{--                                                    <span class="pcoded-mtext">Header Fixed</span>--}}
{{--                                                </a>--}}
{{--                                            </li>--}}
{{--                                            <li class=" ">--}}
{{--                                                <a href="menu-compact.htm">--}}
{{--                                                    <span class="pcoded-mtext">Compact</span>--}}
{{--                                                </a>--}}
{{--                                            </li>--}}
{{--                                            <li class=" ">--}}
{{--                                                <a href="menu-sidebar.htm">--}}
{{--                                                    <span class="pcoded-mtext">Sidebar Fixed</span>--}}
{{--                                                </a>--}}
{{--                                            </li>--}}

{{--                                        </ul>--}}
{{--                                    </li>--}}
{{--                                    <li class=" pcoded-hasmenu">--}}
{{--                                        <router-link to="/createAgentProfile">--}}
{{--                                            <span class="pcoded-mtext">AgentProfile</span>--}}
{{--                                        </router-link>--}}
{{--                                        <ul class="pcoded-submenu">--}}
{{--                                            <li class=" ">--}}
{{--                                                <a href="menu-horizontal-static.htm" target="_blank">--}}
{{--                                                    <span class="pcoded-mtext">Static Layout</span>--}}
{{--                                                </a>--}}
{{--                                            </li>--}}
{{--                                            <li class=" ">--}}
{{--                                                <a href="menu-horizontal-fixed.htm" target="_blank">--}}
{{--                                                    <span class="pcoded-mtext">Fixed layout</span>--}}
{{--                                                </a>--}}
{{--                                            </li>--}}
{{--                                            <li class=" ">--}}
{{--                                                <a href="menu-horizontal-icon.htm" target="_blank">--}}
{{--                                                    <span class="pcoded-mtext">Static With Icon</span>--}}
{{--                                                </a>--}}
{{--                                            </li>--}}
{{--                                            <li class=" ">--}}
{{--                                                <a href="menu-horizontal-icon-fixed.htm" target="_blank">--}}
{{--                                                    <span class="pcoded-mtext">Fixed With Icon</span>--}}
{{--                                                </a>--}}
{{--                                            </li>--}}
{{--                                        </ul>--}}
{{--                                    </li>--}}
{{--                                    <li class=" ">--}}
{{--                                        <a href="menu-bottom.htm">--}}
{{--                                            <span class="pcoded-mtext">Bottom Menu</span>--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
{{--                                    <li class=" ">--}}
{{--                                        <router-link to="message">--}}
{{--                                            <span class="pcoded-mtext">Box Layout</span>--}}
{{--                                        </router-link>--}}
{{--                                    </li>--}}
{{--                                    <li class=" ">--}}
{{--                                        <a href="menu-rtl.htm" target="_blank">--}}
{{--                                            <span class="pcoded-mtext">RTL</span>--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}

                            <li class="pcoded-hasmenu">
                                <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="feather icon-layers"></i></span>
                                    <span class="pcoded-mtext">Packages</span>
                                </a>
                                <ul class="pcoded-submenu">
                                    @if(!empty($agents))

                                        @foreach($agents as $singleAgent)

                                        <li class=" ">



                                         <!-- Get the id of the clicked agent -->
                                        <a href="{{route('showPackageList',[$singleAgent->agent_reg_id])}}">
                                            <span class="pcoded-mtext">Complete Package</span>
                                        </a>
                                    </li>

                                        <li class=" ">



                                         <!-- Get the id of the clicked agent -->
                                        <a href="{{route('showPartialPackage',[$singleAgent->agent_reg_id])}}">
                                            <span class="pcoded-mtext">Partial Package</span>
                                        </a>
                                    </li>
                                    @endforeach
                                    @endif

                                </ul>
                            </li>

                        </ul>


                    </div>
                </nav>
                <div class="pcoded-content">

                    @yield('content')
{{--                    <router-view></router-view>--}}
                        </div>

            </div>

        </div>

    </div>

</div>

@include('sweetalert::alert')

{{--<script src="{{asset('/js/app.js')}}"></script>--}}


<!-- Warning Section Starts -->
<!-- Older IE warning message -->
<!--[if lt IE 10]>
<![endif]-->
<!-- Warning Section Ends -->
<!-- Required Jquery -->
<!--<script data-cfasync="false" src="..\..\..\cdn-cgi\scripts\5c5dd728\cloudflare-static\email-decode.min.js"></script>-->
<script type="text/javascript" src="{{asset('local_agent\files\bower_components\jquery\js\jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('local_agent\files\bower_components\jquery-ui\js\jquery-ui.min.js')}}"></script>
<script type="text/javascript" src="{{asset('local_agent\files\bower_components\popper.js\js\popper.min.js')}}"></script>
<script type="text/javascript" src="{{asset('local_agent\files\bower_components\bootstrap\js\bootstrap.min.js')}}"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="{{asset('local_agent\files\bower_components\jquery-slimscroll\js\jquery.slimscroll.js')}}"></script>
<!-- modernizr js -->
<script type="text/javascript" src="{{asset('local_agent\files\bower_components\modernizr\js\modernizr.js')}}"></script>
<!-- Chart js -->
<script type="text/javascript" src="{{asset('local_agent\files\bower_components\chart.js\js\Chart.js')}}"></script>
<!-- amchart js -->
<script src="{{asset('local_agent\files\assets\pages\widget\amchart\amcharts.js')}}"></script>
<script src="{{asset('local_agent\files\assets\pages\widget\amchart\serial.js')}}"></script>
<script src="{{asset('local_agent\files\assets\pages\widget\amchart\light.js')}}"></script>
<script src="{{asset('local_agent\files\assets\js\jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script type="text/javascript" src="{{asset('local_agent\files\assets\js\SmoothScroll.js')}}"></script>
<script src="{{asset('local_agent\files\assets\js\pcoded.min.js')}}"></script>
<!-- custom js -->
<script src="{{asset('local_agent\files\assets\js\vartical-layout.min.js')}}"></script>
<script type="text/javascript" src="{{asset('local_agent\files\assets\pages\dashboard\custom-dashboard.js')}}"></script>
<script type="text/javascript" src="{{asset('local_agent\files\assets\js\script.min.js')}}"></script>
<script type="text/javascript" src="{{asset('local_agent\files\bower_components\modernizr\js\css-scrollbars.js')}}"></script>
{{--<script type="text/javascript" src="{{asset('local_agent\files\assets\pages\chat\js\chat.js')}}"></script>--}}
{{--<script src="{{asset('local_agent\files\assets\pages\chat\js\mmc-common.js')}}"></script>--}}
{{--<script src="{{asset('local_agent\files\assets\pages\chat\js\mmc-chat.js')}}"></script>--}}


<!-- Global site tag (gtag.js) - Google Analytics -->
<script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>

<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
</script>

</body>

</html>
