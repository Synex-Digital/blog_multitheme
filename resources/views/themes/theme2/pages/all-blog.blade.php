@extends('themes.theme2.layout.app')

@section('breadcrumb')
    <section class="inner-page-banner bg-common">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumbs-area">
                        <h1>All blogs</h1>
                        <ul>
                            <li>
                                <a href="{{ route('home') }}">Home</a>
                            </li>
                            <li>blogs</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('content')
    <div class="row gutters-50">
        <div class="col-lg-8">
            <div class="blog-box-layout3">
                <div class="item-img">
                    <img src="img/blog/blog159.html" alt="blog">
                    {{-- <a class="play-btn popup-youtube" href="http://www.youtube.com/watch?v=1iIZeIy7TqM">
                        <i class="flaticon-play-arrow"></i>
                    </a> --}}
                </div>
                <div class="item-content">
                    <ul class="entry-meta meta-color-dark">
                        <li><i class="fas fa-tag"></i>Racing</li>
                        <li><i class="fas fa-calendar-alt"></i>Jan 19, 2019</li>
                        <li><i class="fas fa-user"></i>BY <a href="#">Mark Willy</a></li>
                        <li><i class="far fa-clock"></i>5 Mins Read</li>
                    </ul>
                    <h2 class="item-title"><a href="single-blog.html">Car racing design things to look out for in June 2019</a></h2>
                    <p>Aimply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since thetioned it, you probably perfectly understand
                    why it is important for the payment process to go as smoothly as possi to go through a million
                    or email campaigns each. </p>
                    <div class="action-area">
                        <a href="single-blog.html" class="item-btn">READ MORE<i class="fas fa-arrow-right"></i></a>
                        <ul class="response-area">
                            <li><a href="#"><i class="far fa-heart"></i>12</a></li>
                            <li><a href="#"><i class="far fa-comment"></i>02</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row gutters-40" id="no-equal-gallery">
                @foreach ($blog_items as $blog)
                    <div class="col-sm-6 no-equal-item">
                        <div class="blog-box-layout3">
                            <div class="item-img">
                                <a href="{{ route('theme2.blog.slug', $blog->slug) }}"><img src="{{ url('/') }}/{{ $blog->image }}" alt="blog"></a>
                            </div>
                            <div class="item-content">
                                <ul class="entry-meta meta-color-dark">
                                    <li><i class="fas fa-tag"></i>{{ $blog->category->name }}</li>
                                    <li><i class="fas fa-calendar-alt"></i>{{ $blog->updated_at->format('d/m/Y') }}</li>
                                    <li><i class="far fa-clock"></i>{{ $blog->author }}</li>
                                </ul>
                                <h3 class="item-title"><a href="{{ route('theme2.blog.slug', $blog->slug) }}">{{ $blog->title }}</a></h3>
                                <p>{{ $blog->seo_description }}</p>
                                <div class="action-area">
                                    <a href="{{ route('theme2.blog.slug', $blog->slug) }}" class="item-btn">READ MORE<i class="fas fa-arrow-right"></i></a>
                                    <ul class="response-area">
                                        <li><a href="#"><i class="far fa-heart"></i>12</a></li>
                                        <li><a href="#"><i class="far fa-comment"></i>02</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            {{-- <div class="pagination-layout1">
                <ul>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                </ul>
            </div> --}}
        </div>
        <div class="col-lg-4 sidebar-widget-area sidebar-break-md">
            <div class="widget">
                <div class="section-heading heading-dark">
                    <h3 class="item-heading">SUBSCRIBE &amp; FOLLOW</h3>
                </div>
                <div class="widget-follow-us">
                    <ul>
                        @foreach ($icon as $favicon)
                            <li class="single-item"><a href="{{ $favicon->link }}"><i class="{{ $favicon->logo }}"></i></a></li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="widget">
                <div class="section-heading heading-dark">
                    <h3 class="item-heading">ABOUT ME</h3>
                </div>
                <div class="widget-about">
                    <figure class="author-figure"><img src="{{ asset('themes/theme2/img/figure/figure9.jpg')}}" alt="about"></figure>
                    <figure class="author-signature"><img src="{{ asset('themes/theme2/img/figure/signature.png')}}" alt="about"></figure>
                    <p>Fusce mauris auctor ollicituder teary iner hendrerit risusey aeenean rauctor pibus
                        doloer.</p>
                </div>
            </div>
            <div class="widget">
                <div class="widget-newsletter-subscribe-dark">
                    <h3>GET LATEST UPDATES</h3>
                    <p>NEWSLETTER SUBSCRIBE</p>
                    <form class="newsletter-subscribe-form">
                        <div class="form-group">
                            <input type="text" placeholder="your e-mail address" class="form-control" name="email"
                                data-error="E-mail field is required" required>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group mb-none">
                            <button type="submit" class="item-btn">SUBSCRIBE</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="widget">
                <div class="section-heading heading-dark">
                    <h3 class="item-heading">POPULAR POSTS</h3>
                </div>
                <div class="widget-popular">
                    @foreach ($recent as $sl => $blog)
                        <div class="post-box">
                            <div class="item-img">
                                <a href="{{ route('theme2.blog.slug', $blog->slug) }}"><img src="{{ url('/') }}/{{ $blog->image }}" alt="blog"></a>
                            </div>
                            <div class="item-content">
                                <ul class="entry-meta meta-color-dark">
                                    <li><i class="fas fa-tag"></i>{{ $blog->category->name }}</li>
                                    <li><i class="fas fa-calendar-alt"></i>{{ $blog->updated_at->format('d/m/Y') }}</li>
                                </ul>
                                <h3 class="item-title"><a href="single-blog.html">{{ $blog->title }}</a></h3>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            {{-- <div class="widget">
                <div class="widget-ad">
                    <a href="#"><img src="img/figure/figure5.jpg" alt="Ad" class="img-fluid"></a>
                </div>
            </div> --}}
            <div class="widget">
                <div class="section-heading heading-dark">
                    <h3 class="item-heading">CATEGORIES</h3>
                </div>
                <div class="widget-categories">
                    <ul>
                        <li>
                            @foreach ($category as $cat)
                                <li>
                                    <a href="{{ route('theme2.categories', $cat->slug) }}">{{ $cat->name }}
                                        <span>({{ $cat->blogs ? $cat->blogs->count(): '0' }})</span>
                                    </a>
                                </li>
                            @endforeach
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
@endsection
