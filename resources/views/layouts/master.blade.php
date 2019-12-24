<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body class="hold-transition sidebar-mini">

<div class="wrapper"  id="app">

    {{--  Navbar  --}}
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">

        {{--   Left navbar links  --}}
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link btn btn-primary" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
            </li>
        </ul>

        {{--  SEARCH FORM  --}}
        <form class="form-inline ml-3">
            <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">

                <div class="input-group-append">
                    <button class="btn btn-navbar" type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </form>
    </nav>


    {{--  Main Sidebar Container  --}}
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        {{--  Brand Logo  --}}
        <a href="#" class="brand-link">
        <img src="{{ URL::to('uploads') }}/logo.svg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8; width:38px; height:35px; background: #fff;">

        <span class="brand-text font-weight-light">DsJewelry</span>
        </a>

        {{--  Sidebar  --}}
        <div class="sidebar">
            {{--  Sidebar user panel (optional)  --}}
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="{{ URL::to('uploads') }}/david.jpg" class="img-circle elevation-3" alt="User Image"  style="opacity: .8; width:38px; height:35px;">
                </div>

                <div class="info">
                    <a href="#" class="d-block">{{ Auth::user()->name }}</a>
                </div>
            </div>

            {{--  Sidebar Menu  --}}
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                    {{--  DASHBOARD  --}}
                    <li class="nav-item">
                        <router-link to="/dashboard" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>

                            <p>Dashboard</p>
                        </router-link>
                    </li>

                    {{--  PRODUCT  --}}
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-boxes"></i>
                            <p>
                                Product
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        {{--  SUB MENU  --}}
                        <ul class="nav nav-treeview">

                            {{--  CATEGORY  --}}
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-list-alt nav-icon"></i>
                                    <p>Category</p>
                                </a>
                            </li>

                            {{--  GEMSTONE  --}}
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                <i class="far fa-gem nav-icon"></i>
                                <p>Gemstone</p>
                                </a>
                            </li>

                            {{--  MATERIAL  --}}
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                <i class="fas fa-coins nav-icon"></i>
                                <p>Material</p>
                                </a>
                            </li>

                            {{--  ITEM  --}}
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="fas fa-ring nav-icon"></i>
                                    <p>Item</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    {{--  MANAGEMENT  --}}
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-cog"></i>
                            <p>
                                Management
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                    </li>

                    {{--  ACCOUNTS  --}}
                    <li class="nav-item">
                        <router-link to="/profile" href="#" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>

                        <p>Profile</p>
                        </router-link>
                    </li>

                    {{--  LOGS  --}}
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-archive"></i>
                            <p>
                                Logs
                            </p>
                        </a>
                    </li>

                   
                </ul>
            </nav>   {{--  /.sidebar-menu  --}}
        </div>  {{--  /.sidebar  --}}
    </aside>

    {{--  Content Wrapper. Contains page content  --}}
    <div class="content-wrapper">
        <router-view></router-view>
    </div>  {{--  /.content-wrapper  --}}



    {{--   Main Footer  --}}
    <footer class="main-footer">
        <!-- To the right -->
        <div class="float-right d-none d-sm-inline">
        Anything you want
        </div>
        <!-- Default to the left -->
        <strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
    </footer>
</div> {{--  END OF MAIN DIV WRAPPER  --}}


{{--   REQUIRED SCRIPTS  --}}


</body>
</html>
