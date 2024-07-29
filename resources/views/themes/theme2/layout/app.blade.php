<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog Theme 2</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @include('themes.theme2.layout.headerlink')
</head>
    <body class="bg-pearl box-layout sticky-header">

        <!-- Preloader Start Here -->
        <div id="preloader"></div>
            <!-- Preloader End Here -->
            <div id="wrapper" class="wrapper bg-common" data-bg-image="{{ asset('themes/theme2/img/figure/box-bg.png')}}">
                @include('themes.theme2.layout.headerNav')

                @yield('breadcrumb')
                <div class="box-layout-child bg-white">
                    <!-- Blog Area Start Here -->
                    <section class="blog-wrap-layout8">
                        <div class="container">
                            @yield('content')
                        </div>
                    </section>
                </div>

                @include('themes.theme2.layout.footerSection')

                <!-- Search Box Start Here -->
                <div id="header-search" class="header-search">
                    <button type="button" class="close">×</button>
                    <form class="header-search-form">
                        <input type="search" value="" placeholder="Type here........" />
                        <button type="submit" class="search-btn">
                            <i class="flaticon-magnifying-glass"></i>
                        </button>
                    </form>
                </div>
                <!-- Search Box End Here -->
                <!-- Offcanvas Menu Start -->
                <div class="offcanvas-menu-wrap" id="offcanvas-wrap">
                    <div class="offcanvas-content">
                        <div class="offcanvas-logo">
                            <a href="index.html"><img src="{{ asset('themes/theme2/img/logo-dark2.png')}}" alt="logo"></a>
                        </div>
                        <ul class="offcanvas-menu">
                            <li class="nav-item">
                                <a href="{{ route('home') }}">HOME</a>
                            </li>
                            <li class="nav-item">
                                <a href="about.html">ABOUT</a>
                            </li>
                            <li class="nav-item">
                                <a href="blog-category1.html">CATEGORIES</a>
                            </li>
                            <li class="nav-item">
                                <a href="authors.html">AUTHORS</a>
                            </li>
                            <li class="nav-item">
                                <a href="archives1.html">ARCHIVE</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('theme2.contact') }}">CONTACT</a>
                            </li>
                        </ul>
                        <div class="offcanvas-footer">
                            <div class="item-title">Follow Me</div>
                                <ul class="offcanvas-social">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                    <li><a href="#"><i class="fas fa-rss"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Offcanvas Menu End -->
                </div>
                @include('themes.theme2.layout.footerlink')
    </body>
</html>
