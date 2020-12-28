<!DOCTYPE html>
<html lang="en">
<head>

     <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <title>Job Single</title>


    <link rel="shortcut icon" href="{{asset('user/images/logo/favicon.png')}}" type="image/x-icon">



    <link rel="stylesheet" href="{{asset('user')}}/css/bootstrap-4.1.3.min.css">


    <link rel="stylesheet" href="{{asset('user')}}/css/style.css">
    <link rel="stylesheet" href="{{asset('employer')}}/css/employer.css">
</head>
<body>
   @if(count($errors)>0)
 @foreach($errors->all() as $error)
     {{$error}}
 @endforeach

@endif

<div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="back-link back-backend">
                    <a href="{{route('employer.show')}}" class="btn btn-primary">Back To Your Profile</a>
                </div>
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
        <form name="employerProfile"  method="post" action="{{url('/edit',array($updateEmployerProfile->id))}}" >
                    {{csrf_field()}}
                <h2 style="color:orange;"> Update Profile</h2><br>

                  <div>
               <div class="einfo">

                    <h4 style="color:#fff;"> <u> Personal Info</u></h4>
                <input type="text" placeholder="enter First Name" value="<?php
                    echo $updateEmployerProfile->firstName ?>" name="FirstName">
                <br><br>
                <input type="text" placeholder="enter Last Name" name="LastName"
                value="<?php echo $updateEmployerProfile->lastName?>">
                <br><br>

                 </div>

               <div class="einfo">
                    <h4 style="color:#fff;"> <u> Company's Info</u></h4>

                <input type="text" placeholder="enter company name" name="CompanyName"
                value="<?php echo $updateEmployerProfile->companyName ?>" >
                <br><br>
                <textarea name="CompanyDetails"

                row="7" cols="40" placeholder="Enter company Details" >{{$updateEmployerProfile->companyDetails}}</textarea>

               </div>

                <div class="einfo">
                    <h4 style="color:#fff;"> <u> Company's Address</u></h4>

                <input type="text" placeholder="enter company's country" name="CompanyCountry" value="<?php echo $updateEmployerProfile->companyCountry?>" >
                <br><br>
                 <input type="text" placeholder="enter company's state" name="CompanyState" value="<?php echo $updateEmployerProfile->companyState ?>" >
                <br><br>
                 <input type="number" placeholder="enter company's zip Code" name="CompanyZipCode" value="<?php echo $updateEmployerProfile->companyZipCode?>" >
                <br><br>
                </div>
                  </div>
               <div class="center-block" >

                <input type="checkbox" name="myCheck" id="myCheck">I agree with the terms and conditions<br>
                 </div>
                <input class="center-block" type="submit" name="update" value="UPDATE"><br><br><br>
                Do you want to update again?<a href="{{url('updateEmployerProfile')}}"> &nbsp; VIEW</a>



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
