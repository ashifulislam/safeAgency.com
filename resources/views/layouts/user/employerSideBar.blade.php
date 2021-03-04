<!doctype html>
<html class="no-js" lang="en">


<body>

<div class="left-sidebar-pro">
    <nav id="sidebar" class="">
        <div class="sidebar-header">
            <!--                <a href="index.html"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>-->
            <br> <h1>Employer</h1>
            <strong><img src="img/logo/logosn.png" alt="" /></strong>
        </div>
        <div class="nalika-profile">
            <div class="profile-dtl">
                <a href="#"><img src="{{asset('/img/notification/prince.jpg')}}" alt="the image of admin" /></a>
                <h2>Ashiful <span class="min-dtn">Islam Prince</span></h2>
            </div>
            <div class="profile-social-dtl">
                <ul class="dtl-social">
                    <li><a href="#"><i class="icon nalika-facebook"></i></a></li>
                    <li><a href="#"><i class="icon nalika-twitter"></i></a></li>
                    <li><a href="#"><i class="icon nalika-linkedin"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="left-custom-menu-adp-wrap comment-scrollbar">
            <nav class="sidebar-nav left-sidebar-menu-pro">
                <ul class="metismenu" id="menu1">
                    <li class="active">
                        <a class="has-arrow" href="index.html">
                            <i class="icon nalika-home icon-wrap"></i>
                            <span class="mini-click-non">Employers Operation</span>
                        </a>
                        <ul class="submenu-angle" aria-expanded="true">
                            <li><a title="Dashboard v.1" href="{{route('employer.show')}}"><span class="mini-sub-pro">Employer Profile</span></a></li>
                            <li><a title="Dashboard v.1" href="{{route('employer.jobApplication.showPending')}}"><span class="mini-sub-pro">Job Application</span></a></li>
                            <li><a title="Dashboard v.1" href="{{route('employer.pendingAgent')}}"><span class="mini-sub-pro">Agent Request</span></a></li>

                            <li><a title="Dashboard v.2" href="{{route('employer.category')}}"><span class="mini-sub-pro">Add Job Category</span></a></li>
                            <li><a title="Dashboard v.3" href="{{route('jobPost.create')}}"> <span class="mini-sub-pro">Post A Job</span></a></li>

                        </ul>
            </nav>
        </div>
    </nav>
</div>
</body>



