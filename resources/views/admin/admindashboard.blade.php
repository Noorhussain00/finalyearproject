<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('/img/apple-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('/img/favicon.png') }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Admin Dashboard</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no" name="viewport" />

    <!-- Fonts and Icons -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">

    <!-- CSS Files -->
    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('/css/paper-dashboard.css?v=2.0.1') }}" rel="stylesheet" />
    <link href="{{ asset('/demo/demo.css') }}" rel="stylesheet" />
</head>

<body class="">
    <div class="wrapper">
        <div class="sidebar" data-color="white" data-active-color="danger">
            <div class="logo">
                <a href="#" class="simple-text logo-mini">
                    <div class="logo-image-small">
                        <img src="{{ asset('/img/logo-small.png') }}">
                    </div>
                </a>
                <a href="#" class="simple-text logo-normal">
                    Admin Dashboard
                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li class="active">
                        <<a href="{{ route('admin.dashboard') }}">
                            <i class="nc-icon nc-bank"></i>
                       Dashboardsssss
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('doctor.show') }}">
                            <i class="nc-icon nc-user-run"></i>
                          manage doctrssss

                        </a>
                    </li>
                    <li>
                        <a href="/manage-patients">
                            <i class="nc-icon nc-user"></i>
                            <p>Manage Patients</p>
                        </a>
                    </li>
                    <li>
                        <a href="/appointments">
                            <i class="nc-icon nc-calendar-60"></i>
                            <p>Appointments</p>
                        </a>
                    </li>
                    <li>
                        <a href="/reports">
                            <i class="nc-icon nc-chart-bar-32"></i>
                            <p>Reports</p>
                        </a>
                    </li>
                    <li>
                        <a href="/settings">
                            <i class="nc-icon nc-settings-gear-65"></i>
                            <p>Settings</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <a class="navbar-brand" href="#">Admin Dashboard</a>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link btn-rotate" href="javascript:;">
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

            <!-- Dashboard Content -->
            <div class="content">
                <div class="row">
                    <!-- Total Doctors Card -->
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card card-stats">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-5 col-md-4">
                                        <div class="icon-big text-center icon-warning">
                                            <i class="nc-icon nc-badge text-warning"></i>
                                        </div>
                                    </div>
                                    <div class="col-7 col-md-8">
                                        <div class="numbers">
                                            <p class="card-category">Total Doctors</p>
                                            <p class="card-title">50</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <hr>
                                <div class="stats">
                                    <i class="fa fa-refresh"></i> Update Now
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Pending Appointments Card -->
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card card-stats">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-5 col-md-4">
                                        <div class="icon-big text-center icon-warning">
                                            <i class="nc-icon nc-calendar-60 text-success"></i>
                                        </div>
                                    </div>
                                    <div class="col-7 col-md-8">
                                        <div class="numbers">
                                            <p class="card-category">Pending Appointments</p>
                                            <p class="card-title">32</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <hr>
                                <div class="stats">
                                    <i class="fa fa-clock"></i> Last updated
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Active Users Card -->
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card card-stats">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-5 col-md-4">
                                        <div class="icon-big text-center icon-warning">
                                            <i class="nc-icon nc-user-run text-danger"></i>
                                        </div>
                                    </div>
                                    <div class="col-7 col-md-8">
                                        <div class="numbers">
                                            <p class="card-category">Active Users</p>
                                            <p class="card-title">120</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <hr>
                                <div class="stats">
                                    <i class="fa fa-refresh"></i> Update Now
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Total Revenue Card -->
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card card-stats">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-5 col-md-4">
                                        <div class="icon-big text-center icon-warning">
                                            <i class="nc-icon nc-money-coins text-primary"></i>
                                        </div>
                                    </div>
                                    <div class="col-7 col-md-8">
                                        <div class="numbers">
                                            <p class="card-category">Revenue</p>
                                            <p class="card-title">$ 1,234</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <hr>
                                <div class="stats">
                                    <i class="fa fa-calendar-o"></i> Last Month
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Appointment Statistics Chart -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">Appointment Trends</h5>
                                <p class="card-category">Appointments in the last 24 hours</p>
                            </div>
                            <div class="card-body">
                                <canvas id="appointmentsChart" width="400" height="100"></canvas>
                            </div>
                            <div class="card-footer">
                                <hr>
                                <div class="stats">
                                    <i class="fa fa-history"></i> Updated just now
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
                                © <script>document.write(new Date().getFullYear())</script>, made with <i class="fa fa-heart heart"></i> by Your Company
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
    <script src="{{ asset('/js/plugins/chartjs.min.js') }}"></script>
    <script src="{{ asset('/js/paper-dashboard.min.js?v=2.0.1') }}"></script>
    <script src="{{ asset('/demo/demo.js') }}"></script>

    <script>
        // Sample Chart.js setup for appointment trends
        var ctx = document.getElementById('appointmentsChart').getContext('2d');
        var appointmentsChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['1 AM', '2 AM', '3 AM', '4 AM', '5 AM', '6 AM'], // Sample data
                datasets: [{
                    label: 'Appointments',
                    data: [2, 5, 3, 7, 4, 6],
                    borderColor: 'rgba(75, 192, 192, 1)',
                    fill: false
                }]
            }
        });
    </script>
</body>

</html>
