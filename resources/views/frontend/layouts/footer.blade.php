<footer class="site-footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<div class="widget">
						<h3 class="mb-4">About</h3>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
					</div> <!-- /.widget -->
					<div class="widget">
						<h3>Social</h3>
						<ul class="list-unstyled social">
							<li><a href="#"><span class="icon-instagram"></span></a></li>
							<li><a href="#"><span class="icon-twitter"></span></a></li>
							<li><a href="#"><span class="icon-facebook"></span></a></li>
							<li><a href="#"><span class="icon-linkedin"></span></a></li>
							<li><a href="#"><span class="icon-pinterest"></span></a></li>
							<li><a href="#"><span class="icon-dribbble"></span></a></li>
						</ul>
					</div> <!-- /.widget -->
				</div> <!-- /.col-lg-4 -->
				<div class="col-lg-4 ps-lg-5">
					<div class="widget">
						<h3 class="mb-4">Company</h3>
						<ul class="list-unstyled float-start links">
							<li><a href="#">About us</a></li>
							<li><a href="#">Services</a></li>
							<li><a href="#">Vision</a></li>
							<li><a href="#">Mission</a></li>
							<li><a href="#">Terms</a></li>
							<li><a href="#">Privacy</a></li>
						</ul>
						<ul class="list-unstyled float-start links">
							<li><a href="#">Partners</a></li>
							<li><a href="#">Business</a></li>
							<li><a href="#">Careers</a></li>
							<li><a href="#">Blog</a></li>
							<li><a href="#">FAQ</a></li>
							<li><a href="#">Creative</a></li>
						</ul>
					</div> <!-- /.widget -->
				</div> <!-- /.col-lg-4 -->
				<div class="col-lg-4">
					<div class="widget">
						<h3 class="mb-4">Recent Post Entry</h3>
						<div class="post-entry-footer">
							<ul>
								@foreach ($posts as $key=> $post)
								@if($key<3)
								<li>
									<a href="{{route('single.post',$post->id)}}">
										<img src="{{asset('uploads/post/images/'.$post->img)}}" alt="Image placeholder" class="me-4 rounded">
										<div class="text">
											<h4>{{$post->title}}</h4>
											<div class="post-meta">
												<span class="mr-2">{{$post->created_at->format('F j , Y')}} </span>
											</div>
										</div>
									</a>
								</li>
								@endif
								@endforeach
								
							</ul>
						</div>


					</div> <!-- /.widget -->
				</div> <!-- /.col-lg-4 -->
			</div> <!-- /.row -->
<div class="row mt-5">
				<div class="col-12 text-center">

            <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script>. All Rights Reserved. &mdash; Designed with love by <a href="https://newsblogbd.com">Shakel</a>  Distributed by <a href="https://www.newsblogbd.com">Newsblog</a>
            </p>
          </div>
        </div>
      </div> <!-- /.container -->
    </footer> <!-- /.site-footer -->

    <!-- Preloader -->
    <div id="overlayer"></div>
    <div class="loader">
    	<div class="spinner-border text-primary" role="status">
    		<span class="visually-hidden">Loading...</span>
    	</div>
    </div>


    <script src="{{asset('frontend/user')}}/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('frontend/user')}}/js/tiny-slider.js"></script>

    <script src="{{asset('frontend/user')}}/js/flatpickr.min.js"></script>


    <script src="{{asset('frontend/user')}}/js/aos.js"></script>
    <script src="{{asset('frontend/user')}}/js/glightbox.min.js"></script>
    <script src="{{asset('frontend/user')}}/js/navbar.js"></script>
    <script src="{{asset('frontend/user')}}/js/counter.js"></script>
    <script src="{{asset('frontend/user')}}/js/custom.js"></script>

    
  </body>
  </html>
