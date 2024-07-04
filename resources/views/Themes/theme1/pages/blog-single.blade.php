@extends('Themes.theme1.layout.app')
@section('content')

    <section class="page-header">
        <div class="container-xl">
            <div class="text-center">
                <h1 class="mt-0 mb-2">Blog-Single Page</h1>
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
            <div class="col-lg-8">
                <!-- post single -->
                <div class="post post-single">
                    @foreach ($blog as $blogs )

                    <!-- post header -->
                        <div class="post-header">
                            <h1 class="title mt-0 mb-3">{{ $blogs->title }}</h1>
                            <ul class="meta list-inline mb-0">
                                <li class="list-inline-item"><a href="#">{{ $blogs->author }}</a></li>
                                <li class="list-inline-item"><a href="#">Trending</a></li>
                                <li class="list-inline-item">{{ $blogs->updated_at->format('d/m/Y') }}</li>
                            </ul>
                        </div>
                        <!-- featured image -->
                        <div class="featured-image">
                            <img src="{{ url('/') }}/{{ $blogs->image }}" alt="post-title" />
                        </div>
                        <!-- post content -->
                        <div class="post-content clearfix">
                            <p>{!! $blogs->content !!}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
