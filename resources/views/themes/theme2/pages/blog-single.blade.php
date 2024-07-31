@extends('themes.theme2.layout.app')

@section('breadcrumb')
    <section class="inner-page-banner bg-common">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumbs-area">
                        <h1>Blog</h1>
                        <ul>
                            <li>
                                <a href="{{ route('home') }}">Home</a>
                            </li>
                            <li>Blog</li>
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
            <div class="single-blog-box-layout3">
                <div class="blog-banner">
                    <img src="{{ url('/') }}/{{ $blog_view->image }}" alt="blog">
                </div>
                <div class="single-blog-content">
                    <div class="blog-entry-content">
                        <ul class="entry-meta meta-color-dark">
                            <li><i class="fas fa-tag"></i>{{ $blog_view->category->name }}</li>
                            <li><i class="fas fa-calendar-alt"></i>{{ $blog_view->updated_at->format('d/m/Y') }}</li>
                            <li><i class="fas fa-user"></i>BY <a href="#">{{ $blog_view->author }}</a></li>
                            {{-- <li><i class="far fa-clock"></i>5 Mins Read</li> --}}
                        </ul>
                        <h2 class="item-title">{{ $blog_view->title }}</h2>
                        <ul class="item-social">
                            <li><a href="#" class="facebook"><i class="fab fa-facebook-f"></i>SHARE</a></li>
                            <li><a href="#" class="twitter"><i class="fab fa-twitter"></i>SHARE</a></li>
                            <li><a href="#" class="g-plus"><i class="fab fa-google-plus-g"></i>SHARE</a></li>
                            <li><a href="#" class="pinterst"><i class="fab fa-pinterest"></i>PIN IT</a></li>
                            <li><a href="#" class="load-more"><i class="fas fa-plus"></i>MORE</a></li>
                        </ul>
                        <ul class="response-area">
                            <li><a href="#"><i class="far fa-comment"></i>02</a></li>
                            <li><a href="#"><i class="far fa-eye"></i>105</a></li>
                            <li><a href="#"><i class="far fa-heart"></i>225</a></li>
                            <li><a href="#"><i class="fas fa-share"></i>302</a></li>
                        </ul>
                    </div>
                    <div class="blog-details">
                        <p>{!! $blog_view->content !!}</p>
                        {{-- <div class="single-slider">
                            <div class="rc-carousel nav-control-layout9" data-loop="true" data-items="30"
                                data-margin="20" data-autoplay="false" data-autoplay-timeout="5000"
                                data-smart-speed="700" data-dots="false" data-nav="true" data-nav-speed="false"
                                data-r-x-small="1" data-r-x-small-nav="true" data-r-x-small-dots="false"
                                data-r-x-medium="1" data-r-x-medium-nav="true" data-r-x-medium-dots="false"
                                data-r-small="1" data-r-small-nav="true" data-r-small-dots="false"
                                data-r-medium="1" data-r-medium-nav="true" data-r-medium-dots="false"
                                data-r-large="1" data-r-large-nav="true" data-r-large-dots="false"
                                data-r-extra-large="1" data-r-extra-large-nav="true"
                                data-r-extra-large-dots="false">
                                <div class="single-slider-box">
                                    <div class="item-img">
                                        <img src="img/blog/blog222.html" alt="slider">
                                    </div>
                                </div>
                                <div class="single-slider-box">
                                    <div class="item-img">
                                        <img src="img/blog/blog211.html" alt="slider">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="more-info">
                            <h2 class="item-title">Discover Travel Innovation 2019</h2>
                            <p>Aeuidem impedit officiis quo te. Illud partem sententiae mel eu,
                                euripidis urbanitas et sit. Mediocrem reprimique an vim, veniam tibique
                                omittantur duo ut, agam graeci in vim. Quot appetere patrioque te mea,
                                animal aliquip te pri. Ad vis animal ceteros percipitur, eos tollit civibus
                                percipitur.</p>
                            <ol class="info-list">
                                <li>The feedback provided by a system is not very informative. It’s not
                                    clear how a system
                                    request or what exactly happens with the information.</li>
                                <li>The feedback provided by a system is not very informative. It’s not
                                    clear how a system
                                    request or what exactly happens with the information.</li>
                                <li>The feedback provided by a system is not very informative. It’s not
                                    clear how a system
                                    request or what exactly happens with the information.</li>
                            </ol>
                            <p>Equidem impedit officiis quo te. Illud partem sententiae mel eu, euripidis
                                urbanitas
                                et sit. Mediocrem reprimique an vim, veniam tibique omittantur duo ut, agam
                                graeci
                                in vim. Quot appetere patrioque te mea, animal aliquip te pri. Ad vis
                                animal ceteros
                                percipitur, eos tollit civibus percipitur no. Posse definiebas dissentiunt
                                mel ea,
                                nam ferri utroque invenire an. Ius te iuvaret offendit pertinax, his verear
                                deseruisse.</p>
                        </div> --}}
                    </div>
                    <div class="blog-tag">
                        <ul>
                            <li class="item-tag"><i class="fas fa-bookmark"></i>
                                <a href="#">explore,</a>
                                <a href="#">travel,</a>
                                <a href="#">vacation,</a>
                            </li>
                            <li class="item-social">
                                @foreach ($icon as $favicon)
                                    <a href="{{ $favicon->link }}"><i class="{{ $favicon->logo }}"></i></a>
                                @endforeach
                            </li>
                            <li class="item-respons"><i class="fas fa-heart"></i>1,230</li>
                        </ul>
                    </div>
                    <div class="blog-author">
                        <div class="media media-none--xs">
                            <img src="{{ asset('themes/theme2/img/blog/author.jpg')}}" height="100px" width="100px" alt="Author" class="">
                            <div class="media-body">
                                <h4 class="item-title">{{ $blog_view->author }}</h4>
                                <div class="item-subtitle">Author</div>
                                <p>Dorem ipsum dolor sit amet, consectetuer adipiscing
                                    elit,sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</p>
                                <ul class="item-social">
                                    @foreach ($icon as $favicon)
                                        <li><a href="{{ $favicon->link }}"><i class="{{ $favicon->logo }}"></i></a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="related-item">
                        <div class="section-heading heading-dark">
                            <h3 class="item-heading">YOU MAY ALSO LIKE</h3>
                        </div>
                        <div class="rc-carousel dot-control-layout2" data-loop="true" data-items="3"
                            data-margin="30" data-autoplay="false" data-autoplay-timeout="5000"
                            data-smart-speed="700" data-dots="true" data-nav="false" data-nav-speed="false"
                            data-r-x-small="1" data-r-x-small-nav="false" data-r-x-small-dots="true"
                            data-r-x-medium="2" data-r-x-medium-nav="false" data-r-x-medium-dots="true"
                            data-r-small="2" data-r-small-nav="false" data-r-small-dots="true"
                            data-r-medium="3" data-r-medium-nav="false" data-r-medium-dots="true"
                            data-r-large="3" data-r-large-nav="false" data-r-large-dots="true"
                            data-r-extra-large="3" data-r-extra-large-nav="false" data-r-extra-large-dots="true">
                            <div class="blog-box-layout1 text-left">
                                <div class="item-img">
                                    <a href="single-blog.html"><img src="img/blog/blog213.html" alt="blog"></a>
                                </div>
                                <div class="item-content">
                                    <ul class="entry-meta meta-color-dark">
                                        <li><i class="fas fa-tag"></i>Fashion</li>
                                        <li><i class="fas fa-calendar-alt"></i>October 19, 2019</li>
                                    </ul>
                                    <h5 class="item-title"><a href="single-blog.html">How an Island Formsn
                                            River
                                            And Stones</a></h5>
                                </div>
                            </div>
                            <div class="blog-box-layout1 text-left">
                                <div class="item-img">
                                    <a href="single-blog.html"><img src="img/blog/blog214.html" alt="blog"></a>
                                </div>
                                <div class="item-content">
                                    <ul class="entry-meta meta-color-dark">
                                        <li><i class="fas fa-tag"></i>Fashion</li>
                                        <li><i class="fas fa-calendar-alt"></i>October 19, 2019</li>
                                    </ul>
                                    <h5 class="item-title"><a href="single-blog.html">How an Island Formsn
                                            River
                                            And Stones</a></h5>
                                </div>
                            </div>
                            <div class="blog-box-layout1 text-left">
                                <div class="item-img">
                                    <a href="single-blog.html"><img src="img/blog/blog215.html" alt="blog"></a>
                                </div>
                                <div class="item-content">
                                    <ul class="entry-meta meta-color-dark">
                                        <li><i class="fas fa-tag"></i>Fashion</li>
                                        <li><i class="fas fa-calendar-alt"></i>October 19, 2019</li>
                                    </ul>
                                    <h5 class="item-title"><a href="single-blog.html">How an Island Formsn
                                            River
                                            And Stones</a></h5>
                                </div>
                            </div>
                            <div class="blog-box-layout1 text-left">
                                <div class="item-img">
                                    <a href="single-blog.html"><img src="img/blog/blog214.html" alt="blog"></a>
                                </div>
                                <div class="item-content">
                                    <ul class="entry-meta meta-color-dark">
                                        <li><i class="fas fa-tag"></i>Fashion</li>
                                        <li><i class="fas fa-calendar-alt"></i>October 19, 2019</li>
                                    </ul>
                                    <h5 class="item-title"><a href="single-blog.html">How an Island Formsn
                                            River
                                            And Stones</a></h5>
                                </div>
                            </div>
                            <div class="blog-box-layout1 text-left">
                                <div class="item-img">
                                    <a href="single-blog.html"><img src="img/blog/blog213.html" alt="blog"></a>
                                </div>
                                <div class="item-content">
                                    <ul class="entry-meta meta-color-dark">
                                        <li><i class="fas fa-tag"></i>Fashion</li>
                                        <li><i class="fas fa-calendar-alt"></i>October 19, 2019</li>
                                    </ul>
                                    <h5 class="item-title"><a href="single-blog.html">How an Island Formsn
                                            River
                                            And Stones</a></h5>
                                </div>
                            </div>
                            <div class="blog-box-layout1 text-left">
                                <div class="item-img">
                                    <a href="single-blog.html"><img src="img/blog/blog215.html" alt="blog"></a>
                                </div>
                                <div class="item-content">
                                    <ul class="entry-meta meta-color-dark">
                                        <li><i class="fas fa-tag"></i>Fashion</li>
                                        <li><i class="fas fa-calendar-alt"></i>October 19, 2019</li>
                                    </ul>
                                    <h5 class="item-title"><a href="single-blog.html">How an Island Formsn
                                            River
                                            And Stones</a></h5>
                                </div>
                            </div>
                            <div class="blog-box-layout1 text-left">
                                <div class="item-img">
                                    <a href="single-blog.html"><img src="img/blog/blog214.html" alt="blog"></a>
                                </div>
                                <div class="item-content">
                                    <ul class="entry-meta meta-color-dark">
                                        <li><i class="fas fa-tag"></i>Fashion</li>
                                        <li><i class="fas fa-calendar-alt"></i>October 19, 2019</li>
                                    </ul>
                                    <h5 class="item-title"><a href="single-blog.html">How an Island Formsn
                                            River
                                            And Stones</a></h5>
                                </div>
                            </div>
                            <div class="blog-box-layout1 text-left">
                                <div class="item-img">
                                    <a href="single-blog.html"><img src="img/blog/blog215.html" alt="blog"></a>
                                </div>
                                <div class="item-content">
                                    <ul class="entry-meta meta-color-dark">
                                        <li><i class="fas fa-tag"></i>Fashion</li>
                                        <li><i class="fas fa-calendar-alt"></i>October 19, 2019</li>
                                    </ul>
                                    <h5 class="item-title"><a href="single-blog.html">How an Island Formsn
                                            River
                                            And Stones</a></h5>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <div class="blog-comment">
                        <div class="section-heading-4 heading-dark">
                            <h3 class="item-heading">02 COMMENTS</h3>
                        </div>
                        <div class="media media-none--xs">
                            <img src="{{ asset('themes/theme2/img/blog/author.jpg')}}" height="100px" width="100px" alt="Author" class="">
                            <div class="media-body">
                                <h4 class="item-title">Jack Sparrow</h4>
                                <div class="item-subtitle">2 Mins Ago</div>
                                <p>Bmmy text of the printing and typesetting industryorem Ipsum
                                    has been the industry's standard dummy text ever since the</p>
                                <a href="#" class="item-btn">Reply</a>
                            </div>
                        </div>
                        <div class="media media-none--xs">
                            <img src="{{ asset('themes/theme2/img/blog/author.jpg')}}" height="100px" width="100px" alt="Author" class="">
                            <div class="media-body">
                                <h4 class="item-title">Dakcon Nitiya</h4>
                                <div class="item-subtitle">2 Mins Ago</div>
                                <p>Bmmy text of the printing and typesetting industryorem Ipsum has
                                    been the industry's standard dummy text ever since the</p>
                                <a href="#" class="item-btn">Reply</a>
                            </div>
                        </div>
                    </div>
                    <div class="blog-form">
                        <div class="section-heading-4 heading-dark">
                            <h3 class="item-heading">WRITE A COMMENT</h3>
                        </div>
                        <form class="contact-form-box">
                            <div class="row gutters-15">
                                <div class="col-md-4 form-group">
                                    <input type="text" placeholder="Name*" class="form-control" name="first_name"
                                        data-error="Name field is required" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="col-md-4 form-group">
                                    <input type="email" placeholder="E-mail*" class="form-control" name="email"
                                        data-error="E-mail field is required" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="col-md-4 form-group">
                                    <input type="text" placeholder="Website*" class="form-control" name="website"
                                        data-error="website field is required" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="col-12 form-group">
                                    <textarea placeholder="Write your comments ..." class="textarea form-control"
                                        name="message" rows="9" cols="20" data-error="Message field is required"
                                        required></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="col-12 form-group">
                                    <button class="item-btn">POST COMMENT</button>
                                </div>
                            </div>
                            <div class="form-response"></div>
                        </form>
                    </div>
                </div>
            </div>
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
                    <figure class="author-figure"><img src="{{ asset('themes/theme2/img/figure/figure.jpg')}}" alt="about"></figure>
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
                <div class="widget-ad">
                    <a href="#"><img src="{{ asset('themes/theme2/img/figure/figure5.jpg')}}" alt="Ad" class="img-fluid"></a>
                </div>
            </div>

        </div>
    </div>
@endsection
