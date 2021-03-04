<header class="header-area main-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="logo-area">
                        <a href="index.html"><img style="height:50;width:100px;
                        margin-top:-17px;" src="{{ asset('user/images/logo.png')}}" alt="logo"></a>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="custom-navbar">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <div class="main-menu">
                        <ul>
                            <li class="active"><a href="{{route('home.page')}}">home</a></li>
                            <li><a href="{{route('about')}}">about us</a></li>
                            <li><a href="#">Agent</a>
                                <ul class="sub-menu">
                                    <li><a href="{{route('localAgent.dashboard')}}">Your Profile </a></li>
                                    <li><a href="{{route('localAgent.register')}}">Registration</a></li>


                                </ul>
                            </li>                            <li><a href="#">Employer</a>
                                <ul class="sub-menu">
                                    <li><a href="{{url('employerProfile')}}">Registration</a></li>
                                    <li><a href="{{route('employer.show')}}">Your Profile </a></li>

                                </ul>
                            </li>
                             <li><a href="#">Candidate</a>
                                <ul class="sub-menu">
                                    <li><a href="{{route('candidate.profile')}}">Create Profile</a></li>
                                    <li><a href="{{route('candidate.home')}}">Your Profile</a></li>

                                </ul>
                            </li>

                            <li class="menu-btn">
                                <a href="#" class="login">log in</a>
                                <a href="{{url('employerProfile')}}" class="template-btn">sign up</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
@include('sweetalert::alert')
