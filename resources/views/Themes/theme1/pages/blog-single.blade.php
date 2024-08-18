@extends('themes.theme1.layout.app')
@section('content')

    <section class="page-header">
        <div class="container-xl">
            <div class="text-center">
                <h1 class="mt-0 mb-2">Blog Single Page</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center mb-0">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Blog-Single</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>

    <section class="main-content mt-3">
        <div class="row-gy-4">
            <div class="col-lg-12">
                <!-- post single -->
                <div class="post post-single">


                    <div class="post-upper">
                    <!-- post header -->
                        <div class="post-header">
                            <h1 class="title mt-0 mb-3">{{ $blog_view->title }}</h1>
                            <ul class="meta list-inline mb-0">
                                <li class="list-inline-item"><a href="#">{{ $blog_view->author }}</a></li>
                                <li class="list-inline-item"><a href="#">Trending</a></li>
                                <li class="list-inline-item">{{ $blog_view->updated_at->format('d/m/Y') }}</li>
                            </ul>
                        </div>
                        <!-- featured image -->
                        <div class="featured-image">
                            <img src="{{ url('/') }}/{{ $blog_view->image }}" alt="post-title" />
                        </div>
                    </div>
                    
                        <!-- post content -->
                        <div class="post-content clearfix">
                            <p>{!! $blog_view->content !!}</p>
                        </div>
                        <br><br>
                        <div class="share">
                            <div class="row d-flex align-items-center gy-6">
                                <div class="col-md-4">
                                    <h3 class="section-title">Share on:</h3>
                                    <img src="{{ asset('themes/theme1/images/wave.svg') }}" class="wave"
                                    alt="wave" />
                                </div>
                                <div class="col-md-8">
                                    {!! $shareComponent !!}
                                </div>
                            </div>
                        </div>
                        <br>
                </div>
            </div>
            @endsection
        </div>
    </section>
