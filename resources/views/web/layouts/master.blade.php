<!DOCTYPE html>
<html lang="en">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="UTF-8" />
    <meta name="description" content="Your vacation, tours and travel theme needs are all met at emprise." />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--logo-->
    <meta name='og:image' content='{{ asset('site/images/logo/cheenihills-logo.png') }}'>
    <title>Cheeni Hiils Resort</title>
    <!--bootstrap link-->

    <!--logo-->
    <link rel="icon" type="image/png" href="{{ asset('site/images/logo/cheenihills-logo.png') }}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Favicon -->
    <!-- Plugins CSS -->
    <link href='{{ asset('site/css/plugins.css') }}' rel='stylesheet' />
    <!-- Main CSS -->
    <link href='{{ asset('site/css/main.css') }}' rel='stylesheet' />
    <!-- Global site tag (gtag.js) - Goo/gle Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-QT65KT9DNB"></script>

    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag("js", new Date());

        gtag("config", "G-QT65KT9DNB");
    </script>


    @yield('styles')
    @stack('css')
</head>
<style>
    .rlr-footer__legal__row__col
    {
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .btn {
        border : 1px solid rgb(255,255,255);

        display: grid;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease-out;
    }

    .fab {
        color: white;
        transition: all 0.3s ease-out;
    }

    .btn-twitter:hover {
        border: none;
        background: #0072b1;
        cursor: pointer;
        box-shadow: 0px 0px 17px 12px rgba(29,161,242,0.39);
        -webkit-box-shadow: 0px 0px 17px 12px rgba(29,161,242,0.2);
        -moz-box-shadow: 0px 0px 17px 12px rgba(29,161,242,0.39);
    }

    .btn-whatsapp:hover {
        border: none;
        background: rgb(79,206,93);
        cursor: pointer;
        box-shadow: 0px 0px 17px 12px rgba(79,206,93,0.39);
        -webkit-box-shadow: 0px 0px 17px 12px rgba(79,206,93,0.2);
        -moz-box-shadow: 0px 0px 17px 12px rgba(79,206,93,0.39);
    }

    .btn-linkedin:hover {
        border: none;
        background: #0072b1;
        cursor: pointer;
        box-shadow: 0px 0px 17px 12px rgba(29,161,242,0.39);
        -webkit-box-shadow: 0px 0px 17px 12px rgba(29,161,242,0.2);
        -moz-box-shadow: 0px 0px 17px 12px rgba(29,161,242,0.39);
    }

    .btn-instagram{
        background: black;
        filter: unset;
        transition: all 0.3s ease-out;
    }

    .btn-whatsapp{
        background: black;
        filter: unset;
        transition: all 0.3s ease-out;
    }


    .btn-linkedin{
        background: black;
        filter: unset;
        transition: all 0.3s ease-out;
    }
    .btn-instagram:hover {
        border: 1px solid rgb(0, 0,0);
        background: rgb(79,206,93);
        cursor: pointer;
        box-shadow: 0px 0px 17px 12px rgba(240,148,51,0.39);
        -webkit-box-shadow: 0px 0px 17px 12px rgba(220,39,67,0.2);
        -moz-box-shadow: 0px 0px 17px 12px rgba(240,148,52,0.39);
        background: -moz-linear-gradient(
            45deg,
            rgb(240,148,51) 0%,
            #e6683c 25%,
            rgb(220,39,67) 50%,
            #cc2366 75%,
            #bc1888 100%
        );
        background: -webkit-linear-gradient(
            45deg,
            #f09433 0%,
            #e6683c 25%,
            #dc2743 50%,
            #cc2366 75%,
            #bc1888 100%
        );
        background: linear-gradient(
            45deg,
            #f09433 0%,
            #e6683c 25%,
            #dc2743 50%,
            #cc2366 75%,
            #bc1888 100%
        );
        filter: progid : DXImageTransform.Microsift.gradient (startColorstr='#f09433',
        endColorstr='#bc1888',GradientType=1)
    }


    .dropdown-menu
    {

        display: none;
        opacity: 0;
        transition: opacity 2s ease-out, transform 2s ease-out;
        transform: translateY(-20px);

    }
        .navigation-item:hover .dropdown-menu {

            display: block;
            opacity: 1;
            transform: translateY(0);

        }

        @media (min-width:700px)
        {
        .navigation-menu
        {
            margin-left: 39%;
        }
        }
        </style>



<body class="rlr-body">
    <!-- Header -->
    <header>

        <nav id="navigation" class="navigation rlr-navigation default-nav fixed-top">
            <!-- Logo -->
            <div class="navigation-header">
                <div class="navigation-brand-text">
                    <div class="rlr-logo rlr-logo__navbar-brand rlr-logo--default">
                        <a href='{{route('web.index')}}'>
                            <img src="{{ asset('site/images/logo/logo.jpg') }}" alt="Logo"
                                class="" style="width: 65px; border-radius: 50%;"/>
                        </a>
                    </div>
                </div>
                <div class="navigation-button-toggler">
                    <span class="rlr-sVGIcon me-2"> <i class="rlr-icon-font rlr-icon-font--megamenu flaticon-menu"> </i>
                    </span>
                </div>
            </div>
            <div class="navigation-body rlr-navigation__body container">
                <div class="navigation-body-header rlr-navigation__body-header">
                    <div class="navigation-brand-text">
                        <div class="rlr-logo rlr-logo__navbar-brand rlr-logo--default">
                            <a href='{{route('web.index')}}'>
                                <img src="{{ asset('site/images/logo/logo.jpg') }}"
                                    alt="Logo" style="width: 160px; border-radius: 50%;"/>
                            </a>
                        </div>
                    </div>
                    <span class="rlr-sVGIcon navigation-body-close-button"> <i
                            class="rlr-icon-font rlr-icon-font--megamenu flaticon-close"> </i> </span>
                </div>

                <!-- Main menu -->
                <ul class="navigation-menu rlr-navigation__menu rlr-navigation__menu--main-links" style="width: 100%;">
                    <!-- Dropdown menu 1 -->
                    <li class="navigation-item is-active">
                        <a class='navigation-link' href='{{ route('web.index') }}'>Home</a>
                    </li>
                    <!-- Mega menu -->
                    <li class="navigation-item @if (Route::is('web.about')) active @endif">
                        <a class="navigation-link" href="{{ route('web.about') }}">About Us</a>
                    </li>
                    <!-- Dropdown menu 1 -->
                     
                    <li class="navigation-item">
                        <a class='navigation-link' href='{{ route('web.rooms') }}'>Accommodation</a>
                    </li>
                    <!-- Mega menu -->

                    <!-- Dropdown menu 2 -->
                    <li class="navigation-item @if (Route::is('web.videos-gallery')) active @endif">
                        <a class="navigation-link" href="{{ route('web.videos-gallery') }}"> Videos </a>
                    </li>

                    <!-- Dropdown menu 2 -->
                    <li class="navigation-item @if (Route::is('web.contact')) active @endif">

                        <a class='navigation-link' href='{{ route('web.contact') }}'>Contact Us</a>

                    </li>

                </ul>

                <!-- User actions menu -->

            </div>
        </nav>
    </header>



    <!-- Main Content -->
    @yield('content')
    <!-- Footer -->
    <footer class="rlr-footer rlr-section rlr-section__mt mt-1">
        <div class="container">
            <!-- Footer menu -->

            @if(1>2)
            <div class="rlr-footer__menu">
                <nav class="rlr-footer__menu__col">

                    <h4>Services</h4>
                    <ul>
                        <li><a href="#">Budget Tours</a></li>
                        <li><a href="#">Expert Insight</a></li>
                        <li><a href="#">Independent</a></li>
                        <li><a href="#">Luxury Tours</a></li>
                        <li><a href="#">Safety Tips</a></li>
                        <li><a href="#">Tips n Tricks</a></li>
                    </ul>
                </nav>
                <nav class="rlr-footer__menu__col">

                    <h4>Adventures</h4>
                    <ul>
                        <li><a href="#">Beach Activity</a></li>
                        <li><a href="#">Bungee Jump</a></li>
                        <li><a href="#">City Tour</a></li>
                        <li><a href="#">Hiking Trips</a></li>
                        <li><a href="#">Jungle Safari</a></li>
                        <li><a href="#">Night City Walk</a></li>
                    </ul>
                </nav>
                <nav class="rlr-footer__menu__col">

                    <h4>Country</h4>
                    <ul>
                        <li><a href="#">USA</a></li>
                        <li><a href="#">Australia</a></li>
                        <li><a href="#">South Africa</a></li>
                        <li><a href="#">West Indies</a></li>
                        <li><a href="#">New Zealand</a></li>
                        <li><a href="#">Srilanka</a></li>
                    </ul>
                </nav>
                <!-- Subscribe -->
                <nav class="rlr-footer__menu__col rlr-footer__menu__col--lg">
                    <div class="rlr-subscribe" data-aos="fade-up" data-aos-offset="250" data-aos-duration="700">
                        <h1 class="fw-bold text-center fs-1 rlr-subscribe__input" style="height: 100%;"><a
                                href="#"> Cheeni Hills Resort in Kanthalloor</a></h1>
                    </div>
                </nav>
            </div>

            @endif

            <!-- Footer bottom -->
            <div class="rlr-footer__legal">
                <div class="rlr-footer__legal__row rlr-footer__legal__row--top">
                    <div class="rlr-footer__legal__row__col">
                        <a class="fs-5" href="#">Privacy Policy</a>
                    </div>

                    <!-- Footer social links -->
                    <div class="rlr-footer__legal__row__col">
                        <a class="fs-5" href="https://api.whatsapp.com/send?phone=%2B917306546299&context=ARBBUcOKKJgaHxn_OQjh2qqhD-17-2ZGa9vlOVQb-qzfYDLh6-eHNuZq7k7ulGBMm9C96jZx1MhDA388TsfQu9_j9-jsJhDO_AbzV4-eY17cMjYn9Jf4j9ndvRFyA-JIu-qnMRJcun634H9zLaYMX2kGiQ&source=FB_Page&app=facebook&entry_point=page_cta&fbclid=IwY2xjawG2IUNleHRuA2FlbQIxMAABHTJ6YwpAjMer9DCt9IWVhqGb54D4JMc3waa5DMBWOIQTcPaij-XYwsQG0A_aem_7hdYAJj7swnPSeh0Zfa2zw">
                            <div class="btn btn-whatsapp">
                                <i class="fab fa-whatsapp fa-1x"></i>
                             </div>
                        </a>
                        <span class="separate"></span>
                        <a class="fs-5" href="https://www.facebook.com/cheenihillresortkanthaloor?__tn__=-]C">

                             <div class="btn btn-linkedin">
                                <i class="fab fa fa-facebook fa-1x mx-1"></i>
                             </div>
                        </a>
                        <span class="separate"></span>
                        <a class="fs-5" href="https://www.instagram.com/cheenihillsfarm/">
                            <div class="btn btn-instagram">
                                <i class="fab fa-instagram fa-1x"></i>
                            </div>
                        </a>
                    </div>
                </div>
                <hr>
                <!-- Footer copyright -->
                <div class="rlr-footer__legal__row rlr-footer__legal__row--bottom">
                   <div class="col-lg-6">
                    <div class="rlr-footer__legal__row__col">
                        <span>&copy; copyright {{date('Y')}} Cheeni Hills Resorts</span>
                    </div>
                   </div>
                   <div class="col-lg-6">
                    <div class="rlr-footer__legal__row__col">
                        <span>Developer By Checkweb Digitals</span>
                    </div>
                   </div>
                    <!-- Footer payment thumbs -->
                </div>
            </div>
        </div>
    </footer>



   <script src='{{ asset('site/js/custom.js') }}'></script>

  <!-- Scripts -->
   <script src="https://kit.fontawesome.com/2b1d000091.js" crossorigin="anonymous">


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
