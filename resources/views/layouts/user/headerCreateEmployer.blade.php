 <header class="header-area single-page">

        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="logo-area">
                <a href="index.html"><img style="height:50;width:100px;
                        margin-top:-17px;" src="{{asset('user')}}/images/logo.png" alt="logo"></a>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="custom-navbar">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <div class="main-menu main-menu-light">
                             <ul>
                            <li class="active"><a href="{{route('home.page')}}">home</a></li>
                            <li><a href="about.html">about us</a></li>
                            <li><a href="job-category.html">category</a></li>
                            <li><a href="#">Employer</a>
                                <ul class="sub-menu">
                                    <li><a href="{{url('employerProfile')}}">Create Profile</a></li>
                                    <li><a href="{{route('employer.show')}}">Your Profile </a></li>
                                     <li><a href="{{url('logInForEmployer')}}">Log In </a></li>
                                      <li><a href="blog-details.html">Log Out </a></li>

                                </ul>
                            </li>
                             <li><a href="#">Candidate</a>
                                <ul class="sub-menu">
                                    <li><a href="{{route('candidate.profile')}}">Create Profile</a></li>
                                    <li><a href="{{route('candidate.home')}}">Your Profile</a></li>
                                    <li><a href="{{url('')}}">Apply Job </a></li>

                                </ul>
                            </li>

                            <li class="menu-btn">


                                <a href="{{route('jobPost.create')}}" class="template-btn">Post Job</a>
                            </li>
                        </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </header>
 @include('sweetalert::alert')
