<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <link rel="icon" href="{{ asset('rock/images/favicon-32x32.png') }}" type="image/png" />
    <!--plugins-->
    <link href="{{ asset('rock/plugins/vectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet" />
    <link href="{{ asset('rock/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
    <link href="{{ asset('rock/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" />
    <link href="{{ asset('rock/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet" />



    <link href="{{ asset('rock/plugins/notifications/css/lobibox.min.css') }}" rel="stylesheet" />






    @isset($themeplugins)
        @foreach ($themeplugins as $plugin)
            @if ($plugin == 'datatable')
                <link href="{{ asset('rock/plugins/datatable/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" />
            @endif


            @if ($plugin == 'sweetalert2')
                <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            @endif
        @endforeach
    @endisset






    <!-- loader-->
    <link href="{{ asset('rock/css/pace.min.css') }}" rel="stylesheet" />
    <script src="{{ asset('rock/js/pace.min.js') }}"></script>
    <!-- Bootstrap CSS -->
    <link href="{{ asset('rock/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('rock/css/bootstrap-extended.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link href="{{ asset('rock/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('rock/css/icons.css') }}" rel="stylesheet">
    <!-- Theme Style CSS -->
    <link rel="stylesheet" href="{{ asset('rock/css/dark-theme.css') }}" />
    <link rel="stylesheet" href="{{ asset('rock/css/semi-dark.css') }}" />
    <link rel="stylesheet" href="{{ asset('rock/css/header-colors.css') }}" />
</head>

<body>
    <!--wrapper-->
    <div class="wrapper">



        @include('dashboard.layouts.sidebar')
        <header>
            <div class="topbar d-flex align-items-center">
                <nav class="navbar navbar-expand gap-3">
                    <div class="mobile-toggle-menu"><i class='bx bx-menu'></i>
                    </div>



                    <div class="top-menu ms-auto">

                    </div>
                    <div class="user-box dropdown px-3">
                        <a class="d-flex align-items-center nav-link dropdown-toggle gap-3 dropdown-toggle-nocaret"
                            href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="{{ asset('rock/images/avatars/avatar-4.png') }}" class="user-img"
                                alt="user avatar">
                            <div class="user-info">
                                <p class="user-name mb-0">{{ Auth::user()->name ?? 'Guest' }}</p>
                                {{-- <p class="designattion mb-0">Web Designer</p> --}}
                            </div>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">


                            <li><a class="dropdown-item d-flex align-items-center"
                                    href="{{ route('dashboard.logout') }}"><i
                                        class="bx bx-log-out-circle"></i><span>Logout</span></a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
        <!--end header -->
        <!--start page wrapper -->



        @yield('content')
        <!--end page wrapper -->
        <!--start overlay-->
        <div class="overlay toggle-icon"></div>
        <!--end overlay-->
        <!--Start Back To Top Button-->
        <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
        <!--End Back To Top Button-->
        <footer class="page-footer">
            <p class="mb-0">Copyright © 2022. All right reserved.</p>
        </footer>
    </div>
    <!--end wrapper-->







    <!--end switcher-->
    <!-- Bootstrap JS -->
    <script src="{{ asset('rock/js/bootstrap.bundle.min.js') }}"></script>
    <!--plugins-->
    <script src="{{ asset('rock/js/jquery.min.js') }}"></script>
    <script src="{{ asset('rock/plugins/simplebar/js/simplebar.min.js') }}"></script>
    <script src="{{ asset('rock/plugins/metismenu/js/metisMenu.min.js') }}"></script>
    <script src="{{ asset('rock/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('rock/plugins/vectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
    <script src="{{ asset('rock/plugins/vectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="{{ asset('rock/plugins/chartjs/js/chart.js') }}"></script>
    <script src="{{ asset('rock/js/index.js') }}"></script>


    <script src="{{ asset('rock/plugins/notifications/js/lobibox.min.js') }}"></script>




    @isset($themeplugins)


        @foreach ($themeplugins as $plugin)
            @if ($plugin == 'datatable')
                <script src="{{ asset('rock/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
                <script src="{{ asset('rock/plugins/datatable/js/dataTables.bootstrap5.min.js') }}"></script>
            @endif
        @endforeach
    @endisset


    <!--app JS-->



    <script src="{{ asset('rock/js/app.js') }}"></script>
    <script>
        new PerfectScrollbar(".app-container")

        function toaster(type = "default", message = "test") {


            Lobibox.notify(type, {
                pauseDelayOnHover: true,
                size: 'mini',
                rounded: true,
                delayIndicator: false,
                continueDelayOnInactiveTab: false,
                position: 'top right',
                msg: message
            });
        }
    </script>


    @yield('scripts')
</body>

</html>
