@extends('frontend.layouts.master')
@section('main-content')

	<div class="section search-result-wrap">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="heading">Category: {{$allPost->title}}</div>
				</div>
			</div>
			<div class="row posts-entry">
				<div class="col-lg-8">
					@foreach($allPost->posts as $post)
						@if( $post->published==1)
						<div class="blog-entry d-flex blog-entry-search-item">
							<a href="{{route('single.post',$post->id)}}" class="img-link me-4">
								<img src="{{asset('frontend/user')}}/images/img_1_sq.jpg" alt="Image" class="img-fluid">
							</a>
							<div>
								<span class="date">{{$post->created_at->format('d-M,Y')}} &bullet; <a href="#">{{$allPost->title}}</a></span>
								<h2><a href="{{route('single.post',$post->id)}}">{{$post->title}}</a></h2>
								<p>{!! Str::Limit($post->content , 200) !!}</p>
								<p><a href="{{route('single.post',$post->id)}}" class="btn btn-sm btn-outline-primary">Read More</a></p>
							</div>
						</div>
						@endif
					@endforeach
					
					<div class="row text-start pt-5 border-top">
						<div class="col-md-12">
							<div class="custom-pagination">
								<span>1</span>
								<a href="#">2</a>
								<a href="#">3</a>
								<a href="#">4</a>
								<span>...</span>
								<a href="#">15</a>
							</div>
						</div>
					</div>

				</div>

				<div class="col-lg-4 sidebar">
					
					<div class="sidebar-box search-form-wrap mb-4">
						<form action="#" class="sidebar-search-form">
							<span class="bi-search"></span>
							<input type="text" class="form-control" id="s" placeholder="Type a keyword and hit enter">
						</form>
					</div>
					<!-- END sidebar-box -->
					<div class="sidebar-box">

						<!-- popular post start-->
						<h3 class="heading">Popular Posts</h3>
						<div class="post-entry-sidebar">
							<ul>
								@foreach ($posts as $post)
								<li>
									<a href="{{route('single.post',$post->id)}}">
										<img src="{{asset('frontend/user')}}/images/img_1_sq.jpg" alt="Image placeholder" class="me-4 rounded">
										<div class="text">
											<h4>{!!Str::limit($post->content,60)!!}</h4>
											<div class="post-meta">
												<span class="mr-2">{{$post->created_at->format('d-M,Y')}}</span>
											</div>
										</div>
									</a>
								</li>
								@endforeach
								<!-- <li>
									<a href="">
										<img src="{{asset('frontend/user')}}/images/img_2_sq.jpg" alt="Image placeholder" class="me-4 rounded">
										<div class="text">
											<h4>There’s a Cool New Way for Men to Wear Socks and Sandals</h4>
											<div class="post-meta">
												<span class="mr-2">March 15, 2018 </span>
											</div>
										</div>
									</a>
								</li>
								<li>
									<a href="">
										<img src="{{asset('frontend/user')}}/images/img_3_sq.jpg" alt="Image placeholder" class="me-4 rounded">
										<div class="text">
											<h4>There’s a Cool New Way for Men to Wear Socks and Sandals</h4>
											<div class="post-meta">
												<span class="mr-2">March 15, 2018 </span>
											</div>
										</div>
									</a>
								</li> -->
							</ul>
						</div>
						<!-- popular post end-->
					</div>
					
					<!-- END sidebar-box -->

					<div class="sidebar-box">
					
						<h3 class="heading">Categories</h3> 
						
						<ul class="categories">
							
							@foreach($categories as $key=>$category)
							<li>
								<a href="{{$category->id}}">{{$category->title}} 
									
										@if( $post->published==1)
										<span>({{count($category->posts)}})</span>
										@endif
									
									</a>
									
							</li>
							@endforeach
						</ul>
						
					</div>
					<!-- END sidebar-box -->

					<div class="sidebar-box">
						<h3 class="heading">Tags</h3>
						<ul class="tags">
							<li><a href="#">Travel</a></li>
							<li><a href="#">Adventure</a></li>
							<li><a href="#">Food</a></li>
							<li><a href="#">Lifestyle</a></li>
							<li><a href="#">Business</a></li>
							<li><a href="#">Freelancing</a></li>
							<li><a href="#">Travel</a></li>
							<li><a href="#">Adventure</a></li>
							<li><a href="#">Food</a></li>
							<li><a href="#">Lifestyle</a></li>
							<li><a href="#">Business</a></li>
							<li><a href="#">Freelancing</a></li>
						</ul>
					</div>

				</div>
			</div>
		</div>
	</div>

@endsection  