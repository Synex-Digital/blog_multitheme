@extends('themes.theme2.layout.app')

@section('breadcrumb')
    <section class="inner-page-banner bg-common">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumbs-area">
                        <h1>Contact Us</h1>
                        <ul>
                            <li>
                                <a href="index.html">Home</a>
                            </li>
                            <li>Contact</li>
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
        <div class="contact-box-layout1">
            <div class="google-map-area">
                <div id="googleMap" style="width:100%; height:450px; border-radius: 4px;"></div>
            </div>
            <div class="contact-way">
                <div class="contact-list">
                    <h3 class="item-title">Office Address</h3>
                    <p>Worem Ipsum Nam nec tellus a odio tincidunt auctor.
                    Proin gravida nibh vel velit auctor aliquet. Bendum auctor,
                    nisi elit conseq aeuat ipsum, nec sagittis sem nibhety.</p>
                </div>
                <div class="contact-list">
                    <h3 class="item-title">Phone</h3>
                    <p>{{ $configs->phone }}</p>
                </div>
                <div class="contact-list">
                    <h3 class="item-title">Mail Us</h3>
                    <p>{{ $configs->email }}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 sidebar-widget-area sidebar-break-md">
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
                <h3 class="item-heading">FOLLOW ME ON</h3>
            </div>
            <div class="widget-follow-us-2">
                <ul>
                    @foreach ($icon as $favicon)
                        <li class="single-item"><a href="{{ $favicon->link }}"><i class="{{ $favicon->logo }}"></i></a></li>
                    @endforeach
                </ul>
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

