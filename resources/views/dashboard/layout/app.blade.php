<!DOCTYPE html>
<html lang="en">
    @php
        $config = App\Models\Config::first();
    @endphp
<head>
    @include('dashboard.layout.headerlink')
    @yield('style')
</head>
<body>

    @include('dashboard.layout.header')

		<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
			<div class="container-fluid">
                @yield('content')
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->

        @include('dashboard.layout.footer')

		<!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    @yield('script')
    @include('dashboard.layout.footerlink')
</body>
</html>
