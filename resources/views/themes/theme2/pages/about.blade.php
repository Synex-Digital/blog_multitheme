@extends('themes.theme2.layout.app')

@section('breadcrumb')
    <section class="inner-page-banner bg-common">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumbs-area">
                        <h1>About</h1>
                        <ul>
                            <li>
                                <a href="{{ route('home') }}">Home</a>
                            </li>
                            <li>About</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('content')
    <section class="about-wrap-layout1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-box-layout2">
                        <div class="item-subtitle">Hello!</div>
                        <h2 class="item-title"><span>I’m</span> Sayem Vai </h2>
                        <p>Worem Ipsum Nam nec tellus a odio tincidunt auctor. Proin
                            gravida nibh vel velit auctor aliquet. Bendum auctor,
                            nisi elit conseq aeuat ipsum, nec sagittis sem nibhety.</p>
                        <p>Worem Ipsum Nam nec tellus a odio tincidunt auctor.
                            Proin gravida nibh vel velit auctWorem Ipsum Nam nec
                            tellus a odio tincidunt auctor. Proin gravida nibh vel
                            velit auctor aliquet.</p>
                        <ul class="item-social">
                            @foreach ($icon as $favicon)
                                <li><a href="{{ $favicon->link }}"><i class="{{ $favicon->logo }}"></i></a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-box-layout3">
                        <img src="{{asset($configs->logo) }}" alt="about">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
