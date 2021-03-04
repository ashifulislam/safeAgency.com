
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Employer</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css')}}'">
    <!-- nalika Icon CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('css/nalika-icon.css')}}">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.transitions.css')}}">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('css/normalize.css')}}">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('css/meanmenu.min.css')}}">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('css/morrisjs/morris.css')}}">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('css/scrollbar/jquery.mCustomScrollbar.min.css')}}">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('css/metisMenu/metisMenu.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/metisMenu/metisMenu-vertical.css')}}">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('css/calendar/fullcalendar.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/calendar/fullcalendar.print.min.css')}}">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('style.css')}}">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
    <!-- modernizr JS
		============================================ -->

    <script src="js/vendor/modernizr-2.8.3.min.js"></script>

    <link rel="stylesheet" href="{{asset('user')}}/css/style.css">
    <link rel="stylesheet" href="{{asset('employer')}}/css/employer.css">
</head>


<body>


@include('layouts/user/employerSideBar');


<div class="all-content-wrapper">

    <div class="container-fluid">

        @include('layouts/user/employerNavBar');

        <section class="job-single-content section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="main-content">
                            <div class="single-content1">
                                <div class="single-job mb-4 d-lg-flex justify-content-between">
                                    <div class="SignUp">
                                        <form name="employerProfile"  method="post"  action="{{url('/edit',array($updateEmployerProfile->id))}}">
                                            {{csrf_field()}}
                                            <h2 style="color:orange;"> Update Profile</h2><br>
                                            <h4 style="color:#fff;"> <u> Personal Info</u></h4>
                                            <input type="text" placeholder="enter First Name" value="<?php
                                            echo $updateEmployerProfile->firstName ?>" name="FirstName">
                                            <br><br>
                                            <input type="text" placeholder="enter Last Name" name="LastName"
                                                   value="<?php echo $updateEmployerProfile->lastName?>">
                                            <br><br>
                                            <h4 style="color:#fff;"> <u> Company's Info</u></h4>

                                            <input type="text" placeholder="enter company name" name="CompanyName"
                                                   value="<?php echo $updateEmployerProfile->companyName ?>" >
                                            <br><br>
                                            <textarea name="CompanyDetails"

                                                      row="7" cols="40" placeholder="Enter company Details" >{{$updateEmployerProfile->companyDetails}}</textarea>
                                            <h4 style="color:#fff;"> <u> Company's Address</u></h4>

                                            <input type="text" placeholder="enter company's country" name="CompanyCountry" value="<?php echo $updateEmployerProfile->companyCountry?>" >
                                            <br><br>
                                            <input type="text" placeholder="enter company's state" name="CompanyState" value="<?php echo $updateEmployerProfile->companyState ?>" >
                                            <br><br>
                                            <input type="number" placeholder="enter company's zip Code" name="CompanyZipCode" value="<?php echo $updateEmployerProfile->companyZipCode?>" >
                                            <br><br>
                                            <input type="checkbox" name="myCheck" id="myCheck">I agree with the terms and conditions<br>

                                            <input class="center-block" type="submit" name="update" value="UPDATE"><br><br><br>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>


</body>

</html>
