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

    <!-- Banner Area Starts -->
    <section class="banner-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 px-0">
                    <div class="banner-bg"></div>
                </div>
                <div class="col-lg-6 align-self-center">
                    <div class="banner-text">
                        <h1>find your dream <span>job</span> at abroad</h1>
                        <p class="py-3">We are here to assist you. Check out our experienced agent from here
                        You can also give a try with your own approach</p>
                        <a href="#" class="secondary-btn">explore now<span class="flaticon-next"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Area End -->

    <!-- Search Area Starts -->
    <div class="search-area">
        <div class="search-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <form action="{{ route('job.search') }}" method="post" class="d-md-flex justify-content-between">
                            @csrf
                            <select name="categoryTypeId">
                                <option value=""> Choose Category</option>
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->categoryName}}</option>
                                @endforeach

                            </select>
                            @error('categoryTypeId')
                            {{$message}}
                            @enderror
                            <select name="location">

                                <option value=""> Location</option>
                                @foreach($jobPosts as $jobPosts)
                                    <option value="{{$jobPosts->location}}">{{$jobPosts->location}}</option>
                                @endforeach
                            </select>
                            @error('location')
                            {{$message}}
                            @enderror
                            <input type="text" name="searchKeyword" placeholder="Search Keyword" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Keyword'" >
                            <button type="submit" class="template-btn">find job</button>
{{--                            //<input type="submit" value="Search">--}}
                        </form>

                    </div>
                    <div class="col-lg-12">
                        @if($errors->any())
                            <h4>{{$errors->first()}}</h4>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Search Area End -->

{{--    <!-- Feature Area Starts -->--}}
    <section class="feature-area section-padding2">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-top text-center">
                    <h2>Experienced Agent</h2>
                    <p>Here your beloved agent</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                @foreach($agent_profiles as $agent)
                <div class="col-lg-4">
                    <div class="single-feature mb-4 mb-lg-0">
                        <img height="250px" width="100%"  class="img"  src="{{asset('/img/profile/'.$agent->photo)}}" alt="not found">
                        <h4>{{$agent->skill}}</h4>

                        <p class="py-3">{{$agent->bio}}</p>
                        <a href="{{route('showAllAgent', [$agent->agent_reg_id])}}" class="secondary-btn">explore now<span class="flaticon-next"></span></a>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>
{{--    <section class="employee-area section-padding">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-12">--}}
{{--                    <div class="section-top text-center">--}}
{{--                        <h2>Experienced Agent</h2>--}}
{{--                        <p>Here your beloved agent</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-12">--}}

{{--                    <div class="employee-slider owl-carousel">--}}
{{--                        @foreach($agent_profiles as $agent)--}}

{{--                            <div class="single-slide d-sm-flex">--}}
{{--                                <div class="slide-img">--}}
{{--                                    <img   src="{{asset('/img/profile/'.$agent->photo)}}" alt="not">--}}
{{--                                </div>--}}
{{--                                <div class="slide-text align-self-center">--}}
{{--                                    <i class="fa fa-quote-left"></i>--}}
{{--                                    <h4>{{$agent->skill}}</h4>--}}
{{--                                    <p>{{$agent->bio}}</p>--}}
{{--                                    <a href="{{route('showAllAgent', [$agent->agent_reg_id])}}" class="secondary-btn">explore now<span class="flaticon-next"></span></a>--}}

{{--                                </div>--}}
{{--                            </div>--}}
{{--                        @endforeach--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
    <!-- Feature Area End -->

    <!-- Category Area Starts -->
    <section class="category-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-top text-center">
                        <h2>Find job by category</h2>
                        <p>Explore your jobs</p>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($categories as $category)
                <div class="col-lg-3 col-md-6">
                    <div class="single-category text-center mb-4">

                        <a href="{{ route('category.jobPosts',$category->id) }}"> <h4>{{$category->categoryName}}</h4></a>
                        <h5>{{count($category->jobPosts)}} </h5>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Category Area End -->

    <!-- Jobs Area Starts -->
    <section class="jobs-area section-padding3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="jobs-title">
                        <h2>Browse recent jobs</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="jobs-tab tab-item">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#recent" role="tab" aria-controls="home" aria-selected="true">recent</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#full-time" role="tab" aria-controls="profile" aria-selected="false">full time</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#part-time" role="tab" aria-controls="part-time" aria-selected="false">part time</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="contact-tab2" data-toggle="tab" href="#intern" role="tab" aria-controls="intern" aria-selected="false">intern</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="recent" role="tabpanel" aria-labelledby="home-tab">
                           @foreach($recentJobs as $jobPost)
                                <div class="single-job mb-4 d-lg-flex justify-content-between">
                                    <div class="job-text">
                                        <h4>{{$jobPost->jobCategory->categoryName}}</h4>
                                        <ul class="mt-4">
                                            <li class="mb-3"><h5><i class="fa fa-map-marker"></i>{{$jobPost->location}}</h5></li>
                                            <li class="mb-3"><h5><i class="fa fa-pie-chart"></i> {{$jobPost->employmentStatus}}</h5></li>
                                            <li><h5><i class="fa fa-clock-o"></i>{{$jobPost->deadLine}}</h5></li>
                                        </ul>
                                    </div>
                                    <div class="job-img align-self-center">
                                        <img src="{{asset('user')}}/images/job1.png" alt="job">
                                    </div>
                                    <div class="job-btn align-self-center">
                                        <a href="#" class="third-btn job-btn1">{{$jobPost->employmentStatus}}</a>
                                        <a href="{{ route('post.details',$jobPost->id) }}" class="third-btn">apply</a>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                        <div class="tab-pane fade" id="full-time" role="tabpanel" aria-labelledby="profile-tab">
                            @foreach($fullTimeJobs as $jobPost)
                                <div class="single-job mb-4 d-lg-flex justify-content-between">
                                    <div class="job-text">
                                        <h4>{{$jobPost->jobCategory->categoryName}}</h4>
                                        <ul class="mt-4">
                                            <li class="mb-3"><h5><i class="fa fa-map-marker"></i>{{$jobPost->location}}</h5></li>
                                            <li class="mb-3"><h5><i class="fa fa-pie-chart"></i> {{$jobPost->employmentStatus}}</h5></li>
                                            <li><h5><i class="fa fa-clock-o"></i>{{$jobPost->deadLine}}</h5></li>
                                        </ul>
                                    </div>
                                    <div class="job-img align-self-center">
                                        <img src="{{asset('user')}}/images/job1.png" alt="job">
                                    </div>
                                    <div class="job-btn align-self-center">
                                        <a href="#" class="third-btn job-btn1">{{$jobPost->employmentStatus}}</a>
                                        <a href="{{ route('post.details',$jobPost->id) }}" class="third-btn">apply</a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="tab-pane fade" id="part-time" role="tabpanel" aria-labelledby="profile-tab">
                            @foreach($partTimeJobs as $jobPost)
                                <div class="single-job mb-4 d-lg-flex justify-content-between">
                                    <div class="job-text">
                                        <h4>{{$jobPost->jobCategory->categoryName}}</h4>
                                        <ul class="mt-4">
                                            <li class="mb-3"><h5><i class="fa fa-map-marker"></i>{{$jobPost->location}}</h5></li>
                                            <li class="mb-3"><h5><i class="fa fa-pie-chart"></i> {{$jobPost->employmentStatus}}</h5></li>
                                            <li><h5><i class="fa fa-clock-o"></i>{{$jobPost->deadLine}}</h5></li>
                                        </ul>
                                    </div>
                                    <div class="job-img align-self-center">
                                        <img src="{{asset('user')}}/images/job1.png" alt="job">
                                    </div>
                                    <div class="job-btn align-self-center">
                                        <a href="#" class="third-btn job-btn1">{{$jobPost->employmentStatus}}</a>
                                        <a href="{{ route('post.details',$jobPost->id) }}" class="third-btn">apply</a>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <div class="tab-pane fade" id="intern" role="tabpanel" aria-labelledby="contact-tab2s">
                            <div class="single-job mb-4 d-lg-flex justify-content-between">
                                <div class="job-text">
                                    <h4>R&D Manager (Technical Lab Department)</h4>
                                    <ul class="mt-4">
                                        <li class="mb-3"><h5><i class="fa fa-map-marker"></i> new yourk, USA</h5></li>
                                        <li class="mb-3"><h5><i class="fa fa-pie-chart"></i> Applied Chemistry & Chemical Engineering / Chemistry</h5></li>
                                        <li><h5><i class="fa fa-clock-o"></i> Deadline Deadline: Dec 11, 2018</h5></li>
                                    </ul>
                                </div>
                                <div class="job-img align-self-center">
                                    <img src="{{asset('user')}}/images/job4.png" alt="job">
                                </div>
                                <div class="job-btn align-self-center">
                                    <a href="#" class="third-btn job-btn4">full time</a>
                                    <a href="#" class="third-btn">apply</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="single-job d-lg-flex justify-content-between">
                        <div class="job-text">
                            <h4>Manager/ Asst. Manager (Quality Assurance)</h4>
                            <ul class="mt-4">
                                <li class="mb-3"><h5><i class="fa fa-map-marker"></i> new yourk, USA</h5></li>
                                <li class="mb-3"><h5><i class="fa fa-pie-chart"></i> Applied Chemistry & Chemical Engineering / Chemistry</h5></li>
                                <li><h5><i class="fa fa-clock-o"></i> Deadline Deadline: Dec 11, 2018</h5></li>
                            </ul>
                        </div>
                        <div class="job-img align-self-center">
                            <img src="{{asset('user')}}/images/job5.png" alt="job">
                        </div>
                        <div class="job-btn align-self-center">
                            <a href="#" class="third-btn job-btn2">full time</a>
                            <a href="#" class="third-btn">apply</a>
                        </div>
                    </div> -->
                </div>
            </div>
            <div class="more-job-btn mt-5 text-center">
                <a href="#" class="template-btn">more job post</a>
            </div>
        </div>
    </section>
    <!-- Jobs Area End -->

    <!-- Newsletter Area Starts -->
    <section class="newsletter-area section-padding">
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

    <!-- Employee Area Starts -->
{{--    <section class="employee-area section-padding">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-12">--}}
{{--                    <div class="section-top text-center">--}}
{{--                        <h2>Experienced Agent</h2>--}}
{{--                        <p>Open lesser winged midst wherein may morning</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-12">--}}
{{--                    <div class="employee-slider owl-carousel">--}}
{{--                        <div class="single-slide d-sm-flex">--}}
{{--                            <div class="slide-img employee1">--}}
{{--                                <div class="hover-state">--}}
{{--                                    <div class="hover-text text-center">--}}
{{--                                        <h3>david aron</h3>--}}
{{--                                        <h5>Facebook</h5>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="slide-text align-self-center">--}}
{{--                                <i class="fa fa-quote-left"></i>--}}
{{--                                <p>Appear, called day. Sixth two after eve moved called winged very heaven two lights let all third gathered.</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="single-slide d-sm-flex">--}}
{{--                            <div class="slide-img employee2">--}}
{{--                                <div class="hover-state">--}}
{{--                                    <div class="hover-text text-center">--}}
{{--                                        <h3>david aron</h3>--}}
{{--                                        <h5>Twitter</h5>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="slide-text align-self-center">--}}
{{--                                <i class="fa fa-quote-left"></i>--}}
{{--                                <p>Appear, called day. Sixth two after eve moved called winged very heaven two lights let all third gathered.</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}





    <!-- Employee Area End -->

    <!-- News Area Starts -->
    <section id="blog" class="news-area section-padding3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-top text-center">
                        <h2>Company latest news</h2>
                        <p>Open lesser winged midst wherein may morning</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-news mb-5 mb-lg-0">
                        <div class="news-img news-img1"></div>
                        <div class="news-tag">
                            <ul class="my-4">
                                <li><h5><i class="fa fa-calendar-o"></i> 20th sep, 2018</h5></li>
                                <li class="separator mx-2"><span></span></li>
                                <li><h5><i class="fa fa-folder-open-o"></i> company</h5></li>
                            </ul>
                        </div>
                        <div class="news-title">
                            <h4><a href="#">Lime recalls electric scooters over battery fire.</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-news mb-5 mb-lg-0">
                        <div class="news-img news-img2"></div>
                        <div class="news-tag">
                            <ul class="my-4">
                                <li><h5><i class="fa fa-calendar-o"></i> 18th sep, 2018</h5></li>
                                <li class="separator mx-2"><span></span></li>
                                <li><h5><i class="fa fa-folder-open-o"></i> company</h5></li>
                            </ul>
                        </div>
                        <div class="news-title">
                            <h4><a href="#">Apple resorts to promo deals trade to boost</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-news">
                        <div class="news-img news-img3"></div>
                        <div class="news-tag">
                            <ul class="my-4">
                                <li><h5><i class="fa fa-calendar-o"></i> 25th sep, 2018</h5></li>
                                <li class="separator mx-2"><span></span></li>
                                <li><h5><i class="fa fa-folder-open-o"></i> company</h5></li>
                            </ul>
                        </div>
                        <div class="news-title">
                            <h4><a href="#">Lime recalls electric scooters over battery fire.</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- News Area End -->

    <!-- Download Area Starts -->
    <section class="download-area section-padding">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="download-text">
                        <h2>Download the app your mobile today</h2>
                        <p class="py-3">Light earth also land can't. May you midst shall lights blessed in lights Have gathered image morning blessed grass him. Appear female rule all seas she'd winged</p>
                        <div class="download-button d-sm-flex flex-row justify-content-start">
                            <div class="download-btn mb-3 mb-sm-0 flex-row d-flex">
                                <i class="fa fa-apple" aria-hidden="true"></i>
                                <a href="#">
                                    <p>
                                        <span>Available</span> <br>
                                        on App Store
                                    </p>
                                </a>
                            </div>
                            <div class="download-btn dark flex-row d-flex">
                                <i class="fa fa-android" aria-hidden="true"></i>
                                <a href="#">
                                    <p>
                                        <span>Available</span> <br>
                                        on Play Store
                                    </p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pr-0">
                    <div class="download-img"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- Download Area End -->

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
