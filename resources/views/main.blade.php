<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CRM Project</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{ asset('assets/dist/bootstrap/css/bootstrap.min.css') }}">
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/dist/img/favicon-16x16.png') }}">

    <!-- Google Font -->
    <link href="../../../../../fonts.googleapis.com/css6079.css?family=Poppins:300,400,500,600,700" rel="stylesheet">

    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('assets/dist/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/dist/css/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/dist/css/et-line-font/et-line-font.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/dist/css/themify-icons/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/dist/css/simple-lineicon/simple-line-icons.css') }}">



</head>

<body class="skin-blue sidebar-mini">
    <div class="wrapper boxed-wrapper">
        <header class="main-header">
            <!-- Logo -->
            <a href="#" class="logo blue-bg">
                <span class="logo-mini"><img src="{{ asset('data/logo_name.png') }}" alt=""
                        style="width:100px;"></span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><img src="{{ asset('data/name.png') }}" alt=""
                        style="width:180px; "></span>
            </a>
            <!-- Header Navbar -->
            <nav class="navbar blue-bg navbar-static-top">
                <!-- Sidebar toggle button-->
                <ul class="nav navbar-nav pull-left">
                    <li><a class="sidebar-toggle" data-toggle="push-menu" href="#"></a> </li>
                </ul>
                <div class="pull-left search-box">
                    <form action="#" method="get" class="search-form">
                        <div class="input-group">
                            <input name="search" class="form-control" placeholder="" type="text">
                            <span class="input-group-btn">
                                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i
                                        class="fa fa-search"></i> </button>
                            </span>
                        </div>
                    </form>
                    <!-- search form -->
                </div>
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- Messages -->
                        <li class="dropdown messages-menu"> <a href="#" class="dropdown-toggle"
                                data-toggle="dropdown"> <i class="fa fa-envelope-o"></i>
                                <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 4 new messages</li>
                                {{--  --}}
                                <li class="footer"><a href="#">View All Messages</a></li>
                            </ul>
                        </li>
                        <!-- Notifications  -->
                        <li class="dropdown messages-menu"> <a href="#" class="dropdown-toggle"
                                data-toggle="dropdown"> <i class="fa fa-bell-o"></i>
                                <div class="notify"> <span class="heartbit"></span> <span class="point"></span>
                                </div>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">Notifications</li>
                                {{--  --}}
                                <li class="footer"><a href="#">Check all Notifications</a></li>
                            </ul>
                        </li>
                        <!-- User Account  -->
                        <li class="dropdown user user-menu p-ph-res"> <a href="#" class="dropdown-toggle"
                                data-toggle="dropdown"> <img src="{{ asset('data/mp.png') }}" class="user-image"
                                    alt="User Image"> <span class="hidden-xs">May Phyo</span> </a>
                            <ul class="dropdown-menu">
                                <li class="user-header">
                                    <div class="pull-left user-img"><img src="dist/img/img1.jpg"
                                            class="img-responsive img-circle" alt="User"></div>
                                    <p class="text-left">Florence Douglas <small>mayphyo@gmail.com</small> </p>
                                </li>
                                <li><a href="#"><i class="icon-profile-male"></i> My Profile</a></li>
                                <li><a href="#"><i class="icon-wallet"></i> My Balance</a></li>
                                <li><a href="#"><i class="icon-envelope"></i> Inbox</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#"><i class="icon-gears"></i> Account Setting</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="{{ route('logout') }}"><i class="fa fa-power-off"></i> Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel -->
                <div class="user-panel">
                    <div class="image text-center"><img src="{{ asset('data/may.png') }}" class="img-circle"
                            alt="User Image">
                    </div>
                    <div class="info">
                        <p>May Phyo</p>
                        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                    </div>
                </div>

                <!-- sidebar menu -->
                <ul class="sidebar-menu" data-widget="tree">
                    <li class="header">PERSONAL</li>
                    <li class="active "> <a href="{{ url('/home') }}"> <i class="icon-home"></i>
                            <span>Dashboard</span>
                            <span class="pull-right-container"> </span>
                        </a>

                    </li>
                    <li class="treeview"> <a href="#"> <i class="icon-grid"></i>
                            <span>Leads </span> <span class="pull-right-container"> <i
                                    class="fa fa-angle-left pull-right"></i> </span> </a>
                        <ul class="treeview-menu">
                            <li><a href="{{ route('add-lead') }}"><i class="fa fa-angle-right"></i> Add
                                    Lead</a>
                            </li>
                            <li><a href="{{ route('manage-leads') }}"><i class="fa fa-angle-right"></i>
                                    Manage Leads</a></li>

                        </ul>
                    </li>
                    <li class="treeview"> <a href="#"> <i class="icon-grid"></i>
                            <span>Accounts </span> <span class="pull-right-container"> <i
                                    class="fa fa-angle-left pull-right"></i> </span> </a>
                        <ul class="treeview-menu">
                            <li><a href="{{ route('add-account') }}"><i class="fa fa-angle-right"></i> Add
                                    Account</a>
                            </li>
                            <li><a href="{{ route('manage-accounts') }}"><i class="fa fa-angle-right"></i>
                                    Manage Accounts</a></li>

                        </ul>
                    </li>
                    <li class="treeview"> <a href="#"> <i class="icon-grid"></i>
                            <span>Contacts </span> <span class="pull-right-container"> <i
                                    class="fa fa-angle-left pull-right"></i> </span> </a>
                        <ul class="treeview-menu">
                            <li><a href="{{ route('add-contact') }}"><i class="fa fa-angle-right"></i> Add
                                    Contact</a>
                            </li>
                            <li><a href="{{ route('manage-contacts') }}"><i class="fa fa-angle-right"></i>
                                    Manage Contacts</a></li>

                        </ul>
                    </li>
                    <li class="treeview"> <a href="#"> <i class="icon-grid"></i>
                            <span>Deals </span> <span class="pull-right-container"> <i
                                    class="fa fa-angle-left pull-right"></i> </span> </a>
                        <ul class="treeview-menu">
                            <li><a href="{{ route('add-deal') }}"><i class="fa fa-angle-right"></i> Add
                                    Deal</a>
                            </li>
                            <li><a href="{{ route('manage-deals') }}"><i class="fa fa-angle-right"></i>
                                    Manage Deals</a></li>

                        </ul>
                    </li>

                </ul>
            </div>
            <!-- /.sidebar -->
        </aside>


        @yield('content')
        <footer class="main-footer">
            <div class="pull-right hidden-xs">Version 1.0</div>
            Copyright © 2024. All rights reserved.
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- jQuery 3 -->
    <script src="{{ asset('assets/dist/js/jquery.min.js') }}"></script>

    <!-- v4.0.0-alpha.6 -->
    <script src="{{ asset('assets/dist/bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- template -->
    <script src="{{ asset('assets/dist/js/adminkit.js') }}"></script>

    <!-- Morris JavaScript -->
    <script src="{{ asset('assets/dist/plugins/raphael/raphael-min.js') }}"></script>
    <script src="{{ asset('assets/dist/plugins/morris/morris.js') }}"></script>
    <script src="{{ asset('assets/dist/plugins/functions/dashboard1.js') }}"></script>

    <!-- Chart Peity JavaScript -->
    <script src="{{ asset('assets/dist/plugins/peity/jquery.peity.min.js') }}"></script>
    <script src="{{ asset('assets/dist/plugins/functions/jquery.peity.init.js') }}"></script>


    <script src="{{ asset('assets/dist/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/dist/plugins/datatables/dataTables.bootstrap.min.js') }}"></script>
    <script>
        $(function() {
            $('#example2').DataTable({
                'paging': true,
                'lengthChange': false,
                'searching': false,
                'ordering': true,
                'info': true,
                'autoWidth': false
            })
        })
    </script>

    <script src="{{ asset('assets/dist/plugins/table-expo/filesaver.min.js') }}"></script>
    <script src="{{ asset('assets/dist/plugins/table-expo/xls.core.min.js') }}"></script>
    <script src="{{ asset('assets/dist/plugins/table-expo/tableexport.js') }}"></script>
    <script>
        $(".export_table").tableExport({
            formats: ["xlsx", "xls", "csv", "txt"],
        });
    </script>
</body>


</html>
