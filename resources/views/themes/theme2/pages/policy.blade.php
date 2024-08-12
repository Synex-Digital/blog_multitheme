@extends('themes.theme2.layout.app')

@section('breadcrumb')
    <section class="inner-page-banner bg-common">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumbs-area">
                        <h1>Privacy Policy</h1>
                        <ul>
                            <li>
                                <a href="{{ route('home') }}">Home</a>
                            </li>
                            <li>Privacy Policy</li>
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
                        <h2 class="item-title">Hello!</h2>
                        <h2 class="item-title"><span>Lets check out the terms and conditions</span></h2><br>
                        <p>This Privacy Policy describes our policies and procedures on the collection, use and disclosure of your information when you use the site and tells you about your privacy rights and how the law protects you.</p>

                            <p>By using the site, you agree to the collection and use of information in accordance with this Privacy Policy.</p>

                            <p><b>Interpretation and Definitions</b>
                            The words of which the initial letter is capitalized have meanings defined under the following conditions. The following definitions shall have the same meaning regardless of whether they appear in singular or in plural.</p>

                            <p><b>Definitions</b><br>
                            For the purposes of this Privacy Policy:</p>

                            <p><b>Account</b> means a unique account created for you to access our site or parts of our site.</p>

                            <p><b>Company</b> (referred to as either “the Company”, “we”, “us” or “our” in this Agreement) refers to Black Ink GmbH, Invalidenstrasse 112, 10115 Berlin, Germany.
                            For the purpose of the GDPR, the Company is the Data Controller.</p>

                            <p><b>Cookies</b> are small files that are placed on your computer, mobile device or any other device by a website, containing the details of your browsing history on that website among its many uses.</p>

                            <p><b>Data Controller</b>, for the purposes of the GDPR (General Data Protection Regulation), refers to the Company as the legal person which alone or jointly with others determines the purposes and means of the processing of Personal Data.</p>

                            <p><b>Device</b> means any device that can access the site such as a computer, a cellphone or a digital tablet.</p>

                            <p>you are advised to review this Privacy Policy periodically for any changes. Changes to this Privacy Policy are effective when they are posted on this page.</p>

                            <p><b>Contact Us</b></p>
                            If you have any questions about this Privacy Policy, you can contact us by
                            <br>
                            email:
                            <br>
                            info@synexdigital.com</p>
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
