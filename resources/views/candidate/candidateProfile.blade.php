<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Page Title -->
    <title>SafeAgency.com</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('user/images/logo/favicon.png')}}" type="image/x-icon">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
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
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
</head>
<body>
{{--@if(count($errors)>0)--}}
{{--    @foreach($errors->all() as $errors)--}}
{{--        {{$errors}}--}}
{{--    @endforeach--}}
{{--@endif--}}

@if(session('passNotMatch'))

    {{session('passNotMatch')}}
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
                                <form name="jobCategory"  method="post"  action="{{url('addCandidateOperation')}}">
                                    {{csrf_field()}}
                                    <div class="einfo">

                                        <h3 style="color:#fff;"> <u> Personal Info</u></h3>
                                        <input type="text" placeholder="enter First Name" name="firstName">
                                        <br>
                                        @error('firstName')
                                        <strong style="padding:inherit" class="alert alert-danger">{{ $message }}</strong>
                                        @enderror<br>
                                        <input type="text" placeholder="enter Last Name" name="lastName">
                                        <br>
                                        @error('lastName')
                                        <strong style="padding:inherit" class="alert alert-danger">{{ $message }}</strong>
                                        @enderror
                                        <br>
                                        <input type="email" placeholder="enter email" name="email" >
                                        <br>
                                        @error('email')
                                        <strong style="padding:inherit" class="alert alert-danger">{{ $message }}</strong>
                                        @enderror
                                        <br>
                                        <input type="password" placeholder="enter password" name="password" onchange="checkMatchPassword();" >
                                        <br>
                                        @error('password')
                                        <strong style="padding:inherit" class="alert alert-danger">{{ $message }}</strong>
                                        @enderror<br>
                                        <input type="password" placeholder="enter  retTypePassword" name="reType" >
                                         <br>
                                        @error('reType')
                                        <strong style="padding:inherit" class="alert alert-danger">{{ $message }}</strong>
                                        @enderror
                                    </div>
                                    <br>
                                    <h3 style="color:#fff;"> <u> Educational Info</u></h3>
                                    <div class="einfo">
                                    <p>Degree</p>
                                    <select id="category" name="degreeType">
                                        <option value=""> Choose Type</option>
                                        <option  value="SSC">SSC</option>
                                        <option  value="HSC">HSC</option>
                                        <option  value="Honors">Honors</option>
                                        <option  value="Bsc in cse">Bsc in cse</option>
                                    </select><br>
                                      <br>
                                        <p>From</p>
                                        <input type="date" placeholder="application deadline" name="From"/>
                                        <br>
                                       <br>
                                        <br>
                                        <p>To</p>
                                        <input type="date" placeholder="application deadline" name="To"/>
                                        <br><br>
                                        <input type="text" placeholder="enter institute Name" name="institute"><br>
                                        @error('institute')
                                        <strong style="padding:inherit" class="alert alert-danger">{{ $message }}</strong>
                                        @enderror
                                        <br>
                                        <h3 style="color:#fff;"> <u> Job Experience</u></h3>
                                        <div class="einfo">
                                            <p>Job Title</p>
                                            <select id="category" name="jobTitle">
                                                <option value=""> Choose Type</option>
                                                <option  value="Web Developer">Web Developer</option>
                                                <option  value="App Developer">App Developer</option>
                                                <option  value="Construction">Construction(worker)</option>
                                                <option  value="Repairing">Repair(worker)</option>
                                                <option  value="Manufacturing">Manufacture(worker)</option>
                                            </select><br><br>
                                            <p>From</p>
                                            <input type="date" placeholder="application deadline" name="eFrom"/>
                                            <br><br>
                                            <p>To</p>
                                            <input type="date" placeholder="application deadline" name="eTo"/>
                                            <br><br>
                                            <input type="text" placeholder="enter org Name" name="org">
                                            <br>
                                            @error('org')
                                            <strong style="padding:inherit" class="alert alert-danger">{{ $message }}</strong>
                                            @enderror<br>
                                            <input type="text" placeholder="enter address" name="address">
                                            <br>
                                            @error('address')
                                            <strong style="padding:inherit" class="alert alert-danger">{{ $message }}</strong>
                                            @enderror
                                            <p></p>
                                            <h3 style="color:#fff;"> <u>Soft Skills</u></h3>
                                                <div class="einfo">
                                                    <textarea placeholder="enter soft skills" name="softSkills"></textarea>
                                                    <br>
                                                    @error('softSkills')
                                                    <strong style="padding:inherit" class="alert alert-danger">{{ $message }}</strong>
                                                    @enderror
                                                    <br>
                                                </div>
                                                    <h3 style="color:#fff;"> <u>Technical Skills</u></h3>
                                                    <div class="einfo">
                                                        <textarea placeholder="enter your technical skills" name="skill_name" ></textarea>
                                                      <br>
                                                        @error('skill_name')
                                                        <strong style="padding:inherit" class="alert alert-danger">{{ $message }}</strong>
                                                        @enderror

                                                <p></p>
                                    <input type="checkbox" name="myCheck" id="myCheck">I agree with the terms and conditions<br>
                                    <input class="center-block" type="submit" name="add" value="ADD"><br><br><br>

                                                        ADD AGAIN?<a href="{{url('createJobCategory')}}"> &nbsp; ADD</a></div>

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
<script>



</script>
</body>
</html>
