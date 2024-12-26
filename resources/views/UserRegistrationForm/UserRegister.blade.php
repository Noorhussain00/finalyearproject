<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Login</title>
    <!-- MDB icon -->
    <link rel="icon" href="img/iconsn.png" type="image/x-icon" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
    <!-- MDB -->
    <link rel="stylesheet" href="{{ asset('css/mdb.min.css') }}" />
</head>

<body>
    <!-- Start your project here-->
    @include('Landing.navbar')
    <div class="container-fluid">
        <!-- Section: Design Block -->
        <section class="background-radial-gradient overflow-hidden">
            <style>
                .background-radial-gradient {
                    background-color: hsla(0, 100%, 50%, 0.685);
                    background-image: radial-gradient(650px circle at 0% 0%,
                            hsl(0, 54%, 51%) 15%,
                            hsla(0, 52%, 38%, 0.744) 35%,
                            hsl(0, 94%, 61%) 75%,
                            hsl(0, 61%, 42%) 80%,
                            transparent 100%),
                        radial-gradient(1250px circle at 100% 100%,
                            hsl(0, 74%, 57%) 15%,
                            hsl(0, 42%, 34%) 35%,
                            hsl(0, 74%, 57%) 75%,
                            hsl(0, 74%, 57%) 80%,
                            transparent 100%);
                }

                .bg-glass {
                    background-color: hsla(0, 0%, 100%, 0.9) !important;
                    backdrop-filter: saturate(200%) blur(25px);
                }
            </style>
            <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
                <div class="row gx-lg-5 align-items-center mb-5">
                    <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
                        <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
                            HealthCare <br />
                            <span style="color:#1c2331">Available AT Home</span>
                        </h1>
                        <p class="mb-4 opacity-70" style="color: #ffffff">
                            In-Home Healthcare Services is a platform bringing quality medical care to your doorstep. We
                            make healthcare accessible and convenient by connecting patients with qualified
                            professionals who provide personalized care in the comfort of their homes.
                        </p>
                    </div>
                    <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
                        <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
                        <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>
                        <div class="card bg-glass">
                            <div class="card-body px-4 py-5 px-md-5">
                                <!-- Pills navs -->
                                <ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" id="tab-login" data-mdb-pill-init href="#pills-login"
                                            role="tab" aria-controls="pills-login" aria-selected="true">Login</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="tab-register" data-mdb-pill-init href="#pills-register"
                                            role="tab" aria-controls="pills-register" aria-selected="false">Register
                                            As User</a>
                                    </li>
                                </ul>
                                <!-- Pills content -->
                                <div class="tab-content">
                                    <!-- Login Tab Content -->
                                    <div class="tab-pane fade show active" id="pills-login" role="tabpanel"
                                        aria-labelledby="tab-login">
                                        <!-- Display errors if any -->
                                        @if ($errors->any())
                                            <div style="color: red;">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif

                                        <!-- Login Form -->
                                        <form action="{{ url('login') }}" method="POST">
                                            @csrf

                                            <!-- Email input -->
                                            <div class="form-outline mb-4 ">
                                                <input type="email" name="email" id="email" class="form-control"
                                                    required />
                                                <label class="form-label" for="email">Email</label>
                                            </div>

                                            <!-- Password input -->
                                            <div class="form-outline mb-4">
                                                <input type="password" name="password" id="password"
                                                    class="form-control" required />
                                                <label class="form-label" for="password">Password</label>
                                            </div>

                                            <!-- Role selection dropdown -->
                                            <div class="form-outline mb-4 ">




                                                <select name="role" id="role" required>

                                                    <div>

                                                        <option value="user">User</option>
                                                        <option value="doctor">Doctor</option>

                                                    </div>
                                                </select>
                                            </div>

                                            <!-- Submit button -->
                                            <button type="submit" class="btn btn-primary btn-block mb-8">Login</button>
                                        </form>
                                    </div>

                                    <!-- Register Tab Content -->
                                    <div class="tab-pane fade" id="pills-register" role="tabpanel"
                                        aria-labelledby="tab-register">
                                        <form action="{{ url('register') }}" method="POST">
                                            @csrf

                                            <!-- Name input -->
                                            <div class="form-outline mb-4">
                                                <input type="text" name="name" id="name" class="form-control"
                                                    required />
                                                <label class="form-label" for="name">Name</label>
                                            </div>

                                            <!-- Email input -->
                                            <div class="form-outline mb-4">
                                                <input type="email" name="email" id="email" class="form-control"
                                                    required />
                                                <label class="form-label" for="email">Email</label>
                                            </div>

                                            <!-- Password input -->
                                            <div class="form-outline mb-4">
                                                <input type="password" name="password" id="password"
                                                    class="form-control" required />
                                                <label class="form-label" for="password">Password</label>
                                            </div>

                                            <!-- Confirm Password input -->
                                            <div class="form-outline mb-4">
                                                <input type="password" name="password_confirmation"
                                                    id="password_confirmation" class="form-control" required />
                                                <label class="form-label" for="password_confirmation">Confirm
                                                    Password</label>
                                            </div>

                                            <!-- Submit button -->
                                            <button type="submit"
                                                class="btn btn-primary btn-block mb-4">Register</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Section: Design Block -->
    </div>
    @include('Landing.footer')

    <script type="text/javascript" src="{{ asset('js/mdb.min.js') }}"></script>
    <script type="text/javascript"></script>
</body>

</html>
