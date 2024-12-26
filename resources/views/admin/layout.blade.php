<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>@yield('title', 'Admin Dashboard')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no" />

    <!-- Fonts and Icons -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">

    <!-- CSS Files -->
    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('/css/paper-dashboard.css?v=2.0.1') }}" rel="stylesheet" />
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar -->
        <div class="sidebar" data-color="white" data-active-color="danger">
            <div class="logo">
                <a href="#" class="simple-text logo-mini">
                    <img src="{{ asset('/img/logo-small.png') }}" alt="Logo">
                </a>
                <a href="#" class="simple-text logo-normal">Admin Dashboard</a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li>
                        <a href="{{ route('admin.dashboard') }}">
                            <i class="nc-icon nc-bank"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="@if (Request::is('manage-patients')) active @endif">
                        <a href="/manage-patients">
                            <i class="nc-icon nc-user"></i>
                            <p>Manage Patients</p>
                        </a>
                    </li>
                    <li class="@if (Request::is('manage-users')) active @endif">
                        <a href="{{ route('admin.manageUsers') }}">
                            <i class="nc-icon nc-single-02"></i>
                            <p>Manage Users</p>
                        </a>
                    </li>
                    <li class="@if (Request::is('appointments')) active @endif">
                        <a href="/appointments">
                            <i class="nc-icon nc-calendar-60"></i>
                            <p>Appointments</p>
                        </a>
                    </li>
                    <li class="@if (Request::is('reports')) active @endif">
                        <a href="/reports">
                            <i class="nc-icon nc-chart-bar-32"></i>
                            <p>Reports</p>
                        </a>
                    </li>
                    <li class="@if (Request::is('settings')) active @endif">
                        <a href="/settings">
                            <i class="nc-icon nc-settings-gear-65"></i>
                            <p>Settings</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Main Content -->
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <a class="navbar-brand" href="#">@yield('title', 'Admin Dashboard')</a>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link btn-rotate" href="#">
                                    <i class="nc-icon nc-settings-gear-65"></i>
                                    <p>
                                        <span class="d-lg-none d-md-block">Settings</span>
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <!-- Page Content -->
            <div class="content">
                @yield('content') <!-- This is where page-specific content will go -->
            </div>

            <!-- Footer -->
            <footer class="footer footer-black footer-white">
                <div class="container-fluid">
                    <div class="row">
                        <nav class="footer-nav">
                            <ul>
                                <li><a href="#" target="_blank">About Us</a></li>
                                <li><a href="#" target="_blank">Contact</a></li>
                                <li><a href="#" target="_blank">Terms</a></li>
                            </ul>
                        </nav>
                        <div class="credits ml-auto">
                            <span class="copyright">
                                <i class="fa fa-heart heart"></i> made by Noor Hussain
                            </span>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <!-- JavaScript Files -->
    <script src="{{ asset('/js/core/jquery.min.js') }}"></script>
    <script src="{{ asset('/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/js/paper-dashboard.min.js?v=2.0.1') }}"></script>
</body>

</html>
