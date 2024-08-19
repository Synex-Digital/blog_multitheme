@extends('themes.theme1.layout.app')

@section('content')

	<!-- hero section -->
	<section id="hero">

		<div class="container-xl">

			<div class="row gy-4">

				<div class="col-lg-8">

					<!-- featured post large -->
					<div class="post featured-post-lg">
						<div class="details clearfix">
							<a href="{{ route('categories', $categoryBlog->first()->slug) }}" class="category-badge">{{ $banner->category->name ?? Unknown}}</a>
							<h2 class="post-title"><a href="#">{{ $banner->title }}</a></h2>
							<ul class="meta list-inline mb-0">
								<li class="list-inline-item"><a href="#">{{ $banner->author }}</a></li>
								<li class="list-inline-item">{{ $banner->updated_at->format('d/m/Y') }}</li>
							</ul>
						</div>
						<a href="blog-single.html">
							<div class="thumb rounded">
								<div class="inner data-bg-image" data-bg-image="{{ url('/') }}/{{ $banner->image }}"></div>
							</div>
						</a>
					</div>

				</div>

				<div class="col-lg-4">

					<!-- post tabs -->
					<div class="post-tabs rounded bordered">
						<!-- tab navs -->
						<ul class="nav nav-tabs nav-pills nav-fill" id="postsTab" role="tablist">
							<li class="nav-item" role="presentation"><button aria-controls="popular" aria-selected="true" class="nav-link active" data-bs-target="#popular" data-bs-toggle="tab" id="popular-tab" role="tab" type="button">Popular</button></li>
							<li class="nav-item" role="presentation"><button aria-controls="recent" aria-selected="false" class="nav-link" data-bs-target="#recent" data-bs-toggle="tab" id="recent-tab" role="tab" type="button">Recent</button></li>
						</ul>
						<!-- tab contents -->
						<div class="tab-content" id="postsTabContent">
                            <!-- loader -->
							<div class="lds-dual-ring"></div>
							<!-- popular posts -->
                            <div aria-labelledby="popular-tab" class="tab-pane fade show active" id="popular" role="tabpanel">
                                    @foreach ($blog_items as $blog)
								<!-- post -->
                                    <div class="post post-list-sm circle">
                                        <div class="thumb circle">
                                            <a href="{{ route('blog_slug', $blog->slug) }}">
                                                <div class="inner list-inner-circle">
                                                    <img src="{{ url('/') }}/{{ $blog->image }}" alt="post-title" />
                                                </div>
                                            </a>
                                        </div>
                                        <div class="details clearfix">
                                            <h6 class="post-title my-0"><a href="{{ route('blog_slug', $blog->slug) }}">{{ $blog->title }}</a></h6>
                                            <ul class="meta list-inline mt-1 mb-0">
                                                <li class="list-inline-item">{{ $blog->updated_at->format('d/m/Y') }}</li>
                                            </ul>
                                        </div>
                                    </div>
                                    @endforeach
							    </div>
							<!-- recent posts -->
							<div aria-labelledby="recent-tab" class="tab-pane fade" id="recent" role="tabpanel">
								<!-- post -->
                                @foreach ($recent as $blog_recent)
                                    <div class="post post-list-sm circle">
                                        <div class="thumb circle">
                                            <a href="{{ route('blog_slug', $blog_recent->slug) }}">
                                                <div class="inner list-inner-circle">
                                                    <img src="{{ url('/') }}/{{ $blog_recent->image }}" alt="post-title" />
                                                </div>
                                            </a>
                                        </div>
                                        <div class="details clearfix">
                                            <h6 class="post-title my-0"><a href="{{ route('blog_slug', $blog_recent->slug) }}">{{$blog_recent->title}}</a></h6>
                                            <ul class="meta list-inline mt-1 mb-0">
                                                <li class="list-inline-item">{{ $blog_recent->updated_at->format('d/m/Y') }}</li>
                                            </ul>
                                        </div>
                                    </div>
                                @endforeach
							</div>
						</div>
					</div>
				</div>

			</div>

		</div>

	</section>

	<!-- section main content -->
	<section class="main-content">
		<div class="container-xl">

			<div class="row gy-4">

				<div class="col-lg-8">

					<!-- section header -->
					<div class="section-header">
						<h3 class="section-title">Editor’s Pick</h3>
						<img src="{{ asset('themes/theme1/images/wave.svg')}}" class="wave" alt="wave" />
					</div>

					<div class="padding-30 rounded bordered">
						<div class="row gy-5">
                            @foreach ($blog_items as $blog)
                                <div class="col-sm-6">
                                    <!-- post -->
                                    <div class="post">
                                        <div class="thumb rounded">
                                            <a href="{{ route('categories', $categoryBlog->first()->slug) }}" class="category-badge position-absolute">{{ $blog->category->name ?? Unknown }}</a>
                                            <span class="post-format">
                                                <i class="icon-picture"></i>
                                            </span>
                                            <a href="{{ route('blog_slug', $blog->slug) }}">
                                                <div class="inner">
                                                    <img src="{{ url('/') }}/{{ $blog->image }}" alt="post-title" />
                                                </div>
                                            </a>
                                        </div>
                                        <ul class="meta list-inline mt-4 mb-0">
                                            <li class="list-inline-item"><a href="#">{{ $blog->author }}</a></li>
                                            <li class="list-inline-item">{{ $blog->updated_at->format('d/m/Y') }}</li>
                                            <li class="list-inline-item"><i class="far fa-eye"> {{ $blog->view_count ?? '0' }}</i></li>
                                        </ul>
                                        <h5 class="post-title mb-3 mt-3"><a href="{{ route('blog_slug', $blog->slug) }}">{{ $blog->title }}</a></h5>
                                        <p class="excerpt mb-0">{{ $blog->seo_description }}</p>
                                    </div>
                                </div>
                            @endforeach

						</div>
					</div>

					<div class="spacer" data-height="50" style="height: 30px;"></div>

                    <div class="row">
                        {{ $blog_paginate->links('pagination::bootstrap-4') }}
                    </div>

					<!-- horizontal ads -->
					<div class="ads-horizontal text-md-center">
						<span class="ads-title">- Sponsored Ad -</span>
						<a href="#">
							<img src="{{ asset('themes/theme1/images/ads/ad-750.png')}}" alt="Advertisement" />
						</a>
					</div>

					<div class="spacer" data-height="50"></div>

					{{-- <!-- section header -->
					<div class="section-header">
						<h3 class="section-title">Trending</h3>
						<img src="images/wave.svg" class="wave" alt="wave" />
					</div>

					<div class="padding-30 rounded bordered">
						<div class="row gy-5">
							<div class="col-sm-6">
								<!-- post large -->
								<div class="post">
									<div class="thumb rounded">
										<a href="category.html" class="category-badge position-absolute">Culture</a>
										<span class="post-format">
											<i class="icon-picture"></i>
										</span>
										<a href="blog-single.html">
											<div class="inner">
												<img src="images/posts/trending-lg-1.jpg" alt="post-title" />
											</div>
										</a>
									</div>
									<ul class="meta list-inline mt-4 mb-0">
										<li class="list-inline-item"><a href="#"><img src="images/other/author-sm.png" class="author" alt="author"/>Katen Doe</a></li>
										<li class="list-inline-item">29 March 2021</li>
									</ul>
									<h5 class="post-title mb-3 mt-3"><a href="blog-single.html">Facts About Business That Will Help You Success</a></h5>
									<p class="excerpt mb-0">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy</p>
								</div>
								<!-- post -->
								<div class="post post-list-sm square before-seperator">
									<div class="thumb rounded">
										<a href="blog-single.html">
											<div class="inner">
												<img src="images/posts/trending-sm-1.jpg" alt="post-title" />
											</div>
										</a>
									</div>
									<div class="details clearfix">
										<h6 class="post-title my-0"><a href="blog-single.html">3 Easy Ways To Make Your iPhone Faster</a></h6>
										<ul class="meta list-inline mt-1 mb-0">
											<li class="list-inline-item">29 March 2021</li>
										</ul>
									</div>
								</div>
								<!-- post -->
								<div class="post post-list-sm square before-seperator">
									<div class="thumb rounded">
										<a href="blog-single.html">
											<div class="inner">
												<img src="images/posts/trending-sm-2.jpg" alt="post-title" />
											</div>
										</a>
									</div>
									<div class="details clearfix">
										<h6 class="post-title my-0"><a href="blog-single.html">An Incredibly Easy Method That Works For All</a></h6>
										<ul class="meta list-inline mt-1 mb-0">
											<li class="list-inline-item">29 March 2021</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-sm-6">
								<!-- post large -->
								<div class="post">
									<div class="thumb rounded">
										<a href="category.html" class="category-badge position-absolute">Inspiration</a>
										<span class="post-format">
											<i class="icon-earphones"></i>
										</span>
										<a href="blog-single.html">
											<div class="inner">
												<img src="images/posts/trending-lg-2.jpg" alt="post-title" />
											</div>
										</a>
									</div>
									<ul class="meta list-inline mt-4 mb-0">
										<li class="list-inline-item"><a href="#"><img src="images/other/author-sm.png" class="author" alt="author"/>Katen Doe</a></li>
										<li class="list-inline-item">29 March 2021</li>
									</ul>
									<h5 class="post-title mb-3 mt-3"><a href="blog-single.html">5 Easy Ways You Can Turn Future Into Success</a></h5>
									<p class="excerpt mb-0">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy</p>
								</div>
								<!-- post -->
								<div class="post post-list-sm square before-seperator">
									<div class="thumb rounded">
										<a href="blog-single.html">
											<div class="inner">
												<img src="images/posts/trending-sm-3.jpg" alt="post-title" />
											</div>
										</a>
									</div>
									<div class="details clearfix">
										<h6 class="post-title my-0"><a href="blog-single.html">Here Are 8 Ways To Success Faster</a></h6>
										<ul class="meta list-inline mt-1 mb-0">
											<li class="list-inline-item">29 March 2021</li>
										</ul>
									</div>
								</div>
								<!-- post -->
								<div class="post post-list-sm square before-seperator">
									<div class="thumb rounded">
										<a href="blog-single.html">
											<div class="inner">
												<img src="images/posts/trending-sm-4.jpg" alt="post-title" />
											</div>
										</a>
									</div>
									<div class="details clearfix">
										<h6 class="post-title my-0"><a href="blog-single.html">Master The Art Of Nature With These 7 Tips</a></h6>
										<ul class="meta list-inline mt-1 mb-0">
											<li class="list-inline-item">29 March 2021</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="spacer" data-height="50"></div>

					<!-- section header -->
					<div class="section-header">
						<h3 class="section-title">Inspiration</h3>
						<img src="images/wave.svg" class="wave" alt="wave" />
						<div class="slick-arrows-top">
							<button type="button" data-role="none" class="carousel-topNav-prev slick-custom-buttons" aria-label="Previous"><i class="icon-arrow-left"></i></button>
							<button type="button" data-role="none" class="carousel-topNav-next slick-custom-buttons" aria-label="Next"><i class="icon-arrow-right"></i></button>
						</div>
					</div>

					<div class="row post-carousel-twoCol post-carousel">
						<!-- post -->
						<div class="post post-over-content col-md-6">
							<div class="details clearfix">
								<a href="category.html" class="category-badge">Inspiration</a>
								<h4 class="post-title"><a href="blog-single.html">Want To Have A More Appealing Tattoo?</a></h4>
								<ul class="meta list-inline mb-0">
									<li class="list-inline-item"><a href="#">Katen Doe</a></li>
									<li class="list-inline-item">29 March 2021</li>
								</ul>
							</div>
							<a href="blog-single.html">
								<div class="thumb rounded">
									<div class="inner">
										<img src="images/posts/inspiration-1.jpg" alt="thumb" />
									</div>
								</div>
							</a>
						</div>
						<!-- post -->
						<div class="post post-over-content col-md-6">
							<div class="details clearfix">
								<a href="category.html" class="category-badge">Inspiration</a>
								<h4 class="post-title"><a href="blog-single.html">Feel Like A Pro With The Help Of These 7 Tips</a></h4>
								<ul class="meta list-inline mb-0">
									<li class="list-inline-item"><a href="#">Katen Doe</a></li>
									<li class="list-inline-item">29 March 2021</li>
								</ul>
							</div>
							<a href="blog-single.html">
								<div class="thumb rounded">
									<div class="inner">
										<img src="images/posts/inspiration-2.jpg" alt="thumb" />
									</div>
								</div>
							</a>
						</div>
						<!-- post -->
						<div class="post post-over-content col-md-6">
							<div class="details clearfix">
								<a href="category.html" class="category-badge">Inspiration</a>
								<h4 class="post-title"><a href="blog-single.html">Your Light Is About To Stop Being Relevant</a></h4>
								<ul class="meta list-inline mb-0">
									<li class="list-inline-item"><a href="#">Katen Doe</a></li>
									<li class="list-inline-item">29 March 2021</li>
								</ul>
							</div>
							<a href="blog-single.html">
								<div class="thumb rounded">
									<div class="inner">
										<img src="images/posts/inspiration-3.jpg" alt="thumb" />
									</div>
								</div>
							</a>
						</div>
					</div>

					<div class="spacer" data-height="50"></div>

					<!-- section header -->
					<div class="section-header">
						<h3 class="section-title">Latest Posts</h3>
						<img src="images/wave.svg" class="wave" alt="wave" />
					</div>

					<div class="padding-30 rounded bordered">

						<div class="row">

							<div class="col-md-12 col-sm-6">
								<!-- post -->
								<div class="post post-list clearfix">
									<div class="thumb rounded">
										<span class="post-format-sm">
											<i class="icon-picture"></i>
										</span>
										<a href="blog-single.html">
											<div class="inner">
												<img src="images/posts/latest-sm-1.jpg" alt="post-title" />
											</div>
										</a>
									</div>
									<div class="details">
										<ul class="meta list-inline mb-3">
											<li class="list-inline-item"><a href="#"><img src="images/other/author-sm.png" class="author" alt="author"/>Katen Doe</a></li>
											<li class="list-inline-item"><a href="#">Trending</a></li>
											<li class="list-inline-item">29 March 2021</li>
										</ul>
										<h5 class="post-title"><a href="blog-single.html">The Next 60 Things To Immediately Do About Building</a></h5>
										<p class="excerpt mb-0">A wonderful serenity has taken possession of my entire soul, like these sweet mornings</p>
										<div class="post-bottom clearfix d-flex align-items-center">
											<div class="social-share me-auto">
												<button class="toggle-button icon-share"></button>
												<ul class="icons list-unstyled list-inline mb-0">
													<li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
													<li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
													<li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
													<li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
													<li class="list-inline-item"><a href="#"><i class="fab fa-telegram-plane"></i></a></li>
													<li class="list-inline-item"><a href="#"><i class="far fa-envelope"></i></a></li>
												</ul>
											</div>
											<div class="more-button float-end">
												<a href="blog-single.html"><span class="icon-options"></span></a>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="col-md-12 col-sm-6">
								<!-- post -->
								<div class="post post-list clearfix">
									<div class="thumb rounded">
										<a href="blog-single.html">
											<div class="inner">
												<img src="images/posts/latest-sm-2.jpg" alt="post-title" />
											</div>
										</a>
									</div>
									<div class="details">
										<ul class="meta list-inline mb-3">
											<li class="list-inline-item"><a href="#"><img src="images/other/author-sm.png" class="author" alt="author"/>Katen Doe</a></li>
											<li class="list-inline-item"><a href="#">Lifestyle</a></li>
											<li class="list-inline-item">29 March 2021</li>
										</ul>
										<h5 class="post-title"><a href="blog-single.html">Master The Art Of Nature With These 7 Tips</a></h5>
										<p class="excerpt mb-0">A wonderful serenity has taken possession of my entire soul, like these sweet mornings</p>
										<div class="post-bottom clearfix d-flex align-items-center">
											<div class="social-share me-auto">
												<button class="toggle-button icon-share"></button>
												<ul class="icons list-unstyled list-inline mb-0">
													<li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
													<li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
													<li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
													<li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
													<li class="list-inline-item"><a href="#"><i class="fab fa-telegram-plane"></i></a></li>
													<li class="list-inline-item"><a href="#"><i class="far fa-envelope"></i></a></li>
												</ul>
											</div>
											<div class="more-button float-end">
												<a href="blog-single.html"><span class="icon-options"></span></a>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="col-md-12 col-sm-6">
								<!-- post -->
								<div class="post post-list clearfix">
									<div class="thumb rounded">
										<span class="post-format-sm">
											<i class="icon-camrecorder"></i>
										</span>
										<a href="blog-single.html">
											<div class="inner">
												<img src="images/posts/latest-sm-3.jpg" alt="post-title" />
											</div>
										</a>
									</div>
									<div class="details">
										<ul class="meta list-inline mb-3">
											<li class="list-inline-item"><a href="#"><img src="images/other/author-sm.png" class="author" alt="author"/>Katen Doe</a></li>
											<li class="list-inline-item"><a href="#">Fashion</a></li>
											<li class="list-inline-item">29 March 2021</li>
										</ul>
										<h5 class="post-title"><a href="blog-single.html">Facts About Business That Will Help You Success</a></h5>
										<p class="excerpt mb-0">A wonderful serenity has taken possession of my entire soul, like these sweet mornings</p>
										<div class="post-bottom clearfix d-flex align-items-center">
											<div class="social-share me-auto">
												<button class="toggle-button icon-share"></button>
												<ul class="icons list-unstyled list-inline mb-0">
													<li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
													<li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
													<li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
													<li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
													<li class="list-inline-item"><a href="#"><i class="fab fa-telegram-plane"></i></a></li>
													<li class="list-inline-item"><a href="#"><i class="far fa-envelope"></i></a></li>
												</ul>
											</div>
											<div class="more-button float-end">
												<a href="blog-single.html"><span class="icon-options"></span></a>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="col-md-12 col-sm-6">
								<!-- post -->
								<div class="post post-list clearfix">
									<div class="thumb rounded">
										<a href="blog-single.html">
											<div class="inner">
												<img src="images/posts/latest-sm-4.jpg" alt="post-title" />
											</div>
										</a>
									</div>
									<div class="details">
										<ul class="meta list-inline mb-3">
											<li class="list-inline-item"><a href="#"><img src="images/other/author-sm.png" class="author" alt="author"/>Katen Doe</a></li>
											<li class="list-inline-item"><a href="#">Politic</a></li>
											<li class="list-inline-item">29 March 2021</li>
										</ul>
										<h5 class="post-title"><a href="blog-single.html">Your Light Is About To Stop Being Relevant</a></h5>
										<p class="excerpt mb-0">A wonderful serenity has taken possession of my entire soul, like these sweet mornings</p>
										<div class="post-bottom clearfix d-flex align-items-center">
											<div class="social-share me-auto">
												<button class="toggle-button icon-share"></button>
												<ul class="icons list-unstyled list-inline mb-0">
													<li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
													<li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
													<li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
													<li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
													<li class="list-inline-item"><a href="#"><i class="fab fa-telegram-plane"></i></a></li>
													<li class="list-inline-item"><a href="#"><i class="far fa-envelope"></i></a></li>
												</ul>
											</div>
											<div class="more-button float-end">
												<a href="blog-single.html"><span class="icon-options"></span></a>
											</div>
										</div>
									</div>
								</div>
							</div>

						</div
						>
						<!-- load more button -->
						<div class="text-center">
							<button class="btn btn-simple">Load More</button>
						</div>

					</div> --}}

				</div>

                <div class="col-lg-4">

                    <!-- sidebar -->
                    <div class="sidebar">
                        <div class="widget rounded">
                            <div class="widget-about data-bg-image text-center">
                                <img src="{{ $configs->logo }}" alt="logo" class="mb-4" />
                                <p class="mb-4">Hello, We’re content writer who is fascinated by content food, travel, fashion, celebrity and lifestyle. We helps clients bring the right content to the right people.</p>
                                <ul class="social-icons list-unstyled list-inline mb-0">
                                    @foreach ($icon as $favicon)
                                        <li class="list-inline-item"><a href="{{ $favicon->link }}"><i class="{{ $favicon->logo }}"></i></a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                        <!-- widget popular posts -->
                        <div class="widget rounded">
                            <div class="widget-header text-center">
                                <h3 class="widget-title">Popular Posts</h3>
                                <img src="{{ asset('themes/theme1/images/wave.svg') }}" class="wave" alt="wave" />
                            </div>
                            <div class="widget-content">
                                <!-- post -->
                                @foreach ($blog_items as $sl => $blog)
                                    <div class="post post-list-sm circle">
                                        <div class="thumb circle">
                                            <span class="number">{{ $sl+1 }}</span>
                                            <a href="{{ route('blog_slug', $blog->slug) }}">
                                                <div class="inner list-inner-circle">
                                                    <img src="{{ url('/') }}/{{ $blog->image }}" alt="post-title" />
                                                </div>
                                            </a>
                                        </div>
                                        <div class="details clearfix">
                                            <h6 class="post-title my-0"><a href="{{ route('blog_slug', $blog->slug) }}">{{ $blog->title }}</a></h6>
                                            <ul class="meta list-inline mt-1 mb-0">
                                                <li class="list-inline-item">{{ $blog->updated_at->format('d/m/Y') }}</li>
                                            </ul>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        </div>

                        <!-- widget categories -->
                        <div class="widget rounded">
                            <div class="widget-header text-center">
                                <h3 class="widget-title">Explore Topics</h3>
                                <img src="{{ asset('themes/theme1/images/wave.svg') }}" class="wave" alt="wave" />
                            </div>
                            <div class="widget-content">
                                <ul class="list">
                                    @foreach ($category as $category)
                                        <li><a href="{{ route('categories', $category->slug) }}">{{ $category->name }}</a><span>{{ $category->blogs ? $category->blogs->count(): '0' }}</span></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                        <!-- widget newsletter -->
						<div class="widget rounded">
							<div class="widget-header text-center">
								<h3 class="widget-title">Newsletter</h3>
								<img src="{{ asset('themes/theme1/images/wave.svg') }}" class="wave" alt="wave" />
							</div>
							<div class="widget-content">
								<span class="newsletter-headline text-center mb-3">Join as our subscribers!</span>
								<form action="{{ route('newsletter.save') }}" method="POST">@csrf
                                    @if(session('success'))
                                        <div class="alert alert-success">{{ session('success') }}</div>
                                    @endif
									<div class="mb-2">
										<input class="form-control w-100 text-center" placeholder="Email address…" type="email" name="email">
									</div>
									<button class="btn btn-default btn-full" type="submit">Sign Up</button>
								</form>
								<span class="newsletter-privacy text-center mt-3">By signing up, you agree to our <a href="{{ route('policy') }}">Privacy Policy</a></span>
							</div>
						</div>


                        <!-- widget advertisement -->
                        <div class="widget no-container rounded text-md-center">
                            <span class="ads-title">- Sponsored Ad -</span>
                            <a href="#" class="widget-ads">
                                <img src="{{ asset('themes/theme1/images/ads/ad-360.png') }}" alt="Advertisement" />
                            </a>
                        </div>
                    </div>

                </div>

			</div>

		</div>
	</section>

@endsection

