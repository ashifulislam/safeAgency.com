<!DOCTYPE html>
  <html>
      <head>
        <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Page Title -->
    <title>Candidate</title>

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
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <div class="color-line"></div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

            </div>
        </div>
    </div>
    <section class="job-single-content section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main-content">
                        <div class="single-content1">
                            <div class="single-job mb-4 d-lg-flex justify-content-between">

                <div class="SignUp">
            <form name="regForm" method="post" action="{{route('candidate.login.submit')}}">
               {{csrf_field()}}
                <h2  style="color:#fff; text-align:center"> Login</h2>
               <div class="einfo">
               <input type="email" placeholder="enter email"  name="email" class="center-block" >
                <br>
                   @error('email')
                   <strong class="alert-danger center-block">{{ $message }}</strong>


                   @enderror
                <input  type="password" class="center-block"  placeholder="enter password" name="password" >
                   <br>
                   @error('password')

                   <strong class="alert-danger center-block">{{ $message }}</strong>

                   @enderror<br>

                <input type="submit" class="center-block" name="signup" value="LOGIN"><br><br><br>
                Not registered?<a href="{{route('candidate.register')}}"> &nbsp; SIGNUP</a>
                </div>

            </form>
        </div>
            </div>

        </div>

    </div>
       </div>
                        </div>

                    </div>



    </section>

    </body>
     </html>
