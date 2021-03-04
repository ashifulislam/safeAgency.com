<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Page Title -->
    <title>SafeAgency.com</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('user')}}/images/logo/favicon.png" type="image/x-icon">

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{asset('user')}}/css/animate-3.7.0.css">
    <link rel="stylesheet" href="{{asset('employer')}}/css/font-awesome-4.7.0.min.css">
    <link rel="stylesheet" href="{{asset('user')}}/fonts/flat-icon/flaticon.css">
    <link rel="stylesheet" href="{{asset('user')}}/css/bootstrap-4.1.3.min.css">
    <link rel="stylesheet" href="{{asset('user')}}/css/owl-carousel.min.css">
    <link rel="stylesheet" href="{{asset('user')}}/css/nice-select.css">
    <link rel="stylesheet" href="{{asset('user')}}/css/style.css">
</head>
<body>
<!-- Preloader Starts -->
<div class="preloader">
    <div class="spinner"></div>
</div>
<!-- Preloader End -->

<!-- Header Area Starts -->
@include('layouts/user/header')
<!-- Header Area End -->




<section class="jobs-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                    <div class="single-job mb-4 d-lg-flex justify-content-between">
                        <div class="job-text">
                            <p style="color:black;">SafeAgency.com is a platform where a candidate can find their dream job in abroad easily and safely. If they can complete the whole job process then this is ok. If they could not then a candidate can find and hire an experienced agent who is waiting to assist you. An employer can find their desired candidate from this platform.</p>
                            <p style="color:black;">How the safety is going to ensure?</p>
                            <p style="color:black;">The safety is going to ensure by some filtering process</p>
                            <ol>
                                <li style="color:black;">We provide a safe authentication system for all the users</li>
                                <li style="color:black;">Here super admin is going to verify the agent through the agent's license number</li>
                                <li style="color:black;">An employer can not make a job post directly. The job post is going to verify through the super admin</li>
                                <li style="color:black;">A candidate can transact their money through the safe SSLCOMMERZ platform</li>
                            </ol>
                        </div>
                    </div>

            </div>
        </div>
        <div class="more-job-btn mt-5 text-center">
            <a style="margin-bottom: 15px;" href="#" class="template-btn">more job post</a>
        </div>
    </div>
</section>


<!-- Footer Area Starts -->
@include('layouts/user/footer')
<!-- Footer Area End -->


<!-- Javascript -->
<script src="{{asset('user/js/vendor/jquery-2.2.4.min.js')}}"></script>
<script src="{{asset('user/js/vendor/bootstrap-4.1.3.min.js')}}"></script>
<script src="{{asset('user/js/vendor/wow.min.js')}}"></script>
<script src="{{asset('user/js/vendor/owl-carousel.min.js')}}"></script>
<script src="{{asset('user/js/vendor/jquery.nice-select.min.js')}}"></script>
<script src="{{asset('user/js/vendor/ion.rangeSlider.js')}}"></script>
<script src="{{asset('user/js/main.js')}}"></script>
</body>
</html>
