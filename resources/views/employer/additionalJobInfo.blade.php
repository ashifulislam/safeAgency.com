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
    <link rel="stylesheet" href="{{asset('user')}}/css/employerLogIn.css">
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
                                    <h3 style="color:#fff;"> <u>Additional Information</u></h3>
                                    <p style="color:aliceblue">Job Context</p>
                                    <textarea  name="jobContext" row="6" cols="40" placeholder="instruction"></textarea>
                                    <br>
                                    <p style="color:aliceblue">Job Responsibilites</p>
                                    <textarea  name="jobResponse" row="6" cols="40" placeholder="instruction"></textarea>
                                    <br>
                                    <input type="text" placeholder="enter Job Location" name="jobLocation"/>
                                    <br><br>

                                    <input type="number" placeholder="enter the salary" name="salary"/>
                                    <br><br>

                                    <input type="radio" name="negotiable" value="negotiable" > Negotiable<br><br>
                                    <p style="color:aliceblue">Other Benefits</p>
                                    <textarea  name="Other Benefit" row="6" cols="40" placeholder="benifit"></textarea>
                                    <br>
                                    <br><br>


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
