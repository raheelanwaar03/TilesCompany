<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>{{ env('APP_NAME') }}, Construction</title>
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.png') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/plugins.css') }}" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Didact+Gothic&amp;family=Syne:wght@400;500;600;700;800&amp;display=swap">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
</head>

<body>
    <div class="preloader-bg"></div>
    <div id="preloader">
        <div id="preloader-status">
            <div class="preloader-position loader"> <span></span> </div>
        </div>
    </div>
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <div class="main-header">
        <div class="header-top">
            <div class="container">
                <div class="top-outer clearfix">
                    <div class="top-left">
                        <ul class="links clearfix">
                            <li><a href="tel:+12033334444"><span class="fa fa-phone"></span>{{ env('APP_Phone') }}</a>
                            </li>
                            <li><a href="mailto:info@construction.com"><span
                                        class="fa fa-envelope"></span>{{ env('APP_Email') }}</a></li>
                            <li><a href="https://goo.gl/maps/zgdqkg4hFFR8pfDS8" target="_blank"><span
                                        class="fa fa-map-marker"></span>{{ env('APP_Address') }}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-md">
        <div class="container">
            <a href="{{ route('LandingPage') }}"><img class="logo" src="{{ asset('assets/img/logo.png') }}"
                    alt="logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar"
                aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation"> <span
                    class="navbar-toggler-icon"><i class="fa fa-bars"></i></span> </button>
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown">
                        <a href="{{ route('LandingPage') }}">
                            <span class="nav-link active">Home</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <header class="header slider-fade">
        <div class="owl-carousel owl-theme">
            <div class="text-left item bg-img" data-overlay-dark="4"
                data-background="{{ asset('assets/img/slider/1.jpg') }}">
                <div class="v-middle caption">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7">
                                <h4>Guaranteed High Quality</h4>
                                <h1>Welcome to {{ env('APP_NAME') }}. Construction</h1>
                                <p>Our 10 years is based on truth and our quality work.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-left item bg-img" data-overlay-dark="4"
                data-background="{{ asset('assets/img/slider/2.jpg') }}">
                <div class="v-middle caption">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7">
                                <h4>Architecture Design</h4>
                                <h1>We Build Great Projects</h1>
                                <p>Our 10 years will help you to develop you to make a beautifull Design. <br>
                                    We have fully educated and experinced Engineers team.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-left item bg-img" data-overlay-dark="4"
                data-background="{{ asset('assets/img/slider/3.jpg') }}">
                <div class="v-middle caption">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7">
                                <h4>Professional Team</h4>
                                <h1>Build Your Dream House</h1>
                                <p>Our 10 years working experience will help you to make your dream house. <br>
                                    As we have a experinced Team and skilled people.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
