<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="shortcut icon" href="{{ asset('website/img/favicon.png')}}" type="image/x-icon">
        <title>Once Upon A Time - @yield('title')</title>
        <!-- Bootstrap CSS -->
        <link href="{{ asset('website/css/bootstrap.min.css')}}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('website/css/style.css')}}">
        <link rel="stylesheet" href="{{ asset('website/css/responsive.css')}}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
        <link href="{{ asset('website/img/logo.png')}}" rel="icon">
    </head>
    <body>
        <header>
            <div class="container">
                <div class="header-sec d-flex align-items-center flex-wrap">
                    <div class="col-lg-6 col-md-2 col-12">
                        <div class="left-header d-flex align-items-center justify-content-between flex-wrap">
                            
                            <div class="logo">
                               <a href="{{route('home.page')}}"><img src="{{ asset('website/img/logo.png')}}" alt=""></a>
                            </div>
                            <div class="navigation">
                                <div class="hamburger-menu"> <span></span> <span></span> <span></span> <span></span> </div>
                                <ul>
                                    <li><a href="{{route('book.list')}}">Book Store</a></li>
                                    <li><a href="">About </a></li>
                                    <li><a href="{{route('contact')}}">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-10 col-12">
                        <div class="search-sec d-flex align-items-center">
                            <div class="search-container me-3">
                                <!-- Search bar button-->
                                <button class="search-button">
                                    <i class="fas fa-search"></i>
                                </button>
                                <input type="text" id="search-input" class="search-input" placeholder="Search...">
                            </div>
                            <div class="info-sec d-flex">
                                <div class="love"><img src="{{ asset('website/img/love.png')}}" alt=""></div>
                                <a href="{{route('cart')}}">
                                <div class=""><img src="{{ asset('website/img/cart.png')}}" alt=""></div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        @yield('content')

        @include('website.public_layouts.footer') 

    </body>
</html>
