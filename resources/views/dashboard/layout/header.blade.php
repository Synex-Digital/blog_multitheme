

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="{{ route('dashboard')}}" class="brand-logo">
                @if ($config)
                    <img class="logo-abbr" src="{{ url('/'.$config->logo) }}" alt="">
                @endif

            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->



		<!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="dashboard_bar">

                            </div>
                        </div>
                        <ul class="navbar-nav header-right">

                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="javascript:void(0)" role="button" data-bs-toggle="dropdown">
                                    <img src="{{ asset('dashboards/theme1/images/profile/admin.jpg') }}" width="10" alt="">
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="{{ url('/user') }}" class="dropdown-item ai-icon">
                                        <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                        <span class="ms-2">Profile </span>
                                    </a>


                                    <a href="{{ route('logout') }}" class="dropdown-item ai-icon" onclick="event.    preventDefault();
                                        document.getElementById('logout-form').submit();">

                                        <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                                        <span class="ms-2"></span>
                                        {{ __('Logout') }}
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"     class="d-none">
                                            @csrf
                                        </form>
                                    </a>

                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
       <div class="deznav">
            <div class="deznav-scroll">
				<ul class="metismenu" id="menu">
                    <li><a class="has-arrow ai-icon" href="{{ route('dashboard') }}" aria-expanded="false">
							<i class="ti-home"></i>
							<span class="nav-text">Dashboard</span>
						</a>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-381-layer-1"></i>
							<span class="nav-text">Category</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('category.index') }}">Create</a></li>
                            <li><a href="{{ route('category.create') }}">View</a></li>

                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-381-notepad"></i>
							<span class="nav-text">Blogs</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('blog.index') }}">Create</a></li>
                            <li><a href="{{ route('blog.create') }}">View</a></li>

                        </ul>
                    </li>

                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-381-settings-6"></i>
                            <span class="nav-text">Settings</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('config.index') }}">Add Configurations</a></li>
                            <li><a href="{{ route('config.create') }}">View Configurations</a></li>
                            <li><a href="{{ route('social.index') }}">Social Links</a></li>
                            <li><a href="{{ route('custom_code.index') }}">Custom Codes</a></li>
                            <li><a href="{{ route('theme_select.index') }}">Theme Select</a></li>

                        </ul>
                    </li>

                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="ti-world"></i>
                            <span class="nav-text">SEO</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('seo.index') }}">Create</a></li>
                            <li><a href="{{ route('seo.create') }}">View</a></li>

                        </ul>
                    </li>

                </ul>

				<div class="copyright">
					<p><strong>Blogs Dashboard</strong> © 2024 All Rights Reserved</p>
					<p>Made with <span class="heart"></span> by Synex Digital</p>
				</div>
			</div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->
