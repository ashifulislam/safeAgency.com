<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <title>Job Single</title>


    <link rel="shortcut icon" href="{{asset('user/images/logo/favicon.png')}}" type="image/x-icon">



    <link rel="stylesheet" href="{{asset('user')}}/css/bootstrap-4.1.3.min.css">


    <link rel="stylesheet" href="{{asset('user')}}/css/style.css">
    <link rel="stylesheet" href="{{asset('employer')}}/css/employer.css">
</head>
@if(count($errors)>0)
 @foreach($errors->all() as $error)
     {{$error}}
 @endforeach

@endif

@if(session('emailExists'))
    {{session('emailExists')}}
@endif
@if(session('passNotMatch'))

   {{session('passNotMatch')}}
@endif
   @if(session('successfull'))

   {{session('successfull')}}
@endif
<body>
    <!-- Preloader Starts -->
    <div class="preloader">
        <div class="spinner"></div>
    </div>
    <!-- Preloader End -->

    <!-- Header Area Starts -->

     <header class="header-area single-page">
      @include('layouts/user/headerCreateEmployer')
        <div class="page-title text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <h2>Fill Up The Applcation From</h2>
                        <p> Fill the application form for your desired job</p>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End -->

    <!-- Job Single Content Starts -->
    <section class="job-single-content section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main-content">
                        <div class="single-content1">
                            <div class="single-job mb-4 d-lg-flex justify-content-between">
                               <div class="SignUp">
        <form name="employerProfile"  method="post" action="{{url('addEmployerOperation')}}" >
                    {{csrf_field()}}
                <h1 style="color:#fff;"> Fill The Application Form</h1><br>

                  <div>
               <div class="einfo">

                    <h3 style="color:#fff;"> <u>Account Info</u></h3>
               <label>princeashiful@gmail.com</label>
                <br><br>
                  <h3 style="color:#fff;"> <u>Company</u></h3>
              <label>IT</label>
                <br><br>
                 <h3 style="color:#fff;"> <u>Position</u></h3>
              <label>Senior</label>
               <br><br>
                <input type="number" placeholder="enter your expected salary" name="password" onchange="checkMatchPassword();" >
                <br><br>





                <div class="center-block" >

                <input type="checkbox" name="myCheck" id="myCheck">I agree with the terms and conditions<br>
                 </div>
                <input class="center-block" type="submit" name="signup" value="Apply"><br><br><br>
                Already have cv?<a href="{{url('logInForEmployer')}}"> &nbsp; Profile</a>



            </form>
        </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Job Single Content End -->


    <!-- Newsletter Area Starts -->
    <section class="newsletter-area job-single section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-top text-center">
                        <h2>Get job information daily</h2>
                        <p>Subscribe to our newsletter and get a coupon code!</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form action="#">
                        <input type="email" placeholder="Your email here" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your email here'" required>
                        <button type="submit" class="template-btn">subscribe now</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Newsletter Area End -->


    <!-- Footer Area Starts -->
    @include('layouts/user/footer')
        <!-- Footer Area End -->


    <!-- Javascript -->
    <script src="user/js/vendor/jquery-2.2.4.min.js"></script>
	<script src="user/js/vendor/bootstrap-4.1.3.min.js"></script>
    <script src="user/js/vendor/wow.min.js"></script>
    <script src="user/js/vendor/owl-carousel.min.js"></script>
    <script src="user/js/vendor/jquery.nice-select.min.js"></script>
    <script src="user/js/vendor/ion.rangeSlider.js"></script>
    <script src="user/js/main.js"></script>
</body>
</html>
