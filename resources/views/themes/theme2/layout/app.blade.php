@php
    use App\Models\Category;
    use App\Models\Config;
    use App\Models\Social;
    $category = Category::where('status','active')->get();
    $configs = Config::first();
    $icon = Social::get();
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog Theme 2</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @include('themes.theme2.layout.headerlink')
</head>
    <body class="bg-pearl box-layout sticky-header">

        <!-- Preloader Start Here -->
        <div id="preloader"></div>
            <!-- Preloader End Here -->
            <div id="wrapper" class="wrapper bg-common" data-bg-image="{{ asset('themes/theme2/img/figure/box-bg.png')}}">
                @include('themes.theme2.layout.headerNav')

                @yield('breadcrumb')
                <div class="box-layout-child bg-white">
                    <!-- Blog Area Start Here -->
                    <section class="blog-wrap-layout8">
                        <div class="container">
                            @yield('content')
                        </div>
                    </section>
                </div>

                @include('themes.theme2.layout.footerSection')

                <!-- Search Box Start Here -->
                <div id="header-search" class="header-search">
                    <button type="button" class="close">×</button>
                    <form class="header-search-form">
                        <input class="live-search" type="search" placeholder="Type here........" />
                        <button type="button" >
                            <svg fill="#000000" height="20px" width="20px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
	                        viewBox="0 0 488.4 488.4" xml:space="preserve">
                            <g>
                                <g>
                                    <path d="M0,203.25c0,112.1,91.2,203.2,203.2,203.2c51.6,0,98.8-19.4,134.7-51.2l129.5,129.5c2.4,2.4,5.5,3.6,8.7,3.6
                                        s6.3-1.2,8.7-3.6c4.8-4.8,4.8-12.5,0-17.3l-129.6-129.5c31.8-35.9,51.2-83,51.2-134.7c0-112.1-91.2-203.2-203.2-203.2
                                        S0,91.15,0,203.25z M381.9,203.25c0,98.5-80.2,178.7-178.7,178.7s-178.7-80.2-178.7-178.7s80.2-178.7,178.7-178.7
                                        S381.9,104.65,381.9,203.25z"/>
                                </g>
                            </g>
                            </svg>
                        </button>
                    </form>
                    <div class="container mt-3" id="search_content">

                    </div>
                </div>
                <!-- Search Box End Here -->
                <!-- Offcanvas Menu Start -->
                <div class="offcanvas-menu-wrap" id="offcanvas-wrap">
                    <div class="offcanvas-content">
                        <div class="offcanvas-logo">
                            <a href="{{ route('home') }}"><img src="{{ asset('themes/theme2/img/logo-dark2.png')}}" alt="logo"></a>
                        </div>
                        <ul class="offcanvas-menu">
                            <li class="nav-item">
                                <a href="{{ route('home') }}">HOME</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('theme2.about') }}">ABOUT</a>
                            </li>
                            <li class="nav-item">
                                <a href="#">CATEGORIES</a>
                                <ul class="dropdown-menu-col-1">
                                    @foreach ($category as $cat)
                                        <li><a class="dropdown-item" href="{{ route('theme2.categories', $cat->slug) }}">{{ $cat->name }}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('theme2.all.blogs') }}">ALL BLOGS</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('theme2.policy') }}">PRIVACY POLICY</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('theme2.contact') }}">CONTACT</a>
                            </li>
                        </ul>
                        <div class="offcanvas-footer">
                            <div class="item-title">Follow Me</div>
                                <ul class="offcanvas-social">
                                    @foreach ($icon as $favicon)
                                        <li><a href="{{ $favicon->link }}"><i class="{{ $favicon->logo }}"></i></a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Offcanvas Menu End -->
                </div>
                @include('themes.theme2.layout.footerlink')

                <script>
                    $(document).ready(function() {


                        let x = $('.live-search').on('input', function() {
                            var query = $(this).val();
                            const container = document.getElementById('search_content');
                            container.innerHTML = '';
                            $.ajaxSetup({
                                headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                }
                            });
                            $.ajax({
                                url: "{{ route('theme2.search') }}",
                                type: "GET",
                                data: {
                                    search: query,
                                },
                                success: function(response) {
                                    response.data.forEach(post => {
                                        // Create the row element
                                        const rowElement = document.createElement('div');
                                        rowElement.className = 'row mb-3';

                                        // Create the title element
                                        const titleElement = document.createElement('h6');
                                        titleElement.className = 'my-0 bd-font fw-bolder';
                                        const titleLink = document.createElement('a');
                                        titleLink.href = `/theme2/blog/single/${post.slug}`;
                                        titleLink.textContent = post.title;
                                        titleLink.style.color = '#203656';
                                        titleElement.appendChild(titleLink);

                                         // Create the meta element
                                         const metaElement = document.createElement('ul');
                                            metaElement.className = 'meta list-inline mt-1 mb-0';
                                            const dateItem = document.createElement('li');
                                            dateItem.className = 'list-inline-item';
                                            dateItem.textContent = new Date(post.updated_at)
                                                .toLocaleDateString('en-BD', {
                                                    year: 'numeric',
                                                    month: 'numeric',
                                                    day: 'numeric'
                                                });
                                            metaElement.appendChild(dateItem);

                                            // Append the title and meta to the row element
                                            rowElement.appendChild(titleElement);
                                            rowElement.appendChild(metaElement);
                                            // Append the row element to the container
                                            container.appendChild(rowElement);

                                    });
                                },
                                error: function(xhr, status, error) {
                                    console.log(xhr.responseText);
                                }
                            });
                        });
                    });
                </script>
    </body>
</html>
