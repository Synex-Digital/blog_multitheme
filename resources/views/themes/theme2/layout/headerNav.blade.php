<header class="has-mobile-menu">
    <div id="header-middlebar" class="bg--dark pt--25 pb--25">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-lg-4">
                    <div class="header-action-items">
                        <ul>
                            <li class="offcanvas-menu-trigger-wrap">
                                <button type="button" class="offcanvas-menu-btn menu-status-open">
                                    <span class="btn-icon-wrap">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </span>
                                </button>
                            </li>
                            
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 d-flex justify-content-center">
                    <div class="logo-area">
                        <a href="{{ route('home') }}" class="temp-logo" id="temp-logo">
                            <img src="{{ asset('themes/theme2/img/logo-light.png')}}" alt="logo" class="img-fluid">
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 d-flex justify-content-end">
                    <div class="header-action-items">
                        <ul>
                            <li class="header-search-box divider-style-border">
                                <a href="#header-search" title="Search">
                                    <svg fill="#ffffff" height="20px" width="20px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    viewBox="0 0 488.4 488.4" xml:space="preserve">
                                    <g>
                                        <g>
                                            <path d="M0,203.25c0,112.1,91.2,203.2,203.2,203.2c51.6,0,98.8-19.4,134.7-51.2l129.5,129.5c2.4,2.4,5.5,3.6,8.7,3.6
                                                s6.3-1.2,8.7-3.6c4.8-4.8,4.8-12.5,0-17.3l-129.6-129.5c31.8-35.9,51.2-83,51.2-134.7c0-112.1-91.2-203.2-203.2-203.2
                                                S0,91.15,0,203.25z M381.9,203.25c0,98.5-80.2,178.7-178.7,178.7s-178.7-80.2-178.7-178.7s80.2-178.7,178.7-178.7
                                                S381.9,104.65,381.9,203.25z"/>
                                        </g>
                                    </g>
                                    </svg>
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="rt-sticky-placeholder"></div>
    <div id="header-menu" class="header-menu menu-layout2 bg--dark2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav id="dropdown" class="template-main-menu">
                        <ul>
                            <li class="hide-on-mobile-menu">
                                <a href="{{ route('home') }}">HOME</a>
                            </li>
                            <li>
                                <a href="{{ route('theme2.about') }}">ABOUT</a>
                            </li>
                            <li>
                                <a href="#">CATEGORIES</a>
                                <ul class="dropdown-menu-col-1">
                                    @foreach ($category as $cat)
                                        <li><a class="dropdown-item" href="{{ route('theme2.categories', $cat->slug) }}">{{ $cat->name }}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                            <li>
                                <a href="{{ route('theme2.all.blogs') }}">BLOG</a>
                            </li>
                            {{-- <li class="possition-static hide-on-mobile-menu">
                                <a href="#">PAGES</a>
                                <div class="template-mega-menu">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-3">
                                                <div class="menu-ctg-title">Home</div>
                                                <ul class="sub-menu">
                                                    <li>
                                                        <a href="index.html">
                                                            <i class="fas fa-home"></i>Home 1</a>
                                                    </li>
                                                    <li>
                                                        <a href="index2.html">
                                                            <i class="fas fa-home"></i>Home 2</a>
                                                    </li>
                                                    <li>
                                                        <a href="index3.html">
                                                            <i class="fas fa-home"></i>Home 3</a>
                                                    </li>
                                                    <li>
                                                        <a href="index4.html">
                                                            <i class="fas fa-home"></i>Home 4</a>
                                                    </li>
                                                    <li>
                                                        <a href="index5.html">
                                                            <i class="fas fa-home"></i>Home 5</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-3">
                                                <div class="menu-ctg-title">Home</div>
                                                <ul class="sub-menu">
                                                    <li>
                                                        <a href="index6.html">
                                                            <i class="fas fa-home"></i>Home 6</a>
                                                    </li>
                                                    <li>
                                                        <a href="index7.html">
                                                            <i class="fas fa-home"></i>Home 7</a>
                                                    </li>
                                                    <li>
                                                        <a href="index8.html">
                                                            <i class="fas fa-home"></i>Home 8</a>
                                                    </li>
                                                    <li>
                                                        <a href="index9.html">
                                                            <i class="fas fa-home"></i>Home 9</a>
                                                    </li>
                                                    <li>
                                                        <a href="index10.html">
                                                            <i class="fas fa-home"></i>Home 10</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-3">
                                                <div class="menu-ctg-title">Home</div>
                                                <ul class="sub-menu">
                                                    <li>
                                                        <a href="index11.html">
                                                            <i class="fas fa-home"></i>Home 11</a>
                                                    </li>
                                                    <li>
                                                        <a href="index12.html">
                                                            <i class="fas fa-home"></i>Home 12</a>
                                                    </li>
                                                    <li>
                                                        <a href="index13.html">
                                                            <i class="fas fa-home"></i>Home 13</a>
                                                    </li>
                                                </ul>
                                                <div class="menu-ctg-title">ARCHIVES</div>
                                                <ul class="sub-menu">
                                                    <li>
                                                        <a href="archives1.html">
                                                            <i class="fab fa-cloudversify"></i>Archive 1</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-3">
                                                <div class="menu-ctg-title">ARCHIVES</div>
                                                <ul class="sub-menu">
                                                    <li>
                                                        <a href="archives2.html">
                                                            <i class="fab fa-cloudversify"></i>Archive 2</a>
                                                    </li>
                                                </ul>
                                                <div class="menu-ctg-title">AUTHORS</div>
                                                <ul class="sub-menu">
                                                    <li>
                                                        <a href="authors.html">
                                                            <i class="fas fa-users"></i>Authors</a>
                                                    </li>
                                                </ul>
                                                <div class="menu-ctg-title">PAGES</div>
                                                <ul class="sub-menu">
                                                    <li>
                                                        <a href="404.html">
                                                            <i class="fas fa-user-secret"></i>404 Error</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="hide-on-desktop-menu">
                                <a href="#">Pages</a>
                                <ul>
                                    <li>
                                        <a href="about.html">About 1</a>
                                    </li>
                                    <li>
                                        <a href="blog-category1.html">Blog Category 1</a>
                                    </li>
                                    <li>
                                        <a href="single-blog.html">Blog Details 1</a>
                                    </li>
                                    <li>
                                        <a href="archives1.html">Archives 1</a>
                                    </li>
                                    <li>
                                        <a href="404.html">404 Error</a>
                                    </li>
                                    <li>
                                        <a href="contact.html">Contact</a>
                                    </li>
                                </ul>
                            </li> --}}
                            <li>
                                <a href="{{ route('theme2.contact') }}">CONTACT</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
