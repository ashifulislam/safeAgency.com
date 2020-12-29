
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <!--  This file has been downloaded from bootdey.com    @bootdey on twitter -->
        <!--  All snippets are MIT license http://bootdey.com/license -->
        <title>Chat box</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
        <!-- Google Fonts
            ============================================ -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
        <!-- Bootstrap CSS
            ============================================ -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- Bootstrap CSS
            ============================================ -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <!-- nalika Icon CSS
            ============================================ -->
        <link rel="stylesheet" href="css/nalika-icon.css">
        <!-- owl.carousel CSS
            ============================================ -->
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/owl.theme.css">
        <link rel="stylesheet" href="css/owl.transitions.css">
        <!-- animate CSS
            ============================================ -->
        <link rel="stylesheet" href="css/animate.css">
        <!-- normalize CSS
            ============================================ -->
        <link rel="stylesheet" href="css/normalize.css">
        <!-- meanmenu icon CSS
            ============================================ -->
        <link rel="stylesheet" href="css/meanmenu.min.css">
        <!-- main CSS
            ============================================ -->
        <link rel="stylesheet" href="css/main.css">
        <!-- morrisjs CSS
            ============================================ -->
        <link rel="stylesheet" href="css/morrisjs/morris.css">
        <!-- mCustomScrollbar CSS
            ============================================ -->
        <link rel="stylesheet" href="css/scrollbar/jquery.mCustomScrollbar.min.css">
        <!-- metisMenu CSS
            ============================================ -->
        <link rel="stylesheet" href="css/metisMenu/metisMenu.min.css">
        <link rel="stylesheet" href="css/metisMenu/metisMenu-vertical.css">
        <!-- calendar CSS
            ============================================ -->
        <link rel="stylesheet" href="css/calendar/fullcalendar.min.css">
        <link rel="stylesheet" href="css/calendar/fullcalendar.print.min.css">
        <!-- style CSS
            ============================================ -->
        <link rel="stylesheet" href="style.css">
        <!-- responsive CSS
            ============================================ -->
        <link rel="stylesheet" href="css/responsive.css">
        <!-- modernizr JS
            ============================================ -->

        <script src="js/vendor/modernizr-2.8.3.min.js"></script>

        <link rel="stylesheet" href="{{asset('user')}}/css/style.css">
        <link rel="stylesheet" href="{{asset('employer')}}/css/employer.css">
        <style type="text/css">


            .portlet {
                margin-bottom: 15px;
                margin-top: 100px;
            }

            .btn-white {
                border-color: #cccccc;
                color: #333333;
                background-color: #ffffff;
            }

            .portlet {
                border: 1px solid;
            }

            .portlet .portlet-heading {
                padding: 0 15px;
            }

            .portlet .portlet-heading h4 {
                padding: 1px 0;
                font-size: 16px;
            }

            .portlet .portlet-heading a {
                color: #fff;
            }

            .portlet .portlet-heading a:hover,
            .portlet .portlet-heading a:active,
            .portlet .portlet-heading a:focus {
                outline: none;
            }

            .portlet .portlet-widgets .dropdown-menu a {
                color: #333;
            }

            .portlet .portlet-widgets ul.dropdown-menu {
                min-width: 0;
            }

            .portlet .portlet-heading .portlet-title {
                float: left;
            }

            .portlet .portlet-heading .portlet-title h4 {
                margin: 10px 0;
            }

            .portlet .portlet-heading .portlet-widgets {
                float: right;
                margin: 8px 0;
            }

            .portlet .portlet-heading .portlet-widgets .tabbed-portlets {
                display: inline;
            }

            .portlet .portlet-heading .portlet-widgets .divider {
                margin: 0 5px;
            }

            .portlet .portlet-body {
                padding: 15px;
                background: #fff;
            }

            .portlet .portlet-footer {
                padding: 10px 15px;
                background: #e0e7e8;
            }

            .portlet .portlet-footer ul {
                margin: 0;
            }

            .portlet-green,
            .portlet-green>.portlet-heading {
                border-color: #16a085;
            }

            .portlet-green>.portlet-heading {
                color: #fff;
                background-color: #16a085;
            }

            .portlet-orange,
            .portlet-orange>.portlet-heading {
                border-color: #f39c12;
            }

            .portlet-orange>.portlet-heading {
                color: #fff;
                background-color: #f39c12;
            }

            .portlet-blue,
            .portlet-blue>.portlet-heading {
                border-color: #2980b9;
            }

            .portlet-blue>.portlet-heading {
                color: #fff;
                background-color: #2980b9;
            }

            .portlet-red,
            .portlet-red>.portlet-heading {
                border-color: #e74c3c;
            }

            .portlet-red>.portlet-heading {
                color: #fff;
                background-color: #e74c3c;
            }

            .portlet-purple,
            .portlet-purple>.portlet-heading {
                border-color: #8e44ad;
            }

            .portlet-purple>.portlet-heading {
                color: #fff;
                background-color: #8e44ad;
            }

            .portlet-default,
            .portlet-dark-blue,
            .portlet-default>.portlet-heading,
            .portlet-dark-blue>.portlet-heading {
                border-color: #34495e;
            }

            .portlet-default>.portlet-heading,
            .portlet-dark-blue>.portlet-heading {
                color: #fff;
                background-color: #34495e;
            }

            .portlet-basic,
            .portlet-basic>.portlet-heading {
                border-color: #333;
            }

            .portlet-basic>.portlet-heading {
                border-bottom: 1px solid #333;
                color: #333;
                background-color: #fff;
            }

            @media(min-width:768px) {
                .portlet {
                    margin-bottom: 30px;
                }
            }

            .img-chat{
                width:40px;
                height:40px;
            }

            .text-green {
                color: #16a085;
            }

            .text-orange {
                color: #f39c12;
            }

            .text-red {
                color: #e74c3c;
            }
        </style>
    </head>
    <body>
    @include('layouts/candidate/candidateSideBar');
    @include('layouts/candidate/candidateNavBar');


    <div id="pcoded" class="container bootstrap snippets bootdey">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="portlet portlet-default">
                    <div class="portlet-heading">
                        <div class="portlet-title">
                            <h4><i class="fa fa-circle text-green"></i> {{Auth::user()->firstName}}</h4>
                        </div>
                        <div class="portlet-widgets">
                            <div class="btn-group">
                                <button type="button" class="btn btn-white dropdown-toggle btn-xs" data-toggle="dropdown">
                                    <i class="fa fa-circle text-green"></i> Status
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#"><i class="fa fa-circle text-green"></i> Online</a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-circle text-orange"></i> Away</a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-circle text-red"></i> Offline</a>
                                    </li>
                                </ul>
                            </div>
                            <span class="divider"></span>
                            <a data-toggle="collapse" data-parent="#accordion" href="#chat"><i class="fa fa-chevron-down"></i></a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div id="chat" class="panel-collapse collapse in">
                        <div>
                            <div class="portlet-body chat-widget" style="overflow-y: auto; width: auto; height: 300px;">
                                <div class="row">
                                    <div class="col-lg-12">
{{--                                        <p class="text-center text-muted small">January 1, 2014 at 12:23 PM</p>--}}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="media">
                                            <a class="pull-left" href="#">
                                                <img class="media-object img-circle img-chat" src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="">
                                            </a>
                                            <div class="media-body">
                                                <message v-for="(value,index) in chat.message" :key="value.index"
                                                         :user=chat.user[index]
                                                         :time=chat.time[index]


                                                >
                                                    @{{ value }}
                                                </message>

                                            </div>
                                        </div>
                                    </div>
                                </div>

{{--                                <div class="row">--}}
{{--                                    <div class="col-lg-12">--}}
{{--                                        <div class="media">--}}
{{--                                            <a class="pull-left" href="#">--}}
{{--                                                <img class="media-object img-circle img-chat" src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="">--}}
{{--                                            </a>--}}

{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                                <div class="row">--}}
{{--                                    <div class="col-lg-12">--}}
{{--                                        <div class="media">--}}
{{--                                            <a class="pull-left" href="#">--}}
{{--                                                <img class="media-object img-circle img-chat" src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="">--}}
{{--                                            </a>--}}
{{--                                            <div class="media-body">--}}
{{--                                                <h4 class="media-heading">Jane Smith--}}
{{--                                                    <span class="small pull-right">12:39 PM</span>--}}
{{--                                                </h4>--}}
{{--                                                <p>No not yet, the transaction hasn't cleared yet. I will let you know as soon as everything goes through. Any idea where you want to get lunch today?</p>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                            </div>
                        </div>
                        <div class="portlet-footer">
                            <form role="form">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Enter message..." v-model='message'></textarea>
                                </div>
                                <div class="form-group">
                                    <button v-on:click="sendUpdate()" type="button" class="btn btn-default pull-right">Send</button>
                                    <div class="clearfix"></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.col-md-4 -->
        </div>
    </div>
    <script src="{{asset('/js/app.js')}}"></script>

    <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script type="text/javascript">


    </script>

    </body>
    </html>
