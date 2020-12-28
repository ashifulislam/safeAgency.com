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
                        <form name="jobApplication" action="{{route('application.store')}}" method="post">
                        @csrf
                            <div class="job-text">
                            <h2 align="center">Job Application Form</h2>
                            <h4>Account Name </h4>
                            <ul class="mt-4">
                                <li class="mb-3"><h5><i class="fa fa-map-marker"></i> {{ Auth::user()->email }}</h5></li>
                                {{--                                <li class="mb-3"><h5><i class="fa fa-pie-chart"></i> {{$jobPost->vacancy}}</h5></li>--}}
                                {{--                                <li><h5><i class="fa fa-clock-o"></i> Deadline Deadline: {{$jobPost->deadLine}}</h5></li>--}}
                            </ul>
                            <input type="hidden" name="jobPostId" value="{{ $jobPosts->id }}">
                            <h4>Position Applied</h4>
                            <ul class="mt-4">
                                <li class="mb-3"><h5><i class="fa fa-map-marker"></i> {{ $jobPosts->jobPosition }}</h5></li>
{{--                                <li class="mb-3"><h5><i class="fa fa-pie-chart"></i> {{$jobPost->vacancy}}</h5></li>--}}
{{--                                <li><h5><i class="fa fa-clock-o"></i> Deadline Deadline: {{$jobPost->deadLine}}</h5></li>--}}
                            </ul>
                            <h4>Company Name</h4>
                            <ul class="mt-4">
                                <li class="mb-3"><h5><i class="fa fa-map-marker"></i> {{ $jobPosts->employer->companyName }}</h5></li>
                                {{--                                <li class="mb-3"><h5><i class="fa fa-pie-chart"></i> {{$jobPost->vacancy}}</h5></li>--}}
                                {{--                                <li><h5><i class="fa fa-clock-o"></i> Deadline Deadline: {{$jobPost->deadLine}}</h5></li>--}}
                            </ul>
                            <h4>Why You Think You Are Eligible</h4>
                            <textarea name="interest" placeholder="type Eligibility"></textarea>
                            <h4>Expected Salary</h4>
                            <input type="number" name="salary" placeholder="your expected salary"/><br><br>
                        </div>
{{--                            <a href="{{route('application.confirm',$jobPosts->id)}}" name="">Apply Now</a>--}}


                                                        <button type="submit" name="save" class="template-btn">Apply Now</button>

                            {{--                            <a href="{{ route('post.details',$jobPost->id) }}" class="third-btn">apply</a>--}}

                        </form>
                    </div>


            </div>
        </div>
        <div class="more-job-btn mt-5 text-center">
            <a href="#" class="template-btn">more job post</a>
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
