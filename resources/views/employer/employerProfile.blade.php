<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <title>Employer</title>


    <link rel="shortcut icon" href="{{asset('user/images/logo/favicon.png')}}" type="image/x-icon">



    <link rel="stylesheet" href="{{asset('user')}}/css/bootstrap-4.1.3.min.css">


    <link rel="stylesheet" href="{{asset('user')}}/css/style.css">
    <link rel="stylesheet" href="{{asset('employer')}}/css/employer.css">
</head>


@if(session('emailExists'))
    {{session('emailExists')}}
@endif
@if(session('passNotMatch'))

   {{session('passNotMatch')}}
@endif

<body>
    <!-- Preloader Starts -->
    <div class="preloader">
        <div class="spinner"></div>
    </div>
    <!-- Preloader End -->

    <!-- Header Area Starts -->


      @include('layouts/user/header')


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
                <h1 style="color:orange;"> Employer Registration</h1><br>

                  <div>
               <div class="einfo">

                    <h3 style="color:#fff;"> <u> Personal Info</u></h3>
                <input type="text" placeholder="enter First Name" name="firstName">
                <br>

                   @error('firstName')
                   <strong style="padding:inherit" class="alert alert-danger ">{{ $message }}</strong>
                   @enderror

                   <br>
                <input type="text" placeholder="enter Last Name" name="lastName">
                <br>
                   @error('lastName')
                   <strong style="padding:inherit" class="alert alert-danger ">{{ $message }}</strong>
                   @enderror<br>
                <input type="email" placeholder="enter email" name="email" >
                <br>
                   @error('email')
                   <strong style="padding:inherit" class="alert alert-danger ">{{ $message }}</strong>
                   @enderror<br>
                <input type="password" placeholder="enter password" name="password" onchange="checkMatchPassword();" >
                <br>
                   @error('password')
                   <strong style="padding:inherit" class="alert alert-danger ">{{ $message }}</strong>
                   @enderror
                   <br>
                <input type="password" placeholder="enter  retTypePassword" name="reType" >
                   <br>
                   @error('reType')
                   <strong style="padding:inherit" class="alert alert-danger ">{{ $message }}</strong>
                   @enderror
                 </div>

               <div class="einfo">
                    <h3 style="color:#fff;"> <u> Company's Info</u></h3>

                <input type="text" placeholder="enter company name" name="companyName" >
                <br>
                   @error('companyName')
                   <strong style="padding:inherit" class="alert alert-danger ">{{ $message }}</strong>
                   @enderror<br>
                <textarea  name="companyDetails" row="7" cols="40" placeholder="Enter company Details"></textarea>
                   <br>
                   @error('companyDetails')
                   <strong style="padding:inherit" class="alert alert-danger ">{{ $message }}</strong>
                   @enderror
               </div>

                <div class="einfo">
                    <h3 style="color:#fff;"> <u> Company's Address</u></h3>

                <input type="text" placeholder="enter company's country" name="companyCountry" >
                <br>
                    @error('companyCountry')
                    <strong style="padding:inherit" class="alert alert-danger ">{{ $message }}</strong>
                    @enderror<br>
                 <input type="text" placeholder="enter company's state" name="companyState" >
                <br>
                    @error('companyState')
                    <strong style="padding:inherit" class="alert alert-danger ">{{ $message }}</strong>
                    @enderror<br>
                 <input type="number" placeholder="enter company's zip Code" name="companyZipCode" >
                <br>
                    @error('companyZipCode')
                    <strong style="padding:inherit" class="alert alert-danger ">{{ $message }}</strong>
                    @enderror<br>
                </div>
                  </div>
               <div class="center-block" >

                <input type="checkbox" name="myCheck" id="myCheck">I agree with the terms and conditions<br>
                 <br>
                   @error('myCheck')
                   <strong style="padding:inherit" class="alert alert-danger ">{{ $message }}</strong>
                   @enderror
               </div>
                <input class="center-block" type="submit" name="signup" value="SIGNUP"><br><br><br>
                Already registered?<a href="{{url('employer/login')}}"> &nbsp; LOGIN</a>



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
