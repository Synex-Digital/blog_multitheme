@extends('Themes.theme1.layout.app')
@section('content')

    <section class="page-header">
        <div class="container-xl">
            <div class="text-center">
                <h1 class="mt-0 mb-2">Category</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center mb-0">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Category</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>

    <section class="main-content">
        <div class="container-xl">

            <div class="row gy-4">

                <div class="col-lg-8">

                    <div class="row gy-4">
                        @foreach ($blog_item as $blog)
                            <div class="col-sm-6">
                                <!-- post -->
                                <div class="post post-grid rounded bordered">
                                    <div class="thumb top-rounded">
                                        <a href="#" class="category-badge position-absolute">{{ $blog->category->name }}</a>
                                        <span class="post-format">
                                            <i class="icon-picture"></i>
                                        </span>
                                        <a href="{{ route('blog-single') }}">
                                            <div class="inner">
                                                <img src="{{ url('/') }}/{{ $blog->image }}" alt="post-title" />
                                            </div>
                                        </a>
                                    </div>
                                    <div class="details">
                                        <ul class="meta list-inline mb-0">
                                            <li class="list-inline-item"><a href="#">{{ $blog->author }}</a></li>
                                            <li class="list-inline-item">{{ $blog->updated_at->format('d/m/Y') }}</li>
                                        </ul>
                                        <h5 class="post-title mb-3 mt-3"><a href="{{ route('blog-single') }}">{{ $blog->title }}</a></h5>
                                        <p class="excerpt mb-0">{{ $blog->seo_description }}</p>
                                    </div>
                                    <div class="post-bottom clearfix d-flex align-items-center">
                                        <div class="social-share me-auto">
                                            <button class="toggle-button icon-share"></button>
                                            <ul class="icons list-unstyled list-inline mb-0">
                                                <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                                <li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                                <li class="list-inline-item"><a href="#"><i class="fab fa-telegram-plane"></i></a></li>
                                                <li class="list-inline-item"><a href="#"><i class="far fa-envelope"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="more-button float-end">
                                            <a href="{{ route('blog-single') }}"><span class="icon-options"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach


                        {{-- <div class="col-sm-6">
                            <!-- post -->
                            <div class="post post-grid rounded bordered">
                                <div class="thumb top-rounded">
                                    <a href="category.html" class="category-badge position-absolute">Inspiration</a>
                                    <a href="blog-single.html">
                                        <div class="inner">
                                            <img src="images/posts/post-md-2.jpg" alt="post-title" />
                                        </div>
                                    </a>
                                </div>
                                <div class="details">
                                    <ul class="meta list-inline mb-0">
                                        <li class="list-inline-item"><a href="#"><img src="images/other/author-sm.png" class="author" alt="author"/>Katen Doe</a></li>
                                        <li class="list-inline-item">29 March 2021</li>
                                    </ul>
                                    <h5 class="post-title mb-3 mt-3"><a href="blog-single.html">Most Important Thing You Need To Know About Swim</a></h5>
                                    <p class="excerpt mb-0">I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence.</p>
                                </div>
                                <div class="post-bottom clearfix d-flex align-items-center">
                                    <div class="social-share me-auto">
                                        <button class="toggle-button icon-share"></button>
                                        <ul class="icons list-unstyled list-inline mb-0">
                                            <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fab fa-telegram-plane"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="far fa-envelope"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="more-button float-end">
                                        <a href="blog-single.html"><span class="icon-options"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <!-- post -->
                            <div class="post post-grid rounded bordered">
                                <div class="thumb top-rounded">
                                    <a href="category.html" class="category-badge position-absolute">Fashion</a>
                                    <a href="blog-single.html">
                                        <div class="inner">
                                            <img src="images/posts/post-md-3.jpg" alt="post-title" />
                                        </div>
                                    </a>
                                </div>
                                <div class="details">
                                    <ul class="meta list-inline mb-0">
                                        <li class="list-inline-item"><a href="#"><img src="images/other/author-sm.png" class="author" alt="author"/>Katen Doe</a></li>
                                        <li class="list-inline-item">29 March 2021</li>
                                    </ul>
                                    <h5 class="post-title mb-3 mt-3"><a href="blog-single.html">The Secrets To Finding Class Tools For Your Dress</a></h5>
                                    <p class="excerpt mb-0">I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence.</p>
                                </div>
                                <div class="post-bottom clearfix d-flex align-items-center">
                                    <div class="social-share me-auto">
                                        <button class="toggle-button icon-share"></button>
                                        <ul class="icons list-unstyled list-inline mb-0">
                                            <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fab fa-telegram-plane"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="far fa-envelope"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="more-button float-end">
                                        <a href="blog-single.html"><span class="icon-options"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <!-- post -->
                            <div class="post post-grid rounded bordered">
                                <div class="thumb top-rounded">
                                    <a href="category.html" class="category-badge position-absolute">Lifestyle</a>
                                    <span class="post-format">
                                        <i class="icon-camrecorder"></i>
                                    </span>
                                    <a href="blog-single.html">
                                        <div class="inner">
                                            <img src="images/posts/post-md-4.jpg" alt="post-title" />
                                        </div>
                                    </a>
                                </div>
                                <div class="details">
                                    <ul class="meta list-inline mb-0">
                                        <li class="list-inline-item"><a href="#"><img src="images/other/author-sm.png" class="author" alt="author"/>Katen Doe</a></li>
                                        <li class="list-inline-item">29 March 2021</li>
                                    </ul>
                                    <h5 class="post-title mb-3 mt-3"><a href="blog-single.html">How I Improved My Fashion Style In One Day</a></h5>
                                    <p class="excerpt mb-0">I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence.</p>
                                </div>
                                <div class="post-bottom clearfix d-flex align-items-center">
                                    <div class="social-share me-auto">
                                        <button class="toggle-button icon-share"></button>
                                        <ul class="icons list-unstyled list-inline mb-0">
                                            <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fab fa-telegram-plane"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="far fa-envelope"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="more-button float-end">
                                        <a href="blog-single.html"><span class="icon-options"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- post -->
                            <div class="post post-grid rounded bordered">
                                <div class="thumb top-rounded">
                                    <a href="category.html" class="category-badge position-absolute">Trending</a>
                                    <a href="blog-single.html">
                                        <div class="inner">
                                            <img src="images/posts/post-md-5.jpg" alt="post-title" />
                                        </div>
                                    </a>
                                </div>
                                <div class="details">
                                    <ul class="meta list-inline mb-0">
                                        <li class="list-inline-item"><a href="#"><img src="images/other/author-sm.png" class="author" alt="author"/>Katen Doe</a></li>
                                        <li class="list-inline-item">29 March 2021</li>
                                    </ul>
                                    <h5 class="post-title mb-3 mt-3"><a href="blog-single.html">3 Easy Ways To Make Your iPhone Faster</a></h5>
                                    <p class="excerpt mb-0">I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence.</p>
                                </div>
                                <div class="post-bottom clearfix d-flex align-items-center">
                                    <div class="social-share me-auto">
                                        <button class="toggle-button icon-share"></button>
                                        <ul class="icons list-unstyled list-inline mb-0">
                                            <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fab fa-telegram-plane"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="far fa-envelope"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="more-button float-end">
                                        <a href="blog-single.html"><span class="icon-options"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <!-- post -->
                            <div class="post post-grid rounded bordered">
                                <div class="thumb top-rounded">
                                    <a href="category.html" class="category-badge position-absolute">Fashion</a>
                                    <a href="blog-single.html">
                                        <div class="inner">
                                            <img src="images/posts/post-md-6.jpg" alt="post-title" />
                                        </div>
                                    </a>
                                </div>
                                <div class="details">
                                    <ul class="meta list-inline mb-0">
                                        <li class="list-inline-item"><a href="#"><img src="images/other/author-sm.png" class="author" alt="author"/>Katen Doe</a></li>
                                        <li class="list-inline-item">29 March 2021</li>
                                    </ul>
                                    <h5 class="post-title mb-3 mt-3"><a href="blog-single.html">Wondering How To Make Your Hair Style Rock?</a></h5>
                                    <p class="excerpt mb-0">I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence.</p>
                                </div>
                                <div class="post-bottom clearfix d-flex align-items-center">
                                    <div class="social-share me-auto">
                                        <button class="toggle-button icon-share"></button>
                                        <ul class="icons list-unstyled list-inline mb-0">
                                            <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fab fa-telegram-plane"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="far fa-envelope"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="more-button float-end">
                                        <a href="blog-single.html"><span class="icon-options"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <!-- post -->
                            <div class="post post-grid rounded bordered">
                                <div class="thumb top-rounded">
                                    <a href="category.html" class="category-badge position-absolute">How To</a>
                                    <span class="post-format">
                                        <i class="icon-picture"></i>
                                    </span>
                                    <a href="blog-single.html">
                                        <div class="inner">
                                            <img src="images/posts/post-md-7.jpg" alt="post-title" />
                                        </div>
                                    </a>
                                </div>
                                <div class="details">
                                    <ul class="meta list-inline mb-0">
                                        <li class="list-inline-item"><a href="#"><img src="images/other/author-sm.png" class="author" alt="author"/>Katen Doe</a></li>
                                        <li class="list-inline-item">29 March 2021</li>
                                    </ul>
                                    <h5 class="post-title mb-3 mt-3"><a href="blog-single.html">How To Make More Construction By Doing Less</a></h5>
                                    <p class="excerpt mb-0">I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence.</p>
                                </div>
                                <div class="post-bottom clearfix d-flex align-items-center">
                                    <div class="social-share me-auto">
                                        <button class="toggle-button icon-share"></button>
                                        <ul class="icons list-unstyled list-inline mb-0">
                                            <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fab fa-telegram-plane"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="far fa-envelope"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="more-button float-end">
                                        <a href="blog-single.html"><span class="icon-options"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <!-- post -->
                            <div class="post post-grid rounded bordered">
                                <div class="thumb top-rounded">
                                    <a href="category.html" class="category-badge position-absolute">Culture</a>
                                    <a href="blog-single.html">
                                        <div class="inner">
                                            <img src="images/posts/post-md-8.jpg" alt="post-title" />
                                        </div>
                                    </a>
                                </div>
                                <div class="details">
                                    <ul class="meta list-inline mb-0">
                                        <li class="list-inline-item"><a href="#"><img src="images/other/author-sm.png" class="author" alt="author"/>Katen Doe</a></li>
                                        <li class="list-inline-item">29 March 2021</li>
                                    </ul>
                                    <h5 class="post-title mb-3 mt-3"><a href="blog-single.html">An Incredibly Easy Method That Works For All</a></h5>
                                    <p class="excerpt mb-0">I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence.</p>
                                </div>
                                <div class="post-bottom clearfix d-flex align-items-center">
                                    <div class="social-share me-auto">
                                        <button class="toggle-button icon-share"></button>
                                        <ul class="icons list-unstyled list-inline mb-0">
                                            <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fab fa-telegram-plane"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="far fa-envelope"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="more-button float-end">
                                        <a href="blog-single.html"><span class="icon-options"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <!-- post -->
                            <div class="post post-grid rounded bordered">
                                <div class="thumb top-rounded">
                                    <a href="category.html" class="category-badge position-absolute">Inspiration</a>
                                    <a href="blog-single.html">
                                        <div class="inner">
                                            <img src="images/posts/post-md-9.jpg" alt="post-title" />
                                        </div>
                                    </a>
                                </div>
                                <div class="details">
                                    <ul class="meta list-inline mb-0">
                                        <li class="list-inline-item"><a href="#"><img src="images/other/author-sm.png" class="author" alt="author"/>Katen Doe</a></li>
                                        <li class="list-inline-item">29 March 2021</li>
                                    </ul>
                                    <h5 class="post-title mb-3 mt-3"><a href="blog-single.html">10 Ways To Immediately Start Selling Furniture</a></h5>
                                    <p class="excerpt mb-0">I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence.</p>
                                </div>
                                <div class="post-bottom clearfix d-flex align-items-center">
                                    <div class="social-share me-auto">
                                        <button class="toggle-button icon-share"></button>
                                        <ul class="icons list-unstyled list-inline mb-0">
                                            <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fab fa-telegram-plane"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="far fa-envelope"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="more-button float-end">
                                        <a href="blog-single.html"><span class="icon-options"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <!-- post -->
                            <div class="post post-grid rounded bordered">
                                <div class="thumb top-rounded">
                                    <a href="category.html" class="category-badge position-absolute">Lifestyle</a>
                                    <span class="post-format">
                                        <i class="icon-earphones"></i>
                                    </span>
                                    <a href="blog-single.html">
                                        <div class="inner">
                                            <img src="images/posts/post-md-10.jpg" alt="post-title" />
                                        </div>
                                    </a>
                                </div>
                                <div class="details">
                                    <ul class="meta list-inline mb-0">
                                        <li class="list-inline-item"><a href="#"><img src="images/other/author-sm.png" class="author" alt="author"/>Katen Doe</a></li>
                                        <li class="list-inline-item">29 March 2021</li>
                                    </ul>
                                    <h5 class="post-title mb-3 mt-3"><a href="blog-single.html">Now You Can Have Your Thoughts Done Safely</a></h5>
                                    <p class="excerpt mb-0">I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence.</p>
                                </div>
                                <div class="post-bottom clearfix d-flex align-items-center">
                                    <div class="social-share me-auto">
                                        <button class="toggle-button icon-share"></button>
                                        <ul class="icons list-unstyled list-inline mb-0">
                                            <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fab fa-telegram-plane"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="far fa-envelope"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="more-button float-end">
                                        <a href="blog-single.html"><span class="icon-options"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div> --}}

                    </div>

                    <nav>
                        <ul class="pagination justify-content-center">
                            <li class="page-item active" aria-current="page">
                                <span class="page-link">1</span>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                        </ul>
                    </nav>

                </div>
                <div class="col-lg-4">

                    <!-- sidebar -->
                    <div class="sidebar">
                        <!-- widget about -->
                        <div class="widget rounded">
                            <div class="widget-about data-bg-image text-center" data-bg-image="images/map-bg.png">
                                <img src="{{ asset('Themes/theme1/images/logo.svg') }}" alt="logo" class="mb-4" />
                                <p class="mb-4">Hello, We’re content writer who is fascinated by content fashion, celebrity and lifestyle. We helps clients bring the right content to the right people.</p>
                                <ul class="social-icons list-unstyled list-inline mb-0">
                                    <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fab fa-medium"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fab fa-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>

                        <!-- widget popular posts -->
                        <div class="widget rounded">
                            <div class="widget-header text-center">
                                <h3 class="widget-title">Popular Posts</h3>
                                <img src="{{ asset('Themes/theme1/images/wave.svg') }}" class="wave" alt="wave" />
                            </div>
                            <div class="widget-content">
                                <!-- post -->
                                @foreach ($blog_item as $sl=>$blog)
                                    <div class="post post-list-sm circle">
                                        <div class="thumb circle">
                                            <span class="number">{{ $sl+1 }}</span>
                                            <a href="{{ route('blog-single') }}">
                                                <div class="inner">
                                                    <img src="{{ url('/') }}/{{ $blog->image }}" alt="post-title" />
                                                </div>
                                            </a>
                                        </div>
                                        <div class="details clearfix">
                                            <h6 class="post-title my-0"><a href="{{ route('blog-single') }}">{{ $blog->title }}</a></h6>
                                            <ul class="meta list-inline mt-1 mb-0">
                                                <li class="list-inline-item">{{ $blog->updated_at->format('d/m/Y') }}</li>
                                            </ul>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <!-- widget categories -->
                        <div class="widget rounded">
                            <div class="widget-header text-center">
                                <h3 class="widget-title">Explore Topics</h3>
                                <img src="{{ asset('Themes/theme1/images/wave.svg') }}" class="wave" alt="wave" />
                            </div>
                            <div class="widget-content">
                                <ul class="list">
                                    @foreach ($categories as $category)
                                        <li><a href="#">{{ $category->name }}</a><span>{{ $category->blogs ? $category->blogs->count(): '0' }}</span></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                        <!-- widget newsletter -->
                        <div class="widget rounded">
                            <div class="widget-header text-center">
                                <h3 class="widget-title">Newsletter</h3>
                                <img src="{{ asset('Themes/theme1/images/wave.svg') }}" class="wave" alt="wave" />
                            </div>
                            <div class="widget-content">
                                <span class="newsletter-headline text-center mb-3">Join 70,000 subscribers!</span>
                                <form>
                                    <div class="mb-2">
                                        <input class="form-control w-100 text-center" placeholder="Email address…" type="email">
                                    </div>
                                    <button class="btn btn-default btn-full" type="submit">Sign Up</button>
                                </form>
                                <span class="newsletter-privacy text-center mt-3">By signing up, you agree to our <a href="#">Privacy Policy</a></span>
                            </div>
                        </div>

                        <!-- widget post carousel -->
                        <div class="widget rounded">
                            <div class="widget-header text-center">
                                <h3 class="widget-title">Celebration</h3>
                                <img src="{{ asset('Themes/theme1/images/wave.svg') }}" class="wave" alt="wave" />
                            </div>
                            <div class="widget-content">
                                <div class="post-carousel-widget">
                                    <!-- post -->
                                    @foreach ($blog_item as $blog)
                                        <div class="post post-carousel">
                                            <div class="thumb rounded">
                                                <a href="#" class="category-badge position-absolute">{{ $blog->category->name }}</a>
                                                <a href="{{ route('blog-single') }}">
                                                    <div class="inner">
                                                        <img src="{{ url('/') }}/{{ $blog->image }}" alt="post-title" />
                                                    </div>
                                                </a>
                                            </div>
                                            <h5 class="post-title mb-0 mt-4"><a href="{{ route('blog-single') }}">{{ $blog->title }}</a></h5>
                                            <ul class="meta list-inline mt-2 mb-0">
                                                <li class="list-inline-item"><a href="#">{{ $blog->author }}</a></li>
                                                <li class="list-inline-item">{{ $blog->updated_at->format('d/m/Y') }}</li>
                                            </ul>
                                        </div>
                                    @endforeach

                                </div>
                                <!-- carousel arrows -->
                                <div class="slick-arrows-bot">
                                    <button type="button" data-role="none" class="carousel-botNav-prev slick-custom-buttons" aria-label="Previous"><i class="icon-arrow-left"></i></button>
                                    <button type="button" data-role="none" class="carousel-botNav-next slick-custom-buttons" aria-label="Next"><i class="icon-arrow-right"></i></button>
                                </div>
                            </div>
                        </div>

                        <!-- widget advertisement -->
                        <div class="widget no-container rounded text-md-center">
                            <span class="ads-title">- Sponsored Ad -</span>
                            <a href="#" class="widget-ads">
                                <img src="images/ads/ad-360.png" alt="Advertisement" />
                            </a>
                        </div>

                        <!-- widget tags -->
                        <div class="widget rounded">
                            <div class="widget-header text-center">
                                <h3 class="widget-title">Tag Clouds</h3>
                                <img src="{{ asset('Themes/theme1/images/wave.svg') }}" class="wave" alt="wave" />
                            </div>
                            <div class="widget-content">
                                <a href="#" class="tag">#Trending</a>
                                <a href="#" class="tag">#Video</a>
                                <a href="#" class="tag">#Featured</a>
                                <a href="#" class="tag">#Gallery</a>
                                <a href="#" class="tag">#Celebrities</a>
                            </div>
                        </div>

                    </div>


                </div>

            </div>

        </div>
    </section>
@endsection