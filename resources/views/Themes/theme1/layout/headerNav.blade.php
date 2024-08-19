	<!-- header -->
	<header class="header-default">
		<nav class="navbar navbar-expand-lg">
			<div class="container-xl">
				<!-- site logo -->
				<a class="site-logo navbar-brand" href="{{ route('home') }}"><img width="80" src="{{asset($configs->logo) }}" alt="logo" /></a>

				<div class="collapse navbar-collapse">
					<!-- menus -->
					<ul class="navbar-nav mr-auto">
						<li class="nav-item">
							<a class="nav-link" href="{{ route('home') }}">Home</a>
						</li>

                        <li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#">Categories</a>
							<ul class="dropdown-menu">

                                @foreach ($category as $cat)
                                    <li><a class="dropdown-item" href="{{ route('categories', $cat->slug) }}">{{ $cat->name }}</a></li>

                                @endforeach
							</ul>
						</li>



						<li class="nav-item">
							<a class="nav-link" href="{{ route('all_blogs') }}">Blogs</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="{{ route('contact') }}">Contact</a>
						</li>
					</ul>
				</div>

				<!-- header right section -->
				<div class="header-right">
					<!-- social icons -->
					<ul class="social-icons list-unstyled list-inline mb-0">
						@foreach ($icon as $favicon)
                            <li class="list-inline-item"><a href="{{ $favicon->link }}"><i class="{{ $favicon->logo }}"></i></a></li>
                        @endforeach
					</ul>
					<!-- header buttons -->
					<div class="header-buttons">
						<button type="button" class="search icon-button" aria-label="Search">
							<i class="icon-magnifier"></i>
						</button>
						<button class="burger-menu icon-button">
							<span class="burger-icon"></span>
						</button>
					</div>
				</div>
			</div>
		</nav>
	</header>
