<!DOCTYPE html>
<html lang="en">

<head>
    <title>Local Agent Dashboard</title>
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

                <div class="navbar-logo">
                    <a class="mobile-menu" id="mobile-collapse" href="#!">
                        <i class="feather icon-menu"></i>
                    </a>


                    <a href="index-1.htm">
{{--                        <img height="150" width="100" src="{{asset('/img/profile/'.$singleAgent->photo)}}" alt="not">--}}


                        {{--                        <img class="img-fluid" src="{{asset('local_agent\files\assets\images\logo.png')}}" alt="Theme-Logo" width = "75%">--}}
                    </a>


                    <a class="mobile-options">
                        <i class="feather icon-more-horizontal"></i>
                    </a>
                </div>

                <div class="navbar-container container-fluid">
                    <ul class="nav-left">
                        <li class="header-search">
                            <div class="main-search morphsearch-search">
                                <div class="input-group">
                                    <span class="input-group-addon search-close"><i class="feather icon-x"></i></span>
                                    <input type="text" class="form-control">
                                    <span class="input-group-addon search-btn"><i class="feather icon-search"></i></span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#!" onclick="javascript:toggleFullScreen()">
                                <i class="feather icon-maximize full-screen"></i>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav-right">
                        <li class="header-notification">
                            <div class="dropdown-primary dropdown">
                                <div class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="feather icon-bell"></i>
                                    <span class="badge bg-c-pink">5</span>
                                </div>
                                <ul class="show-notification notification-view dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                    <li>
                                        <h6>Notifications</h6>
                                        <label class="label label-danger">New</label>
                                    </li>
                                    <li>
                                        <div class="media">
                                            <img class="d-flex align-self-center img-radius" src="{{asset('local_agent\files\assets\images\avatar-4.jpg')}}" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="notification-user">Soeng Souy</h5>
                                                <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                <span class="notification-time">30 minutes ago</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media">
                                            <img class="d-flex align-self-center img-radius" src="{{asset('local_agent\files\assets\images\avatar-3.jpg')}}" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="notification-user">Joseph William</h5>
                                                <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                <span class="notification-time">30 minutes ago</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media">
                                            <img class="d-flex align-self-center img-radius" src="{{asset('local_agent\files\assets\images\avatar-4.jpg')}}" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="notification-user">Sara Soudein</h5>
                                                <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                <span class="notification-time">30 minutes ago</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="header-notification">
                            <div class="dropdown-primary dropdown">
                                <div class="displayChatbox dropdown-toggle" data-toggle="dropdown">
                                    <i class="feather icon-message-square"></i>
                                    <span class="badge bg-c-green">3</span>
                                </div>
                            </div>
                        </li>
                        <li class="user-profile header-notification">
                            <div class="dropdown-primary dropdown">
                                <div class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="{{asset('local_agent\files\assets\images\avatar-4.jpg')}}" class="img-radius" alt="User-Profile-Image">
{{--                                    <span>{{Auth::user()->name}}</span>--}}
                                    <i class="feather icon-chevron-down"></i>
                                </div>
                                <ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                    <li>
                                        <a href="#!">
                                            <i class="feather icon-settings"></i> Settings
                                        </a>
                                    </li>
                                    <li>
                                        <a href="user-profile.htm">
                                            <i class="feather icon-user"></i> Profile
                                        </a>
                                    </li>
                                    <li>
                                        <a href="email-inbox.htm">
                                            <i class="feather icon-mail"></i> My Messages
                                        </a>
                                    </li>
                                    <li>
                                        <a href="auth-lock-screen.htm">
                                            <i class="feather icon-lock"></i> Lock Screen
                                        </a>
                                    </li>
                                    <li>
                                        <a href="auth-normal-sign-in.htm">
                                            <i class="feather icon-log-out"></i> Logout
                                        </a>
                                    </li>
                                </ul>

                            </div>
                        </li>
                    </ul>
                </div>
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
                            <li class="pcoded-hasmenu">
                                <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="feather icon-sidebar"></i></span>
                                    <span class="pcoded-mtext">ManageProfile</span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li class=" pcoded-hasmenu">
                                        <router-link to="/agentsProfile">
                                            <span class="pcoded-mtext">Agent</span>
                                        </router-link>
                                        <ul class="pcoded-submenu">


                                        </ul>
                                    </li>
                                    <li class=" pcoded-hasmenu">
                                        <router-link to="/createAgentProfile">
                                            <span class="pcoded-mtext">AgentProfile</span>
                                        </router-link>
                                    </li>
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
                                </ul>
                            </li>

                            <li class="pcoded-hasmenu">
                                <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="feather icon-layers"></i></span>
                                    <span class="pcoded-mtext">Packages</span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li class=" ">
                                        <a href="{{route('serviceTypes.index')}}">
                                            <span class="pcoded-mtext">Service</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="{{route('packageType.index')}}">
                                            <span class="pcoded-mtext">PackageType</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="{{route('postService.index')}}">
                                            <span class="pcoded-mtext">PostService</span>
                                        </a>
                                    </li>


                                </ul>
                            </li>

                            <li class="pcoded-hasmenu">

                                <ul class="pcoded-submenu">
{{--                                    <li class=" ">--}}
{{--                                        <a href="widget-statistic.htm">--}}
{{--                                            <span class="pcoded-mtext">Work Permit</span>--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
{{--                                    <li class=" ">--}}
{{--                                        <a href="widget-data.htm">--}}
{{--                                            <span class="pcoded-mtext">Visa Process</span>--}}
{{--                                        </a>--}}
{{--                                    </li>--}}


                                </ul>
                            </li>

                            <li class="pcoded-hasmenu">
{{--                                <a href="javascript:void(0)">--}}
{{--                                    <span class="pcoded-micon"><i class="feather icon-layers"></i></span>--}}
{{--                                    <span class="pcoded-mtext">Manage Flight</span>--}}
{{--                                </a>--}}
                                <ul class="pcoded-submenu">
{{--                                    <li class=" ">--}}
{{--                                        <a href="widget-statistic.htm">--}}
{{--                                            <span class="pcoded-mtext">Statistic</span>--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
{{--                                    <li class=" ">--}}
{{--                                        <a href="widget-data.htm">--}}
{{--                                            <span class="pcoded-mtext">Data</span>--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
{{--                                    <li class=" ">--}}
{{--                                        <a href="widget-chart.htm">--}}
{{--                                            <span class="pcoded-mtext">Chart Widget</span>--}}
{{--                                        </a>--}}
{{--                                    </li>--}}

                                </ul>
                            </li>
                            <li class="active">
                                <a href="{{route('chat')}}">
                                    <span class="pcoded-micon"><i class="feather icon-message-square"></i></span>
                                    <span class="pcoded-mtext">chatWithCandidate</span>
                                </a>
                            </li>
{{--                            <li class="active">--}}
{{--                                <a href="{{route('chatWithCandidate')}}">--}}
{{--                                    <span class="pcoded-micon"><i class="feather icon-message-square"></i></span>--}}
{{--                                    <span class="pcoded-mtext">ChatWithCandidate</span>--}}
{{--                                </a>--}}
{{--                            </li>--}}
                            <li class="active">
                                <a href="{{route('seeEmployers')}}">
                                    <span class="pcoded-micon"><i class="feather icon-layers"></i></span>
                                    <span class="pcoded-mtext">EmployerLists</span>
                                </a>
                            </li>
                            <li class="active">
                                <a href="{{route('seeRequests')}}">
                                    <span class="pcoded-micon"><i class="feather icon-layers"></i></span>
                                    <span class="pcoded-mtext">EmployerRequests</span>
                                </a>
                            </li>
                            <li class="active">
                                <a href="{{route('candidateRequests')}}">
                                    <span class="pcoded-micon"><i class="feather icon-layers"></i></span>
                                    <span class="pcoded-mtext">CandidateRequests</span>
                                </a>
                            </li>
                            <li class="active">
                                <a href="{{route('approvedCandidates')}}">
                                    <span class="pcoded-micon"><i class="feather icon-layers"></i></span>
                                    <span class="pcoded-mtext">ApprovedCandidates</span>
                                </a>
                            </li>
                            <li class="active">
                                <a href="{{route('requiredTasks')}}">
                                    <span class="pcoded-micon"><i class="feather icon-layers"></i></span>
                                    <span class="pcoded-mtext">Tasks</span>
                                </a>
                            </li>
                        </ul>


                    </div>
                </nav>
                <div class="pcoded-content">

                    @yield('content')
                    <router-view></router-view>
                        </div>

            </div>
        </div>
    </div>
</div>
@include('sweetalert::alert')

<script src="{{asset('/js/app.js')}}"></script>




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

<script>
    $('#edit').on('show.bs.modal', function (event) {

        var button = $(event.relatedTarget)
        var service_title =   button.data('servicetitle')
        var service_type  =   button.data('servicetype')
        var service_type_id = button.data('servicetypeid')


        var modal = $(this)

        modal.find('.modal-body #service_title').val(service_title);
        modal.find('.modal-body #service_type').val(service_type);
        modal.find('.modal-body #serviceType_id').val(service_type_id);




    })
    $('#delete').on('show.bs.modal', function (event) {

        var button = $(event.relatedTarget)

        var service_type_id=button.data('servicetypeid')


        var modal = $(this)

        modal.find('.modal-body #serviceType_id').val(service_type_id);




    })

    $('#editPackage').on('show.bs.modal', function (event) {

        var button = $(event.relatedTarget)
        var package_type  =   button.data('packagetype')
        var package_type_id = button.data('packagetypeid')


        var modal = $(this)

        modal.find('.modal-body #package_type').val(package_type);
        modal.find('.modal-body #packageType_id').val(package_type_id);




    })
    $('#deletePackage').on('show.bs.modal', function (event) {

        var button = $(event.relatedTarget)

        var package_type_id=button.data('packagetypeid')


        var modal = $(this)

        modal.find('.modal-body #packageType_id').val(package_type_id);




    })
</script>

</body>

</html>
