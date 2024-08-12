@extends('themes.theme2.layout.app')

@section('content')
<div class="row gutters-40">
    <div class="col-lg-8">
        <div class="slider-wrap-layout4">
            <div class="rc-carousel nav-control-layout4" data-loop="true" data-items="30"
                data-margin="30" data-autoplay="true" data-autoplay-timeout="5000"
                data-smart-speed="2000" data-dots="false" data-nav="true" data-nav-speed="false"
                data-r-x-small="1" data-r-x-small-nav="true" data-r-x-small-dots="false"
                data-r-x-medium="1" data-r-x-medium-nav="true" data-r-x-medium-dots="false"
                data-r-small="1" data-r-small-nav="true" data-r-small-dots="false" data-r-medium="1"
                data-r-medium-nav="true" data-r-medium-dots="false" data-r-large="1"
                data-r-large-nav="true" data-r-large-dots="false" data-r-extra-large="1"
                data-r-extra-large-nav="true" data-r-extra-large-dots="false">
                <div class="owl-nav"></div>
                @foreach ($recent as $blog_recent)
                    <div class="slider-box-layout4">
                        <div class="item-img">
                            <img src="{{ url('/') }}/{{ $blog_recent->image }}" alt="slider">
                        </div>
                        <div class="item-content">
                            <ul class="entry-meta meta-color-dark">
                                <li>{{ $blog_recent->category->name ?? Unknown}}</li>
                                |
                                <li><i class="ti-calender"></i>{{ $blog_recent->updated_at->format('d/m/Y') }}</li>
                                <li> BY <a href="#">{{ $blog_recent->author }}</a></li>
                            </ul>
                            <h3 class="item-title"><a href="{{ route('theme2.blog.slug', $blog_recent->slug) }}">{{ $blog_recent->title }}</a></h3>
                            <p>{{ $blog_recent->seo_description }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="row">
            @foreach ($blog_items as $blog)
                <div class="col-sm-6">
                    <div class="blog-box-layout8">
                        <div class="item-img">
                            <a href="{{ route('theme2.blog.slug', $blog->slug) }}"><img src="{{ url('/') }}/{{ $blog->image }}" alt="blog"></a>
                        </div>
                        <div class="item-content">
                            <ul class="entry-meta meta-color-dark">
                                <li>{{ $blog->category->name ?? Unknown }}</li>
                                |
                                <li><i class="ti-calender"></i>{{ $blog->updated_at->format('d/m/Y') }}</li>
                            </ul>
                            <h3 class="item-title"><a href="{{ route('theme2.blog.slug', $blog->slug) }}">{{ $blog->title }}</a></h3>
                            <p>{{ $blog->seo_description }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="pagination-layout1">
            <ul>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
            </ul>
        </div>

    </div>
    <div class="col-lg-4 sidebar-widget-area sidebar-break-md">
        <div class="widget">
            <div class="widget-about-2">
                <figure class="author-figure"><img src="{{ asset('themes/theme2/img/figure/figure4.jpg')}}" alt="about"></figure>
                <figure class="author-signature"><img src="{{ asset('themes/theme2/img/figure/signature.png')}}" alt="about"></figure>
                <p>Fusce mauris auctor ollicituderty area
                    rauctor pibus doloe dumaet year
                    textery printing and type.</p>
            </div>
        </div>
        <div class="widget">
            <div class="section-heading heading-dark">
                <h3 class="item-heading">SUBSCRIBE &amp; FOLLOW</h3>
            </div>
            <div class="widget-follow-us-3">
                <ul>
                    @foreach ($icon as $favicon)
                        <li class="single-item"><a href="{{ $favicon->link }}"><i class="{{ $favicon->logo }}"></i><span>259k</span>LIKE
                        ME</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="widget">
            <div class="section-heading heading-dark">
                <h3 class="item-heading">LATEST POSTS</h3>
            </div>
            <div class="widget-latest">
                <ul class="block-list">
                    @foreach ($recent as $blog_recent)
                        <li class="single-item">
                            <div class="item-img">
                                <a href="{{ route('theme2.blog.slug', $blog_recent->slug) }}"><img src="{{ url('/') }}/{{ $blog_recent->image }}" alt="Post" width="100px" height="100px"></a>
                            </div>
                            <div class="item-content">
                                <ul class="entry-meta meta-color-dark">
                                    <li>{{ $blog_recent->category->name ?? Unknown }}</li>
                                    |
                                    <li><i class="ti-calender"></i>{{ $blog_recent->updated_at->format('d/m/Y') }}</li>
                                </ul>
                                <h4 class="item-title"><a href="{{ route('theme2.blog.slug', $blog_recent->slug) }}">{{ $blog_recent->title }}</a></h4>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="widget">
            <div class="widget-newsletter-subscribe-dark-2">
                <h3 class="item-title">SUBSCRIBE AND NEVER MISS A RECIPE AGAIN</h3>
                <form class="newsletter-subscribe-form">
                    <div class="form-group">
                        <input type="text" placeholder="Type your e-mail" class="form-control" name="email"
                            data-error="E-mail field is required" required>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group mb-0">
                        <button type="submit" class="item-btn">SIGNUP!</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
