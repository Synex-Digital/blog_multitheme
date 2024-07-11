@php

use App\Models\Category;
use App\Models\Config;
$category = Category::where('status','active')->get();
$configs = Config::first();

@endphp

<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Katen - Minimal Blog & Magazine HTML Theme</title>
	<meta name="description" content="Katen - Minimal Blog & Magazine HTML Theme">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="shortcut icon" type="image/x-icon" href="{{ asset($configs->favicon) }}">
    @include('themes.theme1.layout.headerlink')
    @yield('style')
    {{-- this is for custom codes --}}
    @include('themes.theme1.layout.header')
</head>
<body>

<!-- preloader -->
<div id="preloader">
	<div class="book">
		<div class="inner">
			<div class="left"></div>
			<div class="middle"></div>
			<div class="right"></div>
		</div>
		<ul>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>
</div>
 {{-- Search pop --}}
 <div class="search-popup">
    <!-- close button -->
    <button type="button" class="btn-close" aria-label="Close"></button>
    <!-- content -->
    <div class="container">
        <div class="text-center mt-5">
            <h3 class="mb-4 mt-0">Press ESC to close</h3>
        </div>
        <!-- form -->
        <form class="d-flex search-form">
            <input class="form-control me-2 live-search" type="search" placeholder="Search and press enter ..."
                aria-label="Search">
            <button class="btn btn-default btn-lg" type="button"><i class="icon-magnifier"></i></button>
        </form>

        <div class="container mt-3" id="search_content">

        </div>
    </div>
</div>


<!-- site wrapper -->
<div class="site-wrapper">

	<div class="main-overlay"></div>

    @include('themes.theme1.layout.headerNav')

    {{-- main body --}}
    <div class="container">
        @yield('content')
    </div>
    {{-- main body --}}


    {{-- this is for custom codes --}}
    @include('themes.theme1.layout.footerSection')

</div><!-- end site wrapper -->

<!-- canvas menu -->
<div class="canvas-menu d-flex align-items-end flex-column">
	<!-- close button -->
	<button type="button" class="btn-close" aria-label="Close"></button>

	<!-- logo -->
	<div class="logo">
		<img src="{{ asset($configs->logo) }}" alt="logo" />
	</div>

	<!-- menu -->
	<nav>
		<ul class="vertical-menu">
			<li class="active"><a href="{{ route('home') }}">Home</a></li>
			<li>
				<a href="#">Categories</a>
				<ul class="submenu">
                    @foreach ($category as $cat)
                        <li><a href="{{ route('categories', $cat->slug) }}">{{ $cat->name }}</a></li>
                    @endforeach
				</ul>
			</li>
            <li><a href="{{ route('policy') }}">Policy</a></li>
			<li><a href="{{ route('about') }}">About</a></li>
			<li><a href="{{ route('contact') }}">Contact</a></li>
		</ul>
	</nav>



	<!-- social icons -->
	<ul class="social-icons list-unstyled list-inline mb-0 mt-auto w-100">
		@foreach ($icon as $favicon)
            <li class="list-inline-item"><a href="{{ $favicon->link }}"><i class="{{ $favicon->logo }}"></i></a></li>
        @endforeach
	</ul>
</div>
@include('themes.theme1.layout.footer')
@yield('scripts')
@include('themes.theme1.layout.footerlink')

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
                url: "{{ route('search') }}",
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
                        titleLink.href = `/blog/single/${post.slug}`;
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
