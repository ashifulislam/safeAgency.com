@extends('layouts.local_agent.local_agent_master')
@section('content')

    <html>
    <body>

    <div id="" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">

                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">

                            <div class="main-body chat-bg ">
                                <div class="page-wrapper">
                                    <div id="main-chat" class="container-fluid">



                                        <!-- Page-header start -->
                                        <div class="page-header">
                                            <div class="row align-items-end">
                                                <div class="col-lg-8">
                                                    <div class="page-header-title">
                                                        <div class="d-inline">
                                                            <h4>Live chat</h4>
                                                            <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="page-header-breadcrumb">
                                                        <ul class="breadcrumb-title">
                                                            <li class="breadcrumb-item">
                                                                <a href="index-1.htm"> <i class="feather icon-home"></i> </a>
                                                            </li>
                                                            <li class="breadcrumb-item"><a href="#!">Pages</a>
                                                            </li>
                                                            <li class="breadcrumb-item"><a href="#!">Sample page</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Page-header end -->


                                        <div class="page-body">
                                            <div class="row">

                                                <div class="chat-box">

                                                    <ul class="text-right boxs"  >

                                                        @foreach($candidates as $singleUser)
                                                        <li id="{{$singleUser->id}}" class="chat-single-box card-shadow bg-white active collapse" data-id="1" >

                                                            <div class="had-container">
                                                                <div class="chat-header p-10 bg-gray">
                                                                    <div class="user-info d-inline-block f-left">
                                                                        <div class="box-live-status bg-danger  d-inline-block m-r-10"></div>
                                                                        <a href="#">{{$singleUser->firstName}} </a>
                                                                    </div>
                                                                    <div class="box-tools d-inline-block">
                                                                        <a href="#" class="mini">





                                                                            <!--<i class="icofont icofont-minus f-20 m-r-10"></i>!-->
                                                                        </a>
                                                                        <a class="close" href="#">
                                                                            <i class="icofont icofont-close f-20"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="chat-body p-10">
                                                                    <div class="message-scrooler">
                                                                        <div class="messages">
                                                                            <div class="message out no-avatar media">
                                                                                <div  class="body media-body text-right p-l-50">



{{--                                                                                    <messageWithCandidate  v-for="(value,index) in chat.message"   :key="value.index"--}}
{{--                                                                                    :user=chat.user[index]--}}
{{--                                                                                             :time=chat.time[index]--}}


{{--                                                                                    >--}}
{{--                                                                                      @{{ value }}--}}
{{--                                                                                    </messageWithCandidate>--}}

                                                                                </div>
                                                                                <div class="sender media-right friend-box">
                                                                                    <a href="javascript:void(0);" title="Me"><img src="{{'local_agent\files\assets\images\avatar-1.jpg'}}" class="  img-chat-profile" alt="Me"></a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="chat-footer b-t-muted">
                                                                    <div class="input-group write-msg">
                                                                        <input type="text" class="form-control input-value" placeholder="Enter a Message" v-model='message'  >
                                                                        <span class="input-group-btn">
                                                                 <button  class="btn btn-primary" v-on:click="sendToCandidate()" >
                                                                 <span>Enter</span>
                                                                 </button>
                                                                 </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        @endforeach

                                                    </ul>
                                                    <div id="sidebar" class="users p-chat-user">
                                                        <div class="had-container">
                                                            <div class="card card_main p-fixed users-main ">
                                                                <div class="user-box">
                                                                    <div class="card-block">
                                                                        <div class="right-icon-control">
                                                                            <input type="text" class="form-control  search-text" placeholder="Search Friend">
                                                                            <div class="form-icon">
                                                                                <i class="icofont icofont-search"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    @foreach($candidates as $singleUser)
                                                                    <div   data-toggle="collapse" data-target="#{{$singleUser->id}}" class="media userlist-box"  data-status="online" data-username="{{$singleUser->firstName}}" data-toggle="tooltip" data-placement="left" title="{{$singleUser->firstName}}">
                                                                        <a class="media-left" href="#!">
                                                                            <img class="media-object  " src="{{'local_agent\files\assets\images\avatar-1.jpg'}}" alt="Generic placeholder image">
                                                                            <div class="live-status bg-success"></div>
                                                                        </a>
                                                                        <div class="media-body">
                                                                            <div class="f-13 chat-header">{{$singleUser->firstName}}</div>
                                                                        </div>
                                                                    </div>
                                                                    @endforeach
                                               </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="page-error">
                                            <div class="card text-center">
                                                <div class="card-block">
                                                    <div class="m-t-10">
                                                        <i class="icofont icofont-warning text-white bg-c-yellow"></i>
                                                        <h4 class="f-w-600 m-t-25">Not supported</h4>
                                                        <p class="text-muted m-b-0">Chat not supported in this device</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>




                            <div id="styleSelector">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



</body>
    <script src="{{asset('/js/appForCandidateCommunication.js')}}"></script>

</html>
@endsection

