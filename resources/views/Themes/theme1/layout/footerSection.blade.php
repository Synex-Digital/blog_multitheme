	<footer>
		<div class="container-xl">
			<div class="footer-inner">
				<div class="row d-flex align-items-center gy-4">
					<!-- copyright text -->
					<div class="col-md-4">
						<span class="copyright">© 2024 {{ $configs->name }}. All Rights Reserved.</span><br>
                        <span class="copyright">Edited by Synex Digital.</span>
					</div>

					<!-- social icons -->
					<div class="col-md-4 text-center">
						<ul class="social-icons list-unstyled list-inline mb-0">
                            @foreach ($icon as $favicon)
                                <li class="list-inline-item"><a href="{{ $favicon->link }}"><i class="{{ $favicon->logo }}"></i></a></li>
                            @endforeach
						</ul>
					</div>

					<!-- go to top button -->
					<div class="col-md-4">
						<a href="#" id="return-to-top" class="float-md-end"><i class="icon-arrow-up"></i>Back to Top</a>
					</div>
				</div>
			</div>
		</div>
	</footer>
