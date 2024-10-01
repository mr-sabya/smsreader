<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin Bashabord - SMS Reader API</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <!-- Favicon icon -->
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,500,700" rel="stylesheet">

    <!-- themify -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/icon/themify-icons/themify-icons.css') }}">

    <!-- iconfont -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/icon/icofont/css/icofont.css') }}">

    <!-- simple line icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/icon/simple-line-icons/css/simple-line-icons.css') }}">

    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}">


    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/main.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/custom.css') }}">

    <!-- Responsive.css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css') }}">

</head>

<body class="sidebar-mini fixed">

    <div class="wrapper">
        <!-- Navbar-->
        <header class="main-header-top hidden-print">
            <a href="index.html" class="logo"><img class="img-fluid able-logo" src="assets/images/logo.png" alt="Theme-logo"></a>
            <nav class="navbar navbar-static-top">
                <!-- Sidebar toggle button-->
                <a href="#!" data-toggle="offcanvas" class="sidebar-toggle"></a>

                <!-- Navbar Right Menu-->
                <div class="navbar-custom-menu f-right">


                    <ul class="top-nav">

                        <!-- User Menu-->
                        <li class="dropdown">
                            <a href="#!" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle drop icon-circle drop-image">
                                <span><img class="img-circle " src="assets/images/avatar-1.png" style="width:40px;" alt="User Image"></span>
                                <span>{{ Auth::user()->name }} <i class=" icofont icofont-simple-down"></i></span>

                            </a>
                            <ul class="dropdown-menu settings-menu">
                                <li><a href="#"><i class="icon-user"></i> Profile</a></li>
                                <li class="p-0">
                                    <div class="dropdown-divider m-0"></div>
                                </li>
                                <li>
                                    <livewire:auth.logout />
                                </li>

                            </ul>
                        </li>
                    </ul>


                </div>
            </nav>
        </header>
        <!-- Side-Nav-->
        <aside class="main-sidebar hidden-print ">
            <section class="sidebar" id="sidebar-scroll">
                <!-- Sidebar Menu-->
                <ul class="sidebar-menu">
                    <li class="nav-level">--- Navigation</li>
                    <li class="{{ Route::is('home') ? 'active' : '' }} treeview">
                        <a class="waves-effect waves-dark" href="{{ route('home')}}" wire:navigate>
                            <i class="icon-speedometer"></i><span> Dashboard</span>
                        </a>
                    </li>
                    <li class="{{ Route::is('api') ? 'active' : '' }} treeview">
                        <a class="waves-effect waves-dark" href="{{ route('api') }}" wire:navigate>
                            <i class="icon-speedometer"></i><span> Api</span>
                        </a>
                    </li>


                </ul>
            </section>
        </aside>

        <div class="content-wrapper">
            <!-- Container-fluid starts -->
            <!-- Main content starts -->
            <div class="container-fluid">
                <div class="row">
                    <div class="main-header">
                        <h4>Dashboard</h4>
                    </div>
                </div>
                @yield('content')
                <!-- 2-1 block end -->
            </div>
            <!-- Main content ends -->
            <!-- Container-fluid ends -->

        </div>
    </div>


    <!-- Required Jqurey -->
    <script data-navigate-once src="{{ asset('assets/plugins/Jquery/dist/jquery.min.js') }}"></script>
    <script data-navigate-once src="{{ asset('assets/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <script data-navigate-once src="{{ asset('assets/plugins/tether/dist/js/tether.min.js') }}"></script>

    <!-- Required Fremwork -->
    <script data-navigate-once src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- Scrollbar JS-->
    <script data-navigate-once src="{{ asset('assets/plugins/jquery-slimscroll/jquery.slimscroll.js') }}"></script>
    <script data-navigate-once src="{{ asset('assets/plugins/jquery.nicescroll/jquery.nicescroll.min.js') }}"></script>

    <!--classic JS-->
    <script data-navigate-once src="{{ asset('assets/plugins/classie/classie.js') }}"></script>

    <!-- notification -->
    <script data-navigate-once src="{{ asset('assets/plugins/notification/js/bootstrap-growl.min.js') }}"></script>


    <!-- custom js -->
    <script data-navigate-once type="text/javascript" src="{{ asset('assets/js/main.min.js') }}"></script>

    @yield('scripts')

</body>

</html>