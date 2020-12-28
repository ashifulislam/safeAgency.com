
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Employer</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- nalika Icon CSS
        ============================================ -->
    <link rel="stylesheet" href="css/nalika-icon.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="css/main.css">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="css/calendar/fullcalendar.print.min.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS
		============================================ -->

    <script src="js/vendor/modernizr-2.8.3.min.js"></script>

    <link rel="stylesheet" href="{{asset('user')}}/css/style.css">
    <link rel="stylesheet" href="{{asset('employer')}}/css/employer.css">
</head>



<body>


@include('layouts/user/employerSideBar');


<div class="all-content-wrapper">

    <div class="container-fluid">

        @include('layouts/user/employerNavBar');

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
                                            <h3 style="color:#fff;"> <u> Add Job Category</u></h3>
                                            <input type="text" placeholder="enter category name" name="categoryName"/>
                                            <br>
                                            @error('categoryName')
                                            <strong class="alert alert-danger">{{ $message }}</strong>
                                            @enderror
                                            <br>
                                            <select id="category" name="categoryType">
                                                <option value=""> Choose Category</option>
                                                <option name="categoryType" value="Software">Functional</option>
                                                <option name="categoryType" value="Accountance">Media</option>
                                                <option name="categoryType" value="Accountance">Entertain</option>
                                            </select>
                                            <br>
                                            @error('categoryType')
                                            <strong class="alert alert-danger">{{ $message }}</strong>
                                            @enderror
                                            <br>

                                            <input type="checkbox" name="myCheck" id="myCheck">I agree with the terms and conditions<br>
                                            @error('myCheck')
                                            <strong class="alert alert-danger">{{ $message }}</strong>
                                            @enderror
                                            <br>
                                            <input  type="submit" name="add" value="ADD"><br><br><br>
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


</body>

<script src="{{asset('/js/app.js')}}"></script>

</html>
