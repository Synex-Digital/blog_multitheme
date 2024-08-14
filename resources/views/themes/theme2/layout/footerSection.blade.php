<!-- Footer Area Start Here -->
<footer class="footer-wrap-layout1">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-lg-4">
                <div class="footer-box-layout1">
                    <div class="copyright">© 2024 {{ $configs->name }}. All Rights Reserved. <br>Edited by Synex Digital.</div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="footer-box-layout1">
                    <div class="footer-logo">
                        <a href="index.html"><img width="80" height="80" src="{{ asset($configs->logo) }}" alt="logo"></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="footer-box-layout1">
                    <ul class="footer-social">
                        @foreach ($icon as $favicon)
                            <li><a href="{{ $favicon->link }}"><i class="{{ $favicon->logo }}"></i></a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Area End Here -->
