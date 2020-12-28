<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Page Title -->
    <title>Job Single</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('user/images/logo/favicon.png')}}" type="image/x-icon">

    <!-- CSS Files -->
<!--
    <link rel="stylesheet" href="{{asset('user')}}/css/animate-3.7.0.css">
    <link rel="stylesheet" href="{{asset('employer')}}/css/font-awesome-4.7.0.min.css">
    <link rel="stylesheet" href="user/fonts/flat-icon/flaticon.css">
-->
    <link rel="stylesheet" href="{{asset('user')}}/css/bootstrap-4.1.3.min.css">
<!--    <link rel="stylesheet" href="{{asset('user')}}/css/owl-carousel.min.css">-->
<!--    <link rel="stylesheet" href="{{asset('user')}}/css/nice-select.css">-->
<!--
    <link rel="stylesheet" href="{{asset('user')}}/css/ion.rangeSlider.css">
    <link rel="stylesheet" href="{{asset('user')}}/css/ion.rangeSlider.skinFlat.css">
-->
    <link rel="stylesheet" href="{{asset('user')}}/css/style.css">
{{--    <link rel="stylesheet" href="{{asset('user')}}/css/employer.css">--}}
</head>
<body>
@if(count($errors)>0)
    @foreach($errors->all() as $errors)
        {{$errors}}
    @endforeach
@endif
@if(session('successfull'))

    {{session('successfull')}}

@endif



    @include('layouts/user/headerCreateEmployer')

<section class="job-single-content section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="main-content">
                    <div class="single-content1">
                        <div class="single-job mb-4 d-lg-flex justify-content-between">
                            <div class="SignUp">
                                <form name="jobCategory"  method="post"  action="{{url('addJobCategory')}}">
                                    {{csrf_field()}}
                                    <h3 style="color:#fff;"> <u>Primary Job Information</u></h3>
                                    <input type="text" placeholder="enter job type" name="jobType"/>
                                    <br><br>
                                    <input type="number" id="vacancy" placeholder="enter number of vacancy" name="vacancy"/>
                                    <br><br>
                                    <p>Job Category</p>
                                    <select id="category" name="categoryType">
                                        <option value=""> Choose Type</option>
                                        <option name="categoryType" value="Accounting/Finance">Account/Finance</option>
                                        <option name="categoryType" value="Software">Software</option>
                                    </select>
                                    <br><br>
                                    <p>Employement Status</p>
                                    <div id="employementStatus">
                                    <input type="radio" name="employementStauts" value="FullTime" checked> FullTime<br>
                                    <input type="radio" name="employementStauts" value="PartTime"> PartTime<br>
                                    <input type="radio" name="employementStauts" value="other"> Other
                                    </div>
                                    <br>
                                    <p>Application Deadline</p>
                                    <input type="date" placeholder="application deadline" name="deadLine"/>
                                    <br><br>
                                    <p>Instruction</p>
                                    <textarea  name="instruction" row="6" cols="40" placeholder="instruction"></textarea>
                                    <br>
                                    <input type="checkbox" name="myCheck" id="myCheck">I agree with the terms and conditions<br>
                                    <input class="center-block" type="submit" name="add" value="ADD"><br><br><br>
                                    ADD AGAIN?<a href="{{url('createJobCategory')}}"> &nbsp; ADD</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@include('layouts/user/footer')
</body>
</html>
