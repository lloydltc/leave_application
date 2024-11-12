<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>Leave Application</title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="#">
    <meta name="keywords" content="Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="#">
    <!-- Favicon icon -->
    <link rel="icon" href="{{asset('assets\images\favicon.ico" type="image/x-icon')}}">
    <!-- Google font--><link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="{{asset('bower_components\bootstrap\css\bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('bower_components\datatables.net-bs4\css\dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('bower_components\datatables.net-responsive-bs4\css\responsive.bootstrap4.min.css')}}">
    <!-- jquery file upload Frame work -->
    <link href="{{asset('assets\pages\jquery.filer\css\jquery.filer.css')}}" type="text/css" rel="stylesheet">
    <link href="{{asset('assets\pages\jquery.filer\css\themes\jquery.filer-dragdropbox-theme.css')}}" type="text/css" rel="stylesheet">
    <!-- animation nifty modal window effects css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets\css\component.css')}}">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets\icon\themify-icons\themify-icons.css')}}">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets\icon\icofont\css\icofont.css')}}">

    <!-- feather Awesome -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets\icon\feather\css\feather.css')}}">

    <link rel="stylesheet" href="{{asset('bower_components\select2\css\select2.min.css')}}">
    <!-- Multi Select css -->
    <link rel="stylesheet" type="text/css" href="{{asset('bower_components\bootstrap-multiselect\css\bootstrap-multiselect.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('bower_components\multiselect\css\multi-select.css')}}">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets\css\style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets\css\jquery.mCustomScrollbar.css')}}">
    @livewireStyles
    @livewireScripts
</head>




<body>
<!-- Pre-loader start -->
<div class="theme-loader">
    <div class="ball-scale">
        <div class='contain'>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
        </div>
    </div>
</div>
<!-- Pre-loader end -->
@php
$employee = \App\Models\Employee::first()
@endphp
<div id="pcoded" class="pcoded">
    <div class="pcoded-overlay-box"></div>
    <div class="pcoded-container navbar-wrapper">

        <nav class="navbar header-navbar pcoded-header">
            <div class="navbar-wrapper">

                <div class="navbar-logo">
                    <a class="mobile-menu" id="mobile-collapse" href="#!">
                        <i class="feather icon-menu"></i>
                    </a>
                    <a href="{{route('home')}}">
                        <img class="img-fluid" src="{{asset('assets\images\logo.png')}}" alt="Theme-Logo" height="40" width="40">
                    </a>
                    <a class="mobile-options">
                        <i class="feather icon-more-horizontal"></i>
                    </a>
                </div>

                <div class="navbar-container container-fluid">
                    <ul class="nav-left">
                        <li>
                            <a href="#!" onclick="javascript:toggleFullScreen()">
                                <i class="feather icon-maximize full-screen"></i>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav-right">
                        <li class="header-notification">
                            <div class="dropdown-primary dropdown">
                                <div class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="feather icon-bell"></i>
                                    <span class="badge bg-c-pink">5</span>
                                </div>
                            </div>
                        </li>

                        <li class="user-profile header-notification">
                            <div class="dropdown-primary dropdown">
                                <div class="dropdown-toggle" data-toggle="dropdown">
                                    {{--                                    <img src="..\files\assets\images\avatar-4.jpg" class="img-radius" alt="User-Profile-Image">--}}
                                    @auth
                                        <span></span>
                                        <i class="feather icon-chevron-down"></i>
                                    @endauth
                                </div>
                                <ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                    <li>
                                        <a href="#!">
                                            <i class="feather icon-settings"></i> Settings
                                        </a>
                                    </li>


                                    <li>
                                        <a href="">
                                            <i class="feather icon-log-out"></i> Logout
                                        </a>
                                    </li>
                                </ul>

                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Sidebar chat start -->

        <!-- Sidebar inner chat end-->
        <div class="pcoded-main-container">
            <div class="pcoded-wrapper">
                <nav class="pcoded-navbar">
                    <div class="pcoded-inner-navbar main-menu">
                        <div class="pcoded-navigatio-lavel">Navigation</div>
                        <ul class="pcoded-item pcoded-left-item">
                            <li class="active">
                                <a href="{{route('home')}}">
                                    <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                                    <span class="pcoded-mtext">Dashboard</span>
                                </a>

                            </li>


                            <li class="">
                                <a href="{{route('showApplications')}}">
                                    <span class="pcoded-micon"><i class="feather icon-edit"></i></span>
                                    <span class="pcoded-mtext">Applications</span>
                                </a>
                            </li>

                        </ul>

                    </div>
                </nav>
                <div class="pcoded-content">
                    <div class="pcoded-inner-content">
                        <div class="main-body">
                            <div class="page-wrapper">

                                <div class="page-body">
                                    @if(session('success'))
                                    <div class="alert alert-success icons-alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <i class="icofont icofont-close-line-circled"></i>
                                        </button>
                                        <p><strong>Success!</strong>  {{ session('success') }}</p>
                                    </div>
                                    @endif
                                    @yield('content')
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Warning Section Starts -->
<!-- Older IE warning message -->
<!--[if lt IE 10]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="../files/assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="../files/assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="../files/assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="../files/assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="../files/assets/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->


<!-- Vendor JS -->
<script type="text/javascript" src="{{asset('bower_components\jquery\js\jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('bower_components\jquery-ui\js\jquery-ui.min.js')}}"></script>
<script type="text/javascript" src="{{asset('bower_components\popper.js\js\popper.min.js')}}"></script>
<script type="text/javascript" src="{{asset('bower_components\bootstrap\js\bootstrap.min.js')}}"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="{{asset('bower_components\jquery-slimscroll\js\jquery.slimscroll.js')}}"></script>
<!-- modernizr js -->
<script type="text/javascript" src="{{asset('bower_components\modernizr\js\modernizr.js')}}"></script>
<script type="text/javascript" src="{{asset('bower_components\modernizr\js\css-scrollbars.js')}}"></script>
<!-- i18next.min.js -->
<script type="text/javascript" src="{{asset('bower_components\i18next\js\i18next.min.js')}}"></script>
<script type="text/javascript" src="{{asset('bower_components\i18next-xhr-backend\js\i18nextXHRBackend.min.js')}}"></script>
<script type="text/javascript" src="{{asset('bower_components\i18next-browser-languagedetector\js\i18nextBrowserLanguageDetector.min.js')}}"></script>
<script type="text/javascript" src="{{asset('bower_components\jquery-i18next\js\jquery-i18next.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets\js\common-pages.js')}}"></script>

<script type="text/javascript" src="{{asset('bower_components\jquery-slimscroll\js\jquery.slimscroll.js')}}"></script>

<!-- Chart js -->
<script type="text/javascript" src="{{asset('bower_components\chart.js\js\Chart.js')}}"></script>
<!-- amchart js -->
<script src="{{asset('assets\pages\widget\amchart\amcharts.js')}}"></script>
<script src="{{asset('assets\pages\widget\amchart\serial.js')}}"></script>
<script src="{{asset('assets\pages\widget\amchart\light.js')}}"></script>
<script src="{{asset('assets\js\jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets\js\SmoothScroll.js')}}"></script>
<script src="{{asset('assets\js\pcoded.min.js')}}"></script>

<script src="{{asset('bower_components\datatables.net\js\jquery.dataTables.min.js')}}"></script>
<script src="{{asset('bower_components\datatables.net-bs4\js\dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('bower_components\datatables.net-responsive\js\dataTables.responsive.min.js')}}"></script>
<script src="{{asset('bower_components\datatables.net-responsive-bs4\js\responsive.bootstrap4.min.js')}}"></script>
<!-- jquery file upload js -->
<script src="{{asset('assets\pages\jquery.filer\js\jquery.filer.min.js')}}"></script>
<script src="{{asset('assets\pages\filer\custom-filer.js" type="text/javascript')}}"></script>
<script src="{{asset('assets\pages\filer\jquery.fileuploads.init.js')}}" type="text/javascript"></script>
<script type="text/javascript" src="{{asset('bower_components\select2\js\select2.full.min.js')}}"></script>
<!-- Multiselect js -->
<script type="text/javascript" src="{{asset('bower_components\bootstrap-multiselect\js\bootstrap-multiselect.js')}}">


</script>
<script type="text/javascript" src="{{asset('bower_components\sweetalert\js\sweetalert.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets\js\modal.js')}}"></script>
<!-- sweet alert modal.js intialize js -->
<!-- modalEffects js nifty modal window effects -->
<script type="text/javascript" src="{{asset('assets\js\modalEffects.js')}}"></script>
<script type="text/javascript" src="{{asset('assets\js\classie.js')}}"></script>
<script type="text/javascript" src="{{asset('bower_components\multiselect\js\jquery.multi-select.js')}}"></script>
<script type="text/javascript" src="{{asset('assets\js\jquery.quicksearch.js')}}"></script>
<!-- Custom js -->
<script type="text/javascript" src="{{asset('assets\pages\advance-elements\select2-custom.js')}}"></script>
<!-- Model animation js -->
<script src="{{asset('assets\js\classie.js')}}"></script>
<script src="{{asset('assets\js\modalEffects.js')}}"></script>
<!-- product list js -->
<script type="text/javascript" src="{{asset('assets\pages\product-list\product-list.js')}}"></script>
<!-- custom js -->
<script src="{{asset('assets\js\vartical-layout.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets\pages\dashboard\custom-dashboard.js')}}"></script>
<script type="text/javascript" src="{{asset('assets\js\script.min.js')}}"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
</script>
</body>

</html>

