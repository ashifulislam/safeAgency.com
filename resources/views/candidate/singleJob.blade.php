<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Page Title -->
    <title>Chakuri.com</title>

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
                        <h4>{{ $singleJobPost->jobCategory->categoryName }} <br>{{ $singleJobPost->jobCategory->categoryType }}</h4>
                        <p>{{$singleJobPost->jobDetails}}</p>


                        <h4>vacancy</h4>
                        <span class="ml-4">{{$singleJobPost->vacancy}}</span>


                        <h4>job responsibility</h4>
                        <p></p>
                        <ul>
                            <li class="mb-2">{{$singleJobPost->responsibility}}</li>


                        </ul>


                        <h4>Educational Requirements</h4>
                        <p>{{$singleJobPost->degreeType}}</p>



                        <h4>employment status</h4>
                        <span>{{$singleJobPost->employmentStatus}}</span>


                        <h4>Experience Requirements</h4>
                        <ul class="mt-3">

                            <li class="mb-2">{{$singleJobPost->experience}}</li>


                        </ul>

                        <h4>position</h4>
                        <ul class="mt-3">

                            <li class="mb-2">{{$singleJobPost->jobPosition}}</li>


                        </ul>



                        <a class="template-btn" href="{{ route('application.show',$singleJobPost->id) }}" class="third-btn">apply</a>

                </div>
            </div>

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
