<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Katen - Minimal Blog & Magazine HTML Theme</title>
	<meta name="description" content="Katen - Minimal Blog & Magazine HTML Theme">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">
    @include('Themes.theme1.layout.headerlink')
    @yield('style')
    {{-- this is for custom codes --}}
    @include('Themes.theme1.layout.header')
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

<!-- site wrapper -->
<div class="site-wrapper">

	<div class="main-overlay"></div>

    @include('Themes.theme1.layout.headerNav')

    {{-- main body --}}
    <div class="container">
        @yield('content')
    </div>
    {{-- main body --}}


    {{-- this is for custom codes --}}
    @include('Themes.theme1.layout.footerSection')

</div><!-- end site wrapper -->

<!-- canvas menu -->
<div class="canvas-menu d-flex align-items-end flex-column">
	<!-- close button -->
	<button type="button" class="btn-close" aria-label="Close"></button>

	<!-- logo -->
	<div class="logo">
		<img src="images/logo.svg" alt="Katen" />
	</div>

	<!-- menu -->
	<nav>
		<ul class="vertical-menu">
			<li class="active">
				<a href="index.html">Home</a>
				<ul class="submenu">
					<li><a href="index.html">Magazine</a></li>
					<li><a href="personal.html">Personal</a></li>
					<li><a href="personal-alt.html">Personal Alt</a></li>
					<li><a href="minimal.html">Minimal</a></li>
					<li><a href="classic.html">Classic</a></li>
				</ul>
			</li>
			<li><a href="category.html">Lifestyle</a></li>
			<li><a href="category.html">Inspiration</a></li>
			<li>
				<a href="#">Pages</a>
				<ul class="submenu">
					<li><a href="category.html">Category</a></li>
					<li><a href="blog-single.html">Blog Single</a></li>
					<li><a href="blog-single-alt.html">Blog Single Alt</a></li>
					<li><a href="about.html">About</a></li>
					<li><a href="contact.html">Contact</a></li>
				</ul>
			</li>
			<li><a href="contact.html">Contact</a></li>
		</ul>
	</nav>

	<!-- social icons -->
	<ul class="social-icons list-unstyled list-inline mb-0 mt-auto w-100">
		<li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
		<li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
		<li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
		<li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
		<li class="list-inline-item"><a href="#"><i class="fab fa-medium"></i></a></li>
		<li class="list-inline-item"><a href="#"><i class="fab fa-youtube"></i></a></li>
	</ul>
</div>
@include('Themes.theme1.layout.footer')
@yield('scripts')
@include('Themes.theme1.layout.footerlink')
</body>
</html>
