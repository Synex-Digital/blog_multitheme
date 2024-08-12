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

            <div class="row gutters-40" id="no-equal-gallery">
                @foreach ($blog_items as $blog)
                    <div class="col-sm-6 no-equal-item">
                        <div class="blog-box-layout3">
                            <div class="item-img">
                                <a href="{{ route('theme2.blog.slug', $blog->slug) }}"><img src="{{ url('/') }}/{{ $blog->image }}" alt="blog"></a>
                            </div>
                            <div class="item-content">
                                <ul class="entry-meta meta-color-dark">
                                    <li>{{ $blog->category->name }}</li>
                                    |
                                    <li>{{ $blog->updated_at->format('d/m/Y') }}</li>
                                    |
                                    <li>{{ $blog->author }}</li>
                                </ul>
                                <h3 class="item-title"><a href="{{ route('theme2.blog.slug', $blog->slug) }}">{{ $blog->title }}</a></h3>
                                <p>{{ $blog->seo_description }}</p>
                                <div class="action-area">
                                    <a href="{{ route('theme2.blog.slug', $blog->slug) }}" class="item-btn">READ MORE
                                        <svg fill="#000000" height="15px" width="15px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        viewBox="0 0 490.4 490.4" xml:space="preserve">
                                        <g>
                                            <g>
                                                <path d="M245.2,490.4c135.2,0,245.2-110,245.2-245.2S380.4,0,245.2,0S0,110,0,245.2S110,490.4,245.2,490.4z M245.2,24.5
                                                    c121.7,0,220.7,99,220.7,220.7s-99,220.7-220.7,220.7s-220.7-99-220.7-220.7S123.5,24.5,245.2,24.5z"/>
                                                <path d="M138.7,257.5h183.4l-48,48c-4.8,4.8-4.8,12.5,0,17.3c2.4,2.4,5.5,3.6,8.7,3.6s6.3-1.2,8.7-3.6l68.9-68.9
                                                    c4.8-4.8,4.8-12.5,0-17.3l-68.9-68.9c-4.8-4.8-12.5-4.8-17.3,0s-4.8,12.5,0,17.3l48,48H138.7c-6.8,0-12.3,5.5-12.3,12.3
                                                    C126.4,252.1,131.9,257.5,138.7,257.5z"/>
                                            </g>
                                        </g>
                                        </svg>
                                    </a>
                                    <ul class="response-area">
                                        <li>
                                            <a href="#">
                                                <svg width="15px" height="15px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M15.0007 12C15.0007 13.6569 13.6576 15 12.0007 15C10.3439 15 9.00073 13.6569 9.00073 12C9.00073 10.3431 10.3439 9 12.0007 9C13.6576 9 15.0007 10.3431 15.0007 12Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M12.0012 5C7.52354 5 3.73326 7.94288 2.45898 12C3.73324 16.0571 7.52354 19 12.0012 19C16.4788 19 20.2691 16.0571 21.5434 12C20.2691 7.94291 16.4788 5 12.0012 5Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                                12
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <svg width="15px" height="15px" viewBox="0 -0.5 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M9.0001 8.517C8.58589 8.517 8.2501 8.85279 8.2501 9.267C8.2501 9.68121 8.58589 10.017 9.0001 10.017V8.517ZM16.0001 10.017C16.4143 10.017 16.7501 9.68121 16.7501 9.267C16.7501 8.85279 16.4143 8.517 16.0001 8.517V10.017ZM9.8751 11.076C9.46089 11.076 9.1251 11.4118 9.1251 11.826C9.1251 12.2402 9.46089 12.576 9.8751 12.576V11.076ZM15.1251 12.576C15.5393 12.576 15.8751 12.2402 15.8751 11.826C15.8751 11.4118 15.5393 11.076 15.1251 11.076V12.576ZM9.1631 5V4.24998L9.15763 4.25002L9.1631 5ZM15.8381 5L15.8438 4.25H15.8381V5ZM19.5001 8.717L18.7501 8.71149V8.717H19.5001ZM19.5001 13.23H18.7501L18.7501 13.2355L19.5001 13.23ZM18.4384 15.8472L17.9042 15.3207L17.9042 15.3207L18.4384 15.8472ZM15.8371 16.947V17.697L15.8426 17.697L15.8371 16.947ZM9.1631 16.947V16.197C9.03469 16.197 8.90843 16.23 8.79641 16.2928L9.1631 16.947ZM5.5001 19H4.7501C4.7501 19.2662 4.89125 19.5125 5.12097 19.6471C5.35068 19.7817 5.63454 19.7844 5.86679 19.6542L5.5001 19ZM5.5001 8.717H6.25012L6.25008 8.71149L5.5001 8.717ZM6.56175 6.09984L6.02756 5.5734H6.02756L6.56175 6.09984ZM9.0001 10.017H16.0001V8.517H9.0001V10.017ZM9.8751 12.576H15.1251V11.076H9.8751V12.576ZM9.1631 5.75H15.8381V4.25H9.1631V5.75ZM15.8324 5.74998C17.4559 5.76225 18.762 7.08806 18.7501 8.71149L20.2501 8.72251C20.2681 6.2708 18.2955 4.26856 15.8438 4.25002L15.8324 5.74998ZM18.7501 8.717V13.23H20.2501V8.717H18.7501ZM18.7501 13.2355C18.7558 14.0153 18.4516 14.7653 17.9042 15.3207L18.9726 16.3736C19.7992 15.5348 20.2587 14.4021 20.2501 13.2245L18.7501 13.2355ZM17.9042 15.3207C17.3569 15.8761 16.6114 16.1913 15.8316 16.197L15.8426 17.697C17.0201 17.6884 18.1461 17.2124 18.9726 16.3736L17.9042 15.3207ZM15.8371 16.197H9.1631V17.697H15.8371V16.197ZM8.79641 16.2928L5.13341 18.3458L5.86679 19.6542L9.52979 17.6012L8.79641 16.2928ZM6.2501 19V8.717H4.7501V19H6.2501ZM6.25008 8.71149C6.24435 7.93175 6.54862 7.18167 7.09595 6.62627L6.02756 5.5734C5.20098 6.41216 4.74147 7.54494 4.75012 8.72251L6.25008 8.71149ZM7.09595 6.62627C7.64328 6.07088 8.38882 5.75566 9.16857 5.74998L9.15763 4.25002C7.98006 4.2586 6.85413 4.73464 6.02756 5.5734L7.09595 6.62627Z" fill="#000000"/>
                                                    </svg>
                                                02
                                            </a>
                                        </li>
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
                <div class="section-heading heading-dark">
                    <h3 class="item-heading">POPULAR POSTS</h3>
                </div>
                <div class="widget-popular">
                    @foreach ($recent as $sl => $blog)
                        <div class="post-box">
                            <div class="item-img">
                                <a href="{{ route('theme2.blog.slug', $blog->slug) }}"><img src="{{ url('/') }}/{{ $blog->image }}" alt="blog" width="250px" height="250px"></a>
                            </div>
                            <div class="item-content">
                                <ul class="entry-meta meta-color-dark">
                                    <li>{{ $blog->category->name }}</li>
                                    |
                                    <li>{{ $blog->updated_at->format('d/m/Y') }}</li>
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

        </div>
    </div>
@endsection
