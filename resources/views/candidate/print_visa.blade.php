<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Candidate</title>
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

@include('layouts/candidate/candidateSideBar');


<div class="all-content-wrapper">

    <div class="container-fluid">

        @include('layouts/candidate/candidateNavBar');
        <div class="header-advance-area">


            <!-- Mobile Menu end -->
{{--            <div class="breadcome-area">--}}
{{--                <div class="container-fluid">--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">--}}
{{--                            <div class="breadcome-list">--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">--}}
{{--                                        <div class="breadcomb-wp">--}}
{{--                                            <div class="breadcomb-icon">--}}
{{--                                                <i class="icon nalika-home"></i>--}}
{{--                                            </div>--}}
{{--                                            <div class="breadcomb-ctn">--}}
{{--                                                <h2>Service in detail</h2>--}}
{{--                                                <p> <span class="bread-ntd"></span></p>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">--}}
{{--                                        <div class="breadcomb-report">--}}
{{--                                            <button data-toggle="tooltip" data-placement="left" title="Download Report" class="btn"><i class="icon nalika-download"></i></button>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
        <div id="pcoded">
            <div class="container">
                <div class="row">
                    <div class="col-12">

                        <!-- Main content -->
                        <div class="invoice p-3 mb-3">
                            <!-- title row -->
                            <div class="row">
                                <div class="col-12">
                                    <h4>
                                        <i class="fa fa-globe"></i><b>Candidate:</b> {{$candidate_name}}<br>
{{--                                        <small class="float-right">Date: 2/10/2018</small>--}}
                                    </h4>
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- info row -->
                            <div class="row invoice-info">
                                <div class="col-sm-4 invoice-col">

                                    <address>
                                        <h5 style="color:black";>Employer Details</h5>

                                     <b style="color:darkslategray;">Name :   {{$employer_info->firstName}}</b> <br>
                                     <b style="color:darkslategray;">Email :  {{$employer_info->email}}</b>  <br>

                                    </address>
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-4 invoice-col">

                                    <address>
                                        <h5 style="color:black;">Company Details</h5>
                                   <b style="color:darkslategray; ">Company Name :    {{$employer_info->companyName}}</b><br>
                                    <b style="color:darkslategray; ">Company Country :    {{$employer_info->companyCountry}}</b><br>
                                    <b style="color:darkslategray; ">Company State :    {{$employer_info->companyState}}</b><br>
                                    <b style="color:darkslategray;"> Company Zip Code :   {{$employer_info->companyZipCode}}</b>
                                    </address>
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-4 invoice-col">

                                    <h5 style="color:black;">Payment Details</h5>


                                    <b style="color:darkslategray;">Transaction_id : {{$order_details->transaction_id}} </b><br>
                                    <b style="color:darkslategray; ">Amount : {{$order_details->amount}} </b> <br>
                                    <b style="color:darkslategray; ">Currency : {{$order_details->currency}}</b>

                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->

                            <!-- Table row -->
                            <div class="row">
                                <div class="col-12 table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                        <tr>
                                            <th>Qty</th>
                                            <th>Package name</th>
                                            <th>Serial #</th>
                                            <th>Package description</th>
{{--                                            <th>Amount</th>--}}
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Call of Duty</td>
                                            <td>455-981-221</td>
                                            <td>El snort testosterone trophy driving gloves handsome</td>
{{--                                            <td>$64.50</td>--}}
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Need for Speed IV</td>
                                            <td>247-925-726</td>
                                            <td>Wes Anderson umami biodiesel</td>
{{--                                            <td>$50.00</td>--}}
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Monsters DVD</td>
                                            <td>735-845-642</td>
                                            <td>Terry Richardson helvetica tousled street art master</td>
{{--                                            <td>$10.70</td>--}}
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Grown Ups Blue Ray</td>
                                            <td>422-568-642</td>
                                            <td>Tousled lomo letterpress</td>
{{--                                            <td>$25.99</td>--}}
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->

                            <div class="row">
                                <!-- accepted payments column -->
{{--                                <div class="col-6">--}}
{{--                                    <p class="lead">Payment Methods:</p>--}}
{{--                                    <img src="https://adminlte.io/themes/dev/AdminLTE/dist/img/credit/visa.png" alt="Visa">--}}
{{--                                    <img src="https://adminlte.io/themes/dev/AdminLTE/dist/img/credit/mastercard.png" alt="Mastercard">--}}
{{--                                    <img src="https://adminlte.io/themes/dev/AdminLTE/dist/img/credit/american-express.png" alt="American Express">--}}
{{--                                    <img src="https://adminlte.io/themes/dev/AdminLTE/dist/img/credit/paypal2.png" alt="Paypal">--}}

{{--                                    <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">--}}
{{--                                        Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya handango imeem--}}
{{--                                        plugg--}}
{{--                                        dopplr jibjab, movity jajah plickers sifteo edmodo ifttt zimbra.--}}
{{--                                    </p>--}}
{{--                                </div>--}}
                                <!-- /.col -->
                                <div class="col-6">
{{--                                    <p class="lead">Amount Due 2/22/2014</p>--}}

{{--                                    <div class="table-responsive">--}}
{{--                                        <table class="table">--}}
{{--                                            <tbody><tr>--}}
{{--                                                <th style="width:50%">Subtotal:</th>--}}
{{--                                                <td>$250.30</td>--}}
{{--                                            </tr>--}}
{{--                                            <tr>--}}
{{--                                                <th>Tax (9.3%)</th>--}}
{{--                                                <td>$10.34</td>--}}
{{--                                            </tr>--}}
{{--                                            <tr>--}}
{{--                                                <th>Shipping:</th>--}}
{{--                                                <td>$5.80</td>--}}
{{--                                            </tr>--}}
{{--                                            <tr>--}}
{{--                                                <th>Total:</th>--}}
{{--                                                <td>$265.24</td>--}}
{{--                                            </tr>--}}
{{--                                            </tbody></table>--}}
{{--                                    </div>--}}
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->

                            <!-- this row will not appear when printing -->
                            <div class="row no-print">
                                <div class="col-12">

                                    <a href="" @click.prevent="printme" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Print</a>
                                    <button type="button" class="btn btn-success float-right">
                                        <i class="fa fa-credit-card"></i>
                                        Submit Payment
                                    </button>

                                    <button type="button" class="btn btn-primary float-right" style="margin-right: 5px;">
                                        <i class="fa fa-download"></i> Generate PDF
                                    </button>

                                </div>
                            </div>

                        </div>
                        <!-- /.invoice -->
                    </div>


                </div>
            </div>
{{--            <div class="container-fluid">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">--}}
{{--                        <div class="product-status-wrap">--}}
{{--                            <h4>Service in detail</h4>--}}

{{--                            <table>--}}
{{--                                <tr>--}}
{{--                                    <th>Agent Name</th>--}}
{{--                                    <th>Agent Email</th>--}}
{{--                                    <th>Package Name</th>--}}
{{--                                    <th>Payment Status</th>--}}


{{--                                    <th>Visa application status</th>--}}
{{--                                    <th>Details</th>--}}

{{--                                </tr>--}}

{{--                                <tr>--}}

{{--                                    @foreach($agent_info as $agent_information)--}}

{{--                                        <td>--}}
{{--                                            {{$agent_information->name}}--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            {{$agent_information->email}}--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            {{$agent_information->package_type}}--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            {{$agent_information->payment_status}}--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            {{$agent_information->application_status}}--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                       <a><button>view</button></a>--}}
{{--                                        </td>--}}





{{--                                </tr>--}}
{{--                                @endforeach--}}

{{--                            </table>--}}
{{--                            <div class="custom-pagination">--}}
{{--                                <ul class="pagination">--}}
{{--                                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>--}}
{{--                                    <li class="page-item"><a class="page-link" href="#">1</a></li>--}}
{{--                                    <li class="page-item"><a class="page-link" href="#">2</a></li>--}}
{{--                                    <li class="page-item"><a class="page-link" href="#">3</a></li>--}}
{{--                                    <li class="page-item"><a class="page-link" href="#">Next</a></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>


        <script src="{{asset('/js/app.js')}}"></script>

        <!-- jery
            ============================================ -->
        <script src="js/vendor/jquery-1.12.4.min.js"></script>
        <!-- bootstrap JS
            ============================================ -->
        <script src="js/bootstrap.min.js"></script>
        <!-- wow JS
            ============================================ -->
        <script src="js/wow.min.js"></script>
        <!-- price-slider JS
            ============================================ -->
        <script src="js/jquery-price-slider.js"></script>
        <!-- meanmenu JS
            ============================================ -->
        <script src="js/jquery.meanmenu.js"></script>
        <!-- owl.carousel JS
            ============================================ -->
        <script src="js/owl.carousel.min.js"></script>
        <!-- sticky JS
            ============================================ -->
        <script src="js/jquery.sticky.js"></script>
        <!-- scrollUp JS
            ============================================ -->
        <script src="js/jquery.scrollUp.min.js"></script>
        <!-- mCustomScrollbar JS
            ============================================ -->
        <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
        <script src="js/scrollbar/mCustomScrollbar-active.js"></script>
        <!-- metisMenu JS
            ============================================ -->
        <script src="js/metisMenu/metisMenu.min.js"></script>
        <script src="js/metisMenu/metisMenu-active.js"></script>
        <!-- morrisjs JS
            ============================================ -->
        <script src="js/sparkline/jquery.sparkline.min.js"></script>
        <script src="js/sparkline/jquery.charts-sparkline.js"></script>
        <!-- calendar JS
            ============================================ -->
        <script src="js/calendar/moment.min.js"></script>
        <script src="js/calendar/fullcalendar.min.js"></script>
        <script src="js/calendar/fullcalendar-active.js"></script>
        <!-- plugins JS
            ============================================ -->
        <script src="js/plugins.js"></script>
        <!-- main JS
            ============================================ -->
        <script src="js/main.js"></script>
</body>

</html>
