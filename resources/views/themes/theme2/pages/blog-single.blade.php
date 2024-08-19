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
                            <li>{{ $blog_view->category->name }}</li>
                            |
                            <li>{{ $blog_view->updated_at->format('d/m/Y') }}</li>
                            |
                            <li>BY <a href="#">{{ $blog_view->author }}</a></li>
                        </ul>
                        <h2 class="item-title">{{ $blog_view->title }}</h2>
                        <p>Share on:</p>
                        {!! $shareComponent !!}
                        <br>
                        <ul class="response-area">

                            <li>
                                <a href="#">
                                    <svg width="15px" height="15px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15.0007 12C15.0007 13.6569 13.6576 15 12.0007 15C10.3439 15 9.00073 13.6569 9.00073 12C9.00073 10.3431 10.3439 9 12.0007 9C13.6576 9 15.0007 10.3431 15.0007 12Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M12.0012 5C7.52354 5 3.73326 7.94288 2.45898 12C3.73324 16.0571 7.52354 19 12.0012 19C16.4788 19 20.2691 16.0571 21.5434 12C20.2691 7.94291 16.4788 5 12.0012 5Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    {{ $blog_view->view_count ?? '0' }}
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <svg width="15px" height="15px" viewBox="0 -0.5 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.0001 8.517C8.58589 8.517 8.2501 8.85279 8.2501 9.267C8.2501 9.68121 8.58589 10.017 9.0001 10.017V8.517ZM16.0001 10.017C16.4143 10.017 16.7501 9.68121 16.7501 9.267C16.7501 8.85279 16.4143 8.517 16.0001 8.517V10.017ZM9.8751 11.076C9.46089 11.076 9.1251 11.4118 9.1251 11.826C9.1251 12.2402 9.46089 12.576 9.8751 12.576V11.076ZM15.1251 12.576C15.5393 12.576 15.8751 12.2402 15.8751 11.826C15.8751 11.4118 15.5393 11.076 15.1251 11.076V12.576ZM9.1631 5V4.24998L9.15763 4.25002L9.1631 5ZM15.8381 5L15.8438 4.25H15.8381V5ZM19.5001 8.717L18.7501 8.71149V8.717H19.5001ZM19.5001 13.23H18.7501L18.7501 13.2355L19.5001 13.23ZM18.4384 15.8472L17.9042 15.3207L17.9042 15.3207L18.4384 15.8472ZM15.8371 16.947V17.697L15.8426 17.697L15.8371 16.947ZM9.1631 16.947V16.197C9.03469 16.197 8.90843 16.23 8.79641 16.2928L9.1631 16.947ZM5.5001 19H4.7501C4.7501 19.2662 4.89125 19.5125 5.12097 19.6471C5.35068 19.7817 5.63454 19.7844 5.86679 19.6542L5.5001 19ZM5.5001 8.717H6.25012L6.25008 8.71149L5.5001 8.717ZM6.56175 6.09984L6.02756 5.5734H6.02756L6.56175 6.09984ZM9.0001 10.017H16.0001V8.517H9.0001V10.017ZM9.8751 12.576H15.1251V11.076H9.8751V12.576ZM9.1631 5.75H15.8381V4.25H9.1631V5.75ZM15.8324 5.74998C17.4559 5.76225 18.762 7.08806 18.7501 8.71149L20.2501 8.72251C20.2681 6.2708 18.2955 4.26856 15.8438 4.25002L15.8324 5.74998ZM18.7501 8.717V13.23H20.2501V8.717H18.7501ZM18.7501 13.2355C18.7558 14.0153 18.4516 14.7653 17.9042 15.3207L18.9726 16.3736C19.7992 15.5348 20.2587 14.4021 20.2501 13.2245L18.7501 13.2355ZM17.9042 15.3207C17.3569 15.8761 16.6114 16.1913 15.8316 16.197L15.8426 17.697C17.0201 17.6884 18.1461 17.2124 18.9726 16.3736L17.9042 15.3207ZM15.8371 16.197H9.1631V17.697H15.8371V16.197ZM8.79641 16.2928L5.13341 18.3458L5.86679 19.6542L9.52979 17.6012L8.79641 16.2928ZM6.2501 19V8.717H4.7501V19H6.2501ZM6.25008 8.71149C6.24435 7.93175 6.54862 7.18167 7.09595 6.62627L6.02756 5.5734C5.20098 6.41216 4.74147 7.54494 4.75012 8.72251L6.25008 8.71149ZM7.09595 6.62627C7.64328 6.07088 8.38882 5.75566 9.16857 5.74998L9.15763 4.25002C7.98006 4.2586 6.85413 4.73464 6.02756 5.5734L7.09595 6.62627Z" fill="#000000"/>
                                        </svg>
                                        {{ $commentsCount }}

                                </a>
                            </li>
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
                            <li class="item-tag">
                                <a href="#">explore,</a>
                                <a href="#">travel,</a>
                                <a href="#">vacation,</a>
                            </li>
                            <li class="item-social">
                                @foreach ($icon as $favicon)
                                    <a href="{{ $favicon->link }}"><i class="{{ $favicon->logo }}"></i></a>
                                @endforeach
                            </li>
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
                            <h3 class="item-heading">COMMENTS</h3>
                        </div>
                            @forelse ($comment as $user_comment)
                                <div class="media media-none--xs">
                                    <img src="{{ asset('themes/theme2/img/blog/author.jpg')}}" height="100px" width="100px" alt="Author" class="">
                                    <div class="media-body">
                                        <h4 class="item-title">{{ $user_comment->name }}</h4>
                                        <div class="item-subtitle">{{ $user_comment->created_at }}</div>
                                        <p>{{ $user_comment->message }}</p>
                                        {{-- <a href="#" class="item-btn">Reply</a> --}}
                                    </div>
                                </div>
                            @empty
                                <p>No comments yet</p>
                            @endforelse
                    </div>

                    <div class="blog-form">
                        <div class="section-heading-4 heading-dark">
                            <h3 class="item-heading">WRITE A COMMENT</h3>
                        </div>
                        <form action="{{ route('user.comment') }}" method="POST" class="contact-form-box">
                            @csrf
                            <div class="row gutters-15">
                                <div class="col-md-6 form-group">
                                    <input type="text" placeholder="Name*" class="form-control" name="name"
                                        data-error="Name field is required" required >
                                    <input type="hidden" value="{{ $blog_view->id }}" name="blog_id">
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="col-md-6 form-group">
                                    <input type="email" placeholder="E-mail*" class="form-control" name="email"
                                        data-error="E-mail field is required" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="col-12 form-group">
                                    <textarea placeholder="Write your comments ..." class="textarea form-control"
                                        name="message" rows="9" cols="20" data-error="Message field is required"
                                        required></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="col-12 form-group">
                                    <button type="submit" class="item-btn">POST COMMENT</button>
                                </div>
                            </div>
                            <br><br>
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
                <div class="widget-newsletter-subscribe-dark-2">
                    <h3 class="item-title">GET LATEST UPDATES</h3>
                    <form action="{{ route('newsletter.save') }}" method="POST" class="newsletter-subscribe-form">
                        @csrf
                        <div class="form-group">
                            <input type="text" placeholder="Type your e-mail" class="form-control" name="email"
                                data-error="E-mail field is required" required>
                            <div class="help-block with-errors"></div>
                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group mb-0">
                            <button type="submit" class="item-btn">SIGNUP!</button>
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
