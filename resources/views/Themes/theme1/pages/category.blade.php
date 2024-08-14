@extends('themes.theme1.layout.app')
@section('content')

    <section class="page-header">
        <div class="container-xl">
            <div class="text-center">
                <h1 class="mt-0 mb-2">Category</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center mb-0">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item" aria-current="page">Category</li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $categoryView->name }}</li>
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
                        @if($categoryView->blogs)
                        @foreach ($categoryBlog as $blog)
                            <div class="col-sm-6">
                                <!-- post -->
                                <div class="post post-grid rounded bordered">
                                    <div class="thumb top-rounded">
                                        <a href="#" class="category-badge position-absolute">{{ $blog->category->name }}</a>
                                        <span class="post-format">
                                            <i class="icon-picture"></i>
                                        </span>
                                        <a href="{{ route('blog_slug', $blog->slug) }}">
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
                                        <h5 class="post-title mb-3 mt-3"><a href="{{ route('blog_slug', $blog->slug) }}">{{ $blog->title }}</a></h5>
                                        <p class="excerpt mb-0">{{ $blog->seo_description }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        @endif
                    </div>

                    {{-- <nav>
                        <ul class="pagination justify-content-center">
                            <li class="page-item active" aria-current="page">
                                <span class="page-link">1</span>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                        </ul>
                    </nav> --}}

                    <div class="spacer" data-height="50" style="height: 30px;"></div>

                    <div class="row">
                        {{ $categoryBlog->links('pagination::bootstrap-4') }}
                    </div>

                </div>

                <div class="col-lg-4">

                    <!-- sidebar -->
                    <div class="sidebar">
                        <div class="widget rounded">
                            <div class="widget-about data-bg-image text-center">
                                <img src="{{ asset($configs->logo) }}" alt="logo" class="mb-4" />
                                <p class="mb-4">Hello, We’re content writer who is fascinated by content fashion, celebrity and lifestyle. We helps clients bring the right content to the right people.</p>
                                <ul class="social-icons list-unstyled list-inline mb-0">
                                    @foreach ($icon as $favicon)
                                        <li class="list-inline-item"><a href="{{ $favicon->link }}"><i class="{{ $favicon->logo }}"></i></a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                        <!-- widget popular posts -->
                        <div class="widget rounded">
                            <div class="widget-header text-center">
                                <h3 class="widget-title">Popular Posts</h3>
                                <img src="{{ asset('themes/theme1/images/wave.svg') }}" class="wave" alt="wave" />
                            </div>
                            <div class="widget-content">
                                <!-- post -->
                                @foreach ($recent as $sl => $blog)
                                    <div class="post post-list-sm circle">
                                        <div class="thumb circle">
                                            <span class="number">{{ $sl+1 }}</span>
                                            <a href="{{ route('blog_slug', $blog->slug) }}">
                                                <div class="inner list-inner-circle">
                                                    <img src="{{ url('/') }}/{{ $blog->image }}" alt="post-title" />
                                                </div>
                                            </a>
                                        </div>
                                        <div class="details clearfix">
                                            <h6 class="post-title my-0"><a href="{{ route('blog_slug', $blog->slug) }}">{{ $blog->title }}</a></h6>
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
                                <img src="{{ asset('themes/theme1/images/wave.svg') }}" class="wave" alt="wave" />
                            </div>
                            <div class="widget-content">
                                <ul class="list">
                                    @foreach ($category as $category)
                                        <li><a href="{{ route('categories', $category->slug) }}">{{ $category->name }}</a><span>{{ $category->blogs ? $category->blogs->count(): '0' }}</span></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>


                        <!-- widget advertisement -->
                        {{-- <div class="widget no-container rounded text-md-center">
                            <span class="ads-title">- Sponsored Ad -</span>
                            <a href="#" class="widget-ads">
                                <img src="{{ asset('themes/theme1/images/ads/ad-360.png') }}" alt="Advertisement" />
                            </a>
                        </div> --}}
                    </div>

                </div>


            </div>

        </div>
    </section>
@endsection
