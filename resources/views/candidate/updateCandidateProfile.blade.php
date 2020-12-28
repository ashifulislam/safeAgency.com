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
                    <a href="{{route('candidate.home')}}" class="btn btn-primary">Back To Your Profile</a>
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
        <form name="employerProfile"  method="post" action="{{url('/editCandidate',array($updateCandidateProfile->id))}}" >
                    {{csrf_field()}}
                <h2 style="color:orange;"> Update Profile</h2><br>
            <div class="einfo">

                <h3 style="color:#fff;"> <u> Personal Info</u></h3>
                <input type="text" value="{{$updateCandidateProfile->firstName}}" placeholder="enter First Name" name="firstName">
                <br><br>
                <input type="text" value="{{$updateCandidateProfile->lastName}}" placeholder="enter Last Name" name="lastName">
                <br><br>
                <input type="email" value="{{$updateCandidateProfile->email}}" placeholder="enter email" name="email" >
                <br><br>


            </div>
            <br>
            <h3 style="color:#fff;"> <u> Educational Info</u></h3>
            <div class="einfo">
                <p>Degree</p>
                <select id="category" name="degreeType" >
                    <option value=""> {{$updateCandidateProfile->degree}}</option>
                    <option  value="">SSC</option>
                    <option  value="HSC">HSC</option>
                </select><br><br>
                <p>From</p>
                <input type="date" value="{{$updateCandidateProfile->From}}"
                placeholder="application deadline" name="From"/>
                <br><br>
                <p>To</p>
                <input type="date" value="{{$updateCandidateProfile->To}}"  placeholder="application deadline" name="To"/>
                <br><br>
                <input type="text" value="{{$updateCandidateProfile->institute}}"placeholder="enter institute Name" name="institute"><br><br>
                <h3 style="color:#fff;"> <u> Job Experience</u></h3>
                <div class="einfo">
                    <p>Job Title</p>
                    <select id="category" name="jobTitle">
                        <option value=""> {{$updateCandidateProfile->title}}</option>
                        <option  value="Web Developer">Web Developer</option>
                        <option  value="App Developer">App Developer</option>
                    </select><br><br>
                    <p>From</p>
                    <input type="date"value="{{$updateCandidateProfile->eFrom}}" placeholder="application deadline" name="eFrom"/>
                    <br><br>
                    <p>To</p>
                    <input type="date" value="{{$updateCandidateProfile->eTo}}" placeholder="application deadline" name="eTo"/>
                    <br><br>
                    <input type="text"  value="{{$updateCandidateProfile->org}}" placeholder="enter org Name" name="org">
                    <br><br>
                    <input type="text"  value="{{$updateCandidateProfile->address}}" placeholder="enter address" name="address">
                    <br>
                    <p></p>
                    <h3 style="color:#fff;"> <u>Soft Skills</u></h3>
                    <div class="einfo">
                        <textarea placeholder="enter soft skills"   name="softSkills">{{$updateCandidateProfile->softSkills}}</textarea>
                        <br><br>
                        <h3 style="color:#fff;"> <u>Technical Skills</u></h3>
                        <div class="einfo">
                            <textarea placeholder="enter your technical skills" name="skill_name" >{{$updateCandidateProfile->skill_name}}</textarea>
                            <br>

                            <p></p>

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
