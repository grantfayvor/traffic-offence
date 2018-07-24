<!DOCTYPE html>
<html lang="en" data-ng-app="traffic_offense">


<!-- Mirrored from www.themeon.net/nifty/v2.6/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 10 Apr 2017 22:42:11 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Traffic Offense</title>


    <!--STYLESHEET-->
    <!--=================================================-->

    <!--Open Sans Font [ OPTIONAL ]-->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>


    <!--Bootstrap Stylesheet [ REQUIRED ]-->
    <link href="/css/bootstrap.min.css" rel="stylesheet">


    <!--Nifty Stylesheet [ REQUIRED ]-->
    <link href="/css/nifty.min.css" rel="stylesheet">


    <!--Nifty Premium Icon [ DEMONSTRATION ]-->
    <link href="/css/demo/nifty-demo-icons.min.css" rel="stylesheet">


    <!--Demo [ DEMONSTRATION ]-->
    <link href="/css/demo/nifty-demo.min.css" rel="stylesheet">

    <!--Font Awesome [ OPTIONAL ]-->
    <link href="/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">



    <!--Morris.js [ OPTIONAL ]-->
    <link href="/plugins/morris-js/morris.min.css" rel="stylesheet">


    <!--Magic Checkbox [ OPTIONAL ]-->
    <link href="/plugins/magic-check/css/magic-check.min.css" rel="stylesheet">

    <!--Chosen [ OPTIONAL ]-->
    <link href="/plugins/chosen/chosen.min.css" rel="stylesheet">



    <!--JAVASCRIPT-->
    <!--=================================================-->

    <!--Pace - Page Load Progress Par [OPTIONAL]-->
    <link href="/plugins/pace/pace.min.css" rel="stylesheet">
    <script src="/plugins/pace/pace.min.js"></script>


    <!--jQuery [ REQUIRED ]-->
    <script src="/js/jquery.min.js"></script>

    <!--Chosen [ OPTIONAL ]-->
    <script src="/plugins/chosen/chosen.jquery.min.js"></script>


    <!--BootstrapJS [ RECOMMENDED ]-->
    <script src="/js/bootstrap.min.js"></script>


    <!--NiftyJS [ RECOMMENDED ]-->
    <script src="/js/nifty.min.js"></script>






    <!--=================================================-->

    <!--Demo script [ DEMONSTRATION ]-->
    <script src="/js/demo/nifty-demo.min.js"></script>


    <!--Morris.js [ OPTIONAL ]-->
    <script src="/plugins/morris-js/morris.min.js"></script>
    <script src="/plugins/morris-js/raphael-js/raphael.min.js"></script>


    <!--Sparkline [ OPTIONAL ]-->
    <script src="/plugins/sparkline/jquery.sparkline.min.js"></script>


    <!--Specify page [ SAMPLE ]-->
    <script src="/js/demo/dashboard.js"></script>



    <!--=================================================

    REQUIRED
    You must include this in your project.


    RECOMMENDED
    This category must be included but you may modify which plugins or components which should be included in your project.


    OPTIONAL
    Optional plugins. You may choose whether to include it in your project or not.


    DEMONSTRATION
    This is to be removed, used for demonstration purposes only. This category must not be included in your project.


    SAMPLE
    Some script samples which explain how to initialize plugins or components. This category should not be included in your project.


    Detailed information and more samples can be found in the document.

    =================================================-->

    <base href="/" />

</head>

<!--TIPS-->
<!--You may remove all ID or Class names which contain "demo-", they are only used for demonstration. -->

<body>
    <div id="container" class="effect aside-float aside-bright mainnav-lg  footer-fixed navbar-fixed">

        <!--NAVBAR-->
        <!--===================================================-->
        <header id="navbar">
            <div id="navbar-container" class="boxed">

                <!--Brand logo & name-->
                <!--================================-->
                <div class="navbar-header">
                    <a href="/" class="navbar-brand">
                        <!-- <img src="http://traffic_offense.com/ten/img/logo.png" alt="traffic_offense Logo" class="brand-icon"> -->
                        <div class="brand-title">
                            <span class="brand-text">Traffic Offense</span>
                        </div>
                    </a>
                </div>
                <!--================================-->
                <!--End brand logo & name-->


                <!--Navbar Dropdown-->
                <!--================================-->
                <div class="navbar-content clearfix">
                    <ul class="nav navbar-top-links pull-left">

                        <!--Navigation toogle button-->
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <li class="tgl-menu-btn">
                            <a class="mainnav-toggle" href="#">
                                <i class="demo-pli-view-list"></i>
                            </a>
                        </li>
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <!--End Navigation toogle button-->



                        <!--Notification dropdown-->
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <li class="dropdown">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                                <i class="demo-pli-bell"></i>
                                <span class="badge badge-header badge-danger"></span>
                            </a>

                            <!--Notification dropdown menu-->
                            <div class="dropdown-menu dropdown-menu-md">
                                <div class="pad-all bord-btm">
                                    <p class="text-semibold text-main mar-no">You have no new notifications.</p>
                                </div>
                                <div class="nano scrollable">
                                    <div class="nano-content">

                                    </div>
                                </div>

                                <!--Dropdown footer-->
                                <div class="pad-all bord-top">
                                    <a href="#" class="btn-link text-dark box-block">
                                        <i class="fa fa-angle-right fa-lg pull-right"></i>Show All Notifications
                                    </a>
                                </div>
                            </div>
                        </li>
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <!--End notifications dropdown-->



                        <!--Mega dropdown-->
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <li class="mega-dropdown">
                            <!-- <a href="#" class="mega-dropdown-toggle">
                                <i class="demo-pli-layout-grid"></i>
                            </a> -->
                            <div class="dropdown-menu mega-dropdown-menu">
                                <div class="row">
                                    <div class="col-sm-4 col-md-3">

                                        <!--Mega menu list-->
                                        <ul class="list-unstyled">
                                            <li class="dropdown-header">
                                                <i class="demo-pli-file icon-fw"></i> Pages</li>
                                            <li>
                                                <a href="#">Profile</a>
                                            </li>
                                            <li>
                                                <a href="#">Search Result</a>
                                            </li>
                                            <li>
                                                <a href="#">FAQ</a>
                                            </li>
                                            <li>
                                                <a href="#">Sreen Lock</a>
                                            </li>
                                            <li>
                                                <a href="#" class="disabled">Disabled</a>
                                            </li>
                                        </ul>

                                    </div>
                                    <div class="col-sm-4 col-md-3">

                                        <!--Mega menu list-->
                                        <ul class="list-unstyled">
                                            <li class="dropdown-header">
                                                <i class="demo-pli-mail icon-fw"></i> Mailbox</li>
                                            <li>
                                                <a href="#">
                                                    <span class="pull-right label label-danger">Hot</span>Indox</a>
                                            </li>
                                            <li>
                                                <a href="#">Read Message</a>
                                            </li>
                                            <li>
                                                <a href="#">Compose</a>
                                            </li>
                                        </ul>
                                        <p class="pad-top mar-top bord-top text-sm">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget
                                            dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
                                    </div>
                                    <div class="col-sm-4 col-md-3">
                                        <!--Mega menu list-->
                                        <ul class="list-unstyled">
                                            <li>
                                                <a href="#" class="media mar-btm">
                                                    <span class="badge badge-success pull-right">90%</span>
                                                    <div class="media-left">
                                                        <i class="demo-pli-data-settings icon-2x"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <p class="text-semibold text-dark mar-no">Data Backup</p>
                                                        <small class="text-muted">This is the item description</small>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="media mar-btm">
                                                    <div class="media-left">
                                                        <i class="demo-pli-support icon-2x"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <p class="text-semibold text-dark mar-no">Support</p>
                                                        <small class="text-muted">This is the item description</small>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="media mar-btm">
                                                    <div class="media-left">
                                                        <i class="demo-pli-computer-secure icon-2x"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <p class="text-semibold text-dark mar-no">Security</p>
                                                        <small class="text-muted">This is the item description</small>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="media mar-btm">
                                                    <div class="media-left">
                                                        <i class="demo-pli-map-2 icon-2x"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <p class="text-semibold text-dark mar-no">Location</p>
                                                        <small class="text-muted">This is the item description</small>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-12 col-md-3">
                                        <p class="dropdown-header">
                                            <i class="demo-pli-file-jpg icon-fw"></i> Gallery</p>
                                        <ul class="list-unstyled list-inline text-justify">

                                            <li class="pad-btm">
                                                <img src="img/thumbs/mega-menu-2.jpg" alt="thumbs">
                                            </li>
                                            <li class="pad-btm">
                                                <img src="img/thumbs/mega-menu-3.jpg" alt="thumbs">
                                            </li>
                                            <li class="pad-btm">
                                                <img src="img/thumbs/mega-menu-1.jpg" alt="thumbs">
                                            </li>
                                            <li class="pad-btm">
                                                <img src="img/thumbs/mega-menu-4.jpg" alt="thumbs">
                                            </li>
                                            <li class="pad-btm">
                                                <img src="img/thumbs/mega-menu-5.jpg" alt="thumbs">
                                            </li>
                                            <li class="pad-btm">
                                                <img src="img/thumbs/mega-menu-6.jpg" alt="thumbs">
                                            </li>
                                        </ul>
                                        <a href="#" class="btn btn-sm btn-block btn-default">Browse Gallery</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <!--End mega dropdown-->

                    </ul>
                    <ul class="nav navbar-top-links pull-right">

                        <!--User dropdown-->
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <li id="dropdown-user" class="dropdown">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle text-right">
                                <span class="pull-right">
                                    <!--<img class="img-circle img-user media-object" src="img/profile-photos/1.png" alt="Profile Picture">-->

                                    <i class="demo-pli-male ic-user"></i>

                                </span>
                                <div class="username hidden-xs">Traffic Offender Record</div>
                            </a>


                            <div class="dropdown-menu dropdown-menu-md dropdown-menu-right panel-default">

                                <!-- Dropdown heading  -->
                                <!-- <div class="pad-all bord-btm">
                                    <p class="text-main mar-btm">
                                        <span class="text-bold">750GB</span> of 1,000GB Used</p>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar" style="width: 70%;">
                                            <span class="sr-only">70%</span>
                                        </div>
                                    </div>
                                </div> -->


                                <!-- User dropdown menu -->
                                <ul class="head-list">
                                    <li>
                                        <a href="#">

                                            <i class="demo-pli-female icon-lg icon-fw"></i>
                                        </a>
                                    </li>
                                </ul>

                                <!-- Dropdown footer -->
                                <div class="pad-all text-right">
                                    <!-- <form action="/logout" method="post">
                                        {{ csrf_field() }}
                                        <button type="submit" class="btn btn-primary">
                                            <i class="demo-pli-unlock"></i> Logout
                                        </button>
                                    </form> -->
                                </div>
                            </div>
                        </li>
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <!--End user dropdown-->

                    </ul>
                </div>
                <!--================================-->
                <!--End Navbar Dropdown-->

            </div>
        </header>
        <!--===================================================-->
        <!--END NAVBAR-->

        <div class="boxed">

            <!--CONTENT CONTAINER-->
            <!--===================================================-->
            <div id="content-container">

                <!--Page Title-->
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <div id="page-title">
                    <h1 class="page-header text-overflow">View Registered Offence</h1>

                    <!--Searchbox-->
                    <!-- <div class="searchbox">
        <div class="input-group custom-search-form">
            <input type="text" class="form-control" placeholder="Search..">
            <span class="input-group-btn">
                <button class="text-muted" type="button">
                    <i class="demo-pli-magnifi-glass"></i>
                </button>
            </span>
        </div>
    </div> -->
                </div>
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <!--End page title-->


                <!--Breadcrumb-->
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <ol class="breadcrumb">
                    <li>
                        <a href="#">Home</a>
                    </li>
                    <li class="active">View registered offence</li>
                </ol>
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <!--End breadcrumb-->




                <!--Page content-->
                <!--===================================================-->
                <div id="page-content">

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="panel">
                                <div class="panel-body">
                                    <div class="media-block">
                                        <div class="media-left" style="white-space:nowrap">
                                            <div class="invoice-logo">
                                                <div class="media-body">
                                                    <button onclick="print()" class="btn btn-info mar-ver">
                                                        <i class="demo-pli-printer icon-fw"></i>Print</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="media-body text-right">
                                            
                                            <h3 class="h1 text-uppercase text-normal mar-no">
                                            {{ $offence->crime->road_safety_offence->type }}
                                            </h3>
                                        </div>
                                    </div>
                                    <hr class="new-section-sm bord-no">
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <address>
                                                <strong class="text-main">Location: </strong>
                                                <span>{{ $offence->crime_place }}</span>
                                                <br>
                                                <strong class="text-main">Crime Date: </strong>
                                                <span>{{ $offence->crime_date }}</span>
                                                <br>
                                                <strong class="text-main">Route Plyed: </strong>
                                                <span>{{ $offence->crime_route }}</span>
                                                <br>
                                                <strong class="text-main">Penalty: </strong>
                                                <span>#{{ $offence->crime->road_safety_offence->penalty }}</span>
                                                <br>
                                                <strong class="text-main">Officer's Name: </strong>
                                                <span>{{ $offence->assaulted_official }}</span>
                                                <br>
                                            </address>
                                        </div>
                                        <div class="col-xs-6">
                                            <img src="/crimes/{{ $offence->offenders_passport }}" class="pull-right" style="width: 200px;height: 200px;margin: auto;" alt="offender passport" />
                                        </div>
                                    </div>
                                    <hr class="new-section-sm bord-no">
                                    <div class="table-responsive">
                                        <table id="demo-foo-pagination" class="table table-hover toggle-arrow-tiny invoice-summary">
                                            <thead>
                                                <tr>
                                                    <th data-toggle="true">Vehicle's Owner</th>
                                                    <th>Vehicle Name</th>
                                                    <th>Vehicle Make</th>
                                                    <th>Vehicle Model</th>
                                                    <th>Vehicle Type</th>
                                                    <th>Vehicle Chasis</th>
                                                    <th>Vehicle Insurance</th>
                                                    <th>Crime Date</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <a href="">
                                                            <span>{{ $offence->vehicle_owner }}</span>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="">
                                                            <span>{{ $offence->vehicle_name }}</span>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="">
                                                            <span>{{ $offence->vehicle_make }}</span>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="">
                                                            <span>{{ $offence->vehicle_model }}</span>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="">
                                                            <span>{{ $offence->vehicle_type }}</span>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="">
                                                            <span>{{ $offence->vehicle_chasis }}</span>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="">
                                                            <span>{{ $offence->vehicle_insurance }}</span>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="">
                                                            <span>{{ $offence->crime_date }}</span>
                                                        </a>
                                                    </td>
                                                </tr>

                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <td colspan="8">
                                                        <div class="text-right">
                                                            <ul class="pagination"></ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tfoot>
                                        </table>

                                    </div>
                                    <hr class="new-section-sm bord-no">
                                    <div class="well well-sm">
                                            <img src="/crimes/{{ $offence->crime->crime_picture }}" class="img-responsive text-center" alt="offender passport" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--===================================================-->
                <!--End page content-->


            </div>
            <!--===================================================-->
            <!--END CONTENT CONTAINER-->

            <!--ASIDE-->
            <!--===================================================-->
            <aside id="aside-container">
                <div id="aside">
                    <div class="nano">
                        <div class="nano-content">

                            <!--Nav tabs-->
                            <!--================================-->
                            <ul class="nav nav-tabs nav-justified">
                                <li class="active">
                                    <a href="#demo-asd-tab-1" data-toggle="tab">
                                        <i class="demo-pli-speech-bubble-7"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#demo-asd-tab-2" data-toggle="tab">
                                        <i class="demo-pli-information icon-fw"></i> Report
                                    </a>
                                </li>
                                <li>
                                    <a href="#demo-asd-tab-3" data-toggle="tab">
                                        <i class="demo-pli-wrench icon-fw"></i> Settings
                                    </a>
                                </li>
                            </ul>
                            <!--================================-->
                            <!--End nav tabs-->



                            <!-- Tabs Content -->
                            <!--================================-->
                            <div class="tab-content">

                                <!--First tab (Contact list)-->
                                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                                <div class="tab-pane fade in active" id="demo-asd-tab-1">
                                    <p class="pad-hor mar-top text-semibold text-main">
                                        <span class="pull-right badge badge-warning">3</span> Family
                                    </p>

                                    <!--Family-->
                                    <div class="list-group bg-trans">
                                        <a href="#" class="list-group-item">
                                            <div class="media-left pos-rel">
                                                <img class="img-circle img-xs" src="img/profile-photos/2.png" alt="Profile Picture">
                                                <i class="badge badge-success badge-stat badge-icon pull-left"></i>
                                            </div>
                                            <div class="media-body">
                                                <p class="mar-no">Stephen Tran</p>
                                                <small class="text-muted">Availabe</small>
                                            </div>
                                        </a>
                                        <a href="#" class="list-group-item">
                                            <div class="media-left pos-rel">
                                                <img class="img-circle img-xs" src="img/profile-photos/7.png" alt="Profile Picture">
                                            </div>
                                            <div class="media-body">
                                                <p class="mar-no">Brittany Meyer</p>
                                                <small class="text-muted">I think so</small>
                                            </div>
                                        </a>
                                        <a href="#" class="list-group-item">
                                            <div class="media-left pos-rel">
                                                <img class="img-circle img-xs" src="img/profile-photos/1.png" alt="Profile Picture">
                                                <i class="badge badge-info badge-stat badge-icon pull-left"></i>
                                            </div>
                                            <div class="media-body">
                                                <p class="mar-no">Jack George</p>
                                                <small class="text-muted">Last Seen 2 hours ago</small>
                                            </div>
                                        </a>
                                        <a href="#" class="list-group-item">
                                            <div class="media-left pos-rel">
                                                <img class="img-circle img-xs" src="img/profile-photos/4.png" alt="Profile Picture">
                                            </div>
                                            <div class="media-body">
                                                <p class="mar-no">Donald Brown</p>
                                                <small class="text-muted">Lorem ipsum dolor sit amet.</small>
                                            </div>
                                        </a>
                                        <a href="#" class="list-group-item">
                                            <div class="media-left pos-rel">
                                                <img class="img-circle img-xs" src="img/profile-photos/8.png" alt="Profile Picture">
                                                <i class="badge badge-warning badge-stat badge-icon pull-left"></i>
                                            </div>
                                            <div class="media-body">
                                                <p class="mar-no">Betty Murphy</p>
                                                <small class="text-muted">Idle</small>
                                            </div>
                                        </a>
                                        <a href="#" class="list-group-item">
                                            <div class="media-left pos-rel">
                                                <img class="img-circle img-xs" src="img/profile-photos/9.png" alt="Profile Picture">
                                                <i class="badge badge-danger badge-stat badge-icon pull-left"></i>
                                            </div>
                                            <div class="media-body">
                                                <p class="mar-no">Samantha Reid</p>
                                                <small class="text-muted">Offline</small>
                                            </div>
                                        </a>
                                    </div>

                                    <hr>
                                    <p class="pad-hor text-semibold text-main">
                                        <span class="pull-right badge badge-success">Offline</span> Friends
                                    </p>

                                    <!--Works-->
                                    <div class="list-group bg-trans">
                                        <a href="#" class="list-group-item">
                                            <span class="badge badge-purple badge-icon badge-fw pull-left"></span> Joey K. Greyson
                                        </a>
                                        <a href="#" class="list-group-item">
                                            <span class="badge badge-info badge-icon badge-fw pull-left"></span> Andrea Branden
                                        </a>
                                        <a href="#" class="list-group-item">
                                            <span class="badge badge-success badge-icon badge-fw pull-left"></span> Johny Juan
                                        </a>
                                        <a href="#" class="list-group-item">
                                            <span class="badge badge-danger badge-icon badge-fw pull-left"></span> Susan Sun
                                        </a>
                                    </div>


                                    <hr>
                                    <p class="pad-hor mar-top text-semibold text-main">News</p>

                                    <div class="pad-hor">
                                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetuer
                                            <a data-title="45%" class="add-tooltip text-semibold" href="#">adipiscing elit</a>, sed diam nonummy nibh. Lorem ipsum dolor sit amet.
                                        </p>
                                        <small class="text-muted">
                                            <em>Last Update : Des 12, 2014</em>
                                        </small>
                                    </div>


                                </div>
                                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                                <!--End first tab (Contact list)-->


                                <!--Second tab (Custom layout)-->
                                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                                <div class="tab-pane fade" id="demo-asd-tab-2">

                                    <!--Monthly billing-->
                                    <div class="pad-all">
                                        <p class="text-semibold text-main">Billing &amp; reports</p>
                                        <p class="text-muted">Get
                                            <strong>$5.00</strong> off your next bill by making sure your full payment reaches us
                                            before August 5, 2016.</p>
                                    </div>
                                    <hr class="new-section-xs">
                                    <div class="pad-all">
                                        <span class="text-semibold text-main">Amount Due On</span>
                                        <p class="text-muted text-sm">August 17, 2016</p>
                                        <p class="text-2x text-thin text-main">$83.09</p>
                                        <button class="btn btn-block btn-success mar-top">Pay Now</button>
                                    </div>


                                    <hr>

                                    <p class="pad-hor text-semibold text-main">Additional Actions</p>

                                    <!--Simple Menu-->
                                    <div class="list-group bg-trans">
                                        <a href="#" class="list-group-item">
                                            <i class="demo-pli-information icon-lg icon-fw"></i> Service Information</a>
                                        <a href="#" class="list-group-item">
                                            <i class="demo-pli-mine icon-lg icon-fw"></i> Usage Profile</a>
                                        <a href="#" class="list-group-item">
                                            <span class="label label-info pull-right">New</span>
                                            <i class="demo-pli-credit-card-2 icon-lg icon-fw"></i> Payment Options</a>
                                        <a href="#" class="list-group-item">
                                            <i class="demo-pli-support icon-lg icon-fw"></i> Message Center</a>
                                    </div>


                                    <hr>

                                    <div class="text-center">
                                        <div>
                                            <i class="demo-pli-old-telephone icon-3x"></i>
                                        </div>
                                        Questions?
                                        <p class="text-lg text-semibold text-main"> (415) 234-53454 </p>
                                        <small>
                                            <em>We are here 24/7</em>
                                        </small>
                                    </div>
                                </div>
                                <!--End second tab (Custom layout)-->
                                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


                                <!--Third tab (Settings)-->
                                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                                <div class="tab-pane fade" id="demo-asd-tab-3">
                                    <ul class="list-group bg-trans">
                                        <li class="pad-top list-header">
                                            <p class="text-semibold text-main mar-no">Account Settings</p>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="pull-right">
                                                <input class="toggle-switch" id="demo-switch-1" type="checkbox" checked>
                                                <label for="demo-switch-1"></label>
                                            </div>
                                            <p class="mar-no">Show my personal status</p>
                                            <small class="text-muted">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</small>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="pull-right">
                                                <input class="toggle-switch" id="demo-switch-2" type="checkbox" checked>
                                                <label for="demo-switch-2"></label>
                                            </div>
                                            <p class="mar-no">Show offline contact</p>
                                            <small class="text-muted">Aenean commodo ligula eget dolor. Aenean massa.</small>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="pull-right">
                                                <input class="toggle-switch" id="demo-switch-3" type="checkbox">
                                                <label for="demo-switch-3"></label>
                                            </div>
                                            <p class="mar-no">Invisible mode </p>
                                            <small class="text-muted">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus
                                                mus. </small>
                                        </li>
                                    </ul>


                                    <hr>

                                    <ul class="list-group pad-btm bg-trans">
                                        <li class="list-header">
                                            <p class="text-semibold text-main mar-no">Public Settings</p>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="pull-right">
                                                <input class="toggle-switch" id="demo-switch-4" type="checkbox" checked>
                                                <label for="demo-switch-4"></label>
                                            </div>
                                            Online status
                                        </li>
                                        <li class="list-group-item">
                                            <div class="pull-right">
                                                <input class="toggle-switch" id="demo-switch-5" type="checkbox" checked>
                                                <label for="demo-switch-5"></label>
                                            </div>
                                            Show offline contact
                                        </li>
                                        <li class="list-group-item">
                                            <div class="pull-right">
                                                <input class="toggle-switch" id="demo-switch-6" type="checkbox" checked>
                                                <label for="demo-switch-6"></label>
                                            </div>
                                            Show my device icon
                                        </li>
                                    </ul>



                                    <hr>

                                    <p class="pad-hor text-semibold text-main mar-no">Task Progress</p>
                                    <div class="pad-all">
                                        <p>Upgrade Progress</p>
                                        <div class="progress progress-sm">
                                            <div class="progress-bar progress-bar-success" style="width: 15%;">
                                                <span class="sr-only">15%</span>
                                            </div>
                                        </div>
                                        <small class="text-muted">15% Completed</small>
                                    </div>
                                    <div class="pad-hor">
                                        <p>Database</p>
                                        <div class="progress progress-sm">
                                            <div class="progress-bar progress-bar-danger" style="width: 75%;">
                                                <span class="sr-only">75%</span>
                                            </div>
                                        </div>
                                        <small class="text-muted">17/23 Database</small>
                                    </div>

                                </div>
                                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                                <!--Third tab (Settings)-->

                            </div>
                        </div>
                    </div>
                </div>
            </aside>
            <!--===================================================-->
            <!--END ASIDE-->


            <!--MAIN NAVIGATION-->
            <!--===================================================-->
            <nav id="mainnav-container">
                <div id="mainnav">

                    <!--Menu-->
                    <!--================================-->
                    <div id="mainnav-menu-wrap">
                        <div class="nano">
                            <div class="nano-content">

                                <!--Profile Widget-->
                                <!--================================-->
                                <div id="mainnav-profile" class="mainnav-profile">
                                    <div class="profile-wrap">
                                        <div class="pad-btm">
                                            <span class="label label-success pull-right">New</span>
                                            <img class="img-circle img-sm img-border" src="img/profile-photos/1.png" alt="Profile Picture">
                                        </div>
                                        <a href="#profile-nav" class="box-block" data-toggle="collapse" aria-expanded="false">
                                            <span class="pull-right dropdown-toggle">
                                                <i class="dropdown-caret"></i>
                                            </span>
                                            <p class="mnp-name">traffic offenders</p>
                                            <span class="mnp-desc">traffic_offenders@email.com</span>
                                        </a>
                                    </div>
                                    <div id="profile-nav" class="collapse list-group bg-trans">
                                        <a href="#" class="list-group-item">
                                            <i class="demo-pli-male icon-lg icon-fw"></i>
                                        </a>
                                        <!-- <a href="#" class="list-group-item">
                                            <i class="demo-pli-gear icon-lg icon-fw"></i> Settings
                                        </a>
                                        <a href="#" class="list-group-item">
                                            <i class="demo-pli-information icon-lg icon-fw"></i> Help
                                        </a> -->
                                        <form action="/logout" method="post">
                                            {{ csrf_field() }}
                                            <button type="submit" class="list-group-item">
                                                <i class="demo-pli-unlock icon-lg icon-fw"></i> Logout
                                            </button>
                                        </form>
                                    </div>
                                </div>


                                <!--Shortcut buttons-->
                                <!--================================-->
                                <!-- <div id="mainnav-shortcut">
                                    <ul class="list-unstyled">

                                        <li class="col-xs-3" data-content="My Profile">
                                            <a class="shortcut-grid" href="#">
                                                <i class="demo-psi-male"></i>
                                            </a>
                                        </li>
                                        <li class="col-xs-3" data-content="Messages">
                                            <a class="shortcut-grid" href="#">
                                                <i class="demo-psi-speech-bubble-3"></i>
                                            </a>
                                        </li>
                                        <li class="col-xs-3" data-content="Activity">
                                            <a class="shortcut-grid" href="#">
                                                <i class="demo-psi-thunder"></i>
                                            </a>
                                        </li>
                                        <li class="col-xs-3" data-content="Lock Screen">
                                            <a class="shortcut-grid" href="#">
                                                <i class="demo-psi-lock-2"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div> -->
                                <!--================================-->
                                <!--End shortcut buttons-->


                                <ul id="mainnav-menu" class="list-group">

                                    <!--Category name-->
                                    <li class="list-header">Navigation</li>

                                    <!--Menu list item-->
                                    <li>
                                        <a href="/">
                                            <i class="demo-psi-home"></i>
                                            <span class="menu-title">
                                                <strong>Register New Offender</strong>
                                            </span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="/offence">
                                            <i class="demo-psi-bar-chart"></i>
                                            <span class="menu-title">
                                                <strong>Register New Offence</strong>
                                            </span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="/crime">
                                            <i class="demo-psi-computer-secure"></i>
                                            <span class="menu-title">
                                                <strong>View Offences</strong>
                                            </span>
                                        </a>
                                    </li>

                                    <li class="list-divider"></li>

                                </ul>

                            </div>
                        </div>
                    </div>
                    <!--================================-->
                    <!--End menu-->

                </div>
            </nav>
            <!--===================================================-->
            <!--END MAIN NAVIGATION-->

        </div>



        <!-- FOOTER -->
        <!--===================================================-->
        <footer id="footer">

            <!-- Visible when footer positions are fixed -->
            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
            <div class="show-fixed pull-right">
                You have
                <a href="#" class="text-bold text-main">
                    <span class="label label-danger">3</span> pending action.</a>
            </div>



            <!-- Visible when footer positions are static -->
            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
            <div class="hide-fixed pull-right pad-rgt">
                14GB of
                <strong>512GB</strong> Free.
            </div>



            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
            <!-- Remove the class "show-fixed" and "hide-fixed" to make the content always appears. -->
            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

            <p class="pad-lft">&#0169;
                <?php echo Date('Y'); ?> Your Company</p>



        </footer>
        <!--===================================================-->
        <!-- END FOOTER -->


        <!-- SCROLL PAGE BUTTON -->
        <!--===================================================-->
        <button class="scroll-top btn">
            <i class="pci-chevron chevron-up"></i>
        </button>
        <!--===================================================-->



    </div>
    <!--===================================================-->
    <!-- END OF CONTAINER -->

    <!-- traffic_offense js -->



    <!--FooTable [ OPTIONAL ]-->
    <!-- <link href="/plugins/fooTable/css/footable.core.css" rel="stylesheet"> -->

    <!--FooTable [ OPTIONAL ]-->
    <!-- <script src="/plugins/fooTable/dist/footable.all.min.js"></script> -->

    <!--FooTable Example [ SAMPLE ]-->
    <!-- <script src="/js/demo/tables-footable.js"></script> -->


    <script type="text/javascript">
    </script>


</body>

<!-- Mirrored from www.themeon.net/nifty/v2.6/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 10 Apr 2017 22:42:59 GMT -->

</html>