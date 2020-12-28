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

            <h1>Job Application List</h1>
            <div class="col-lg-12">
                @foreach($appliedJobs as $application)
                    <div class="single-job mb-4 d-lg-flex justify-content-between">
                        <div class="job-text">
                            <ul class="mt-4">
                                <div class="col-lg-6 "style="float: left;position:relative">

                                    <h4>Category</h4>
                                    <li class="mb-3"><h5><i class="fa fa-map-marker"></i> {{ $application->jobPost->jobCategory->categoryName }}</h5></li>
                                    <h4>Company Name</h4>
                                    <li class="mb-3"><h5><i class="fa fa-map-marker"></i> {{ $application->jobPost->employer->companyName }}</h5></li>
                                    <h4>Your Name</h4>
                                    <li class="mb-3"><h5><i class="fa fa-pie-chart"></i> {{Auth::user()->firstName}}</h5></li>
                                </div>
                                <div class="col-lg-6 " style="float:left;position:relative">
                                    <h4>Position Applied</h4>
                                    <li class="mb-3"><h5><i class="fa fa-pie-chart"></i> {{$application->jobPost->jobPosition}}</h5></li>
                                    <h4>Status</h4>
                                    <li class="mb-3"><h5><i class="fa fa-pie-chart"></i> {{$application->status}}</h5></li>
                                    <h4>company Details</h4>
                                    <li class="mb-3"><h5><i class="fa fa-pie-chart"></i> {{$application->jobPost->employer->companyDetails}}</h5></li>
                                </div>


{{--                                <li><h5><i class="fa fa-clock-o"></i> Deadline Deadline: {{$jobPost->deadLine}}</h5></li>--}}
                            </ul>
                        </div>
                        <div class="job-img align-self-center">

                        </div>
                        <div class="job-btn align-self-center">

{{--                            <a href="{{ route('post.details',$jobPost->id) }}" class="third-btn">apply</a>--}}
                        </div>
                    </div>

                @endforeach
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
