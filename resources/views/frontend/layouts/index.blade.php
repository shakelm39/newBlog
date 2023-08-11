
@extends('frontend.layouts.master')
@section('main-content')

<!-- Start retroy layout blog posts -->
    <section class="section bg-light">
		<div class="container">
			<div class="row align-items-stretch retro-layout">
				<div class="col-md-4">
					<a href="single.html" class="h-entry mb-30 v-height gradient">

						<div class="featured-img" style="background-image: url('{{asset('frontend/user')}}/images/img_2_horizontal.jpg');"></div>

						<div class="text">
							<span class="date">Apr. 14th, 2022</span>
							<h2>AI can now kill those annoying cookie pop-ups</h2>
						</div>
					</a>
					<a href="single.html" class="h-entry v-height gradient">

						<div class="featured-img" style="background-image: url('{{asset('frontend/user')}}/images/img_5_horizontal.jpg');"></div>

						<div class="text">
							<span class="date">Apr. 14th, 2022</span>
							<h2>Don’t assume your user data in the cloud is safe</h2>
						</div>
					</a>
				</div>
				<div class="col-md-4">
					<a href="single.html" class="h-entry img-5 h-100 gradient">

						<div class="featured-img" style="background-image: url('{{asset('frontend/user')}}/images/img_1_vertical.jpg');"></div>

						<div class="text">
							<span class="date">Apr. 14th, 2022</span>
							<h2>Why is my internet so slow?</h2>
						</div>
					</a>
				</div>
				<div class="col-md-4">
					<a href="single.html" class="h-entry mb-30 v-height gradient">

						<div class="featured-img" style="background-image: url('{{asset('frontend/user')}}/images/img_3_horizontal.jpg');"></div>

						<div class="text">
							<span class="date">Apr. 14th, 2022</span>
							<h2>Startup vs corporate: What job suits you best?</h2>
						</div>
					</a>
					<a href="single.html" class="h-entry v-height gradient">

						<div class="featured-img" style="background-image: url('{{asset('frontend/user')}}/images/img_4_horizontal.jpg');"></div>

						<div class="text">
							<span class="date">Apr. 14th, 2022</span>
							<h2>Thought you loved Python? Wait until you meet Rust</h2>
						</div>
					</a>
				</div>
			</div>
		</div>
	</section>
	<!-- End retroy layout blog posts -->

	<!-- Start posts-entry -->
	@foreach($categories as $category)
	<section class="section posts-entry">
		<div class="container">
			<div class="row mb-4">
				<div class="col-sm-6">
					<h2 class="posts-entry-title">{{$category->title}}</h2>
				</div>
				<div class="col-sm-6 text-sm-end"><a href="{{route('allPost.show',$category->id)}}" class="read-more">View All</a></div>
			</div>
			<div class="row g-3">
				<div class="col-md-9">
					<div class="row g-3">
						@foreach($category->posts as $key => $post)
							@if( $post->published==1)
								@if($key < 2)
								<div class="col-md-6">
									<div class="blog-entry">
										<a href="{{route('single.post',$post->id)}}" class="img-link">
											<img src="{{asset('frontend/user')}}/images/img_1_sq.jpg" alt="Image" class="img-fluid">
										</a>
										<span class="date">{{$post->created_at->format('d-M,Y')}}</span>
										<h2><a href="{{route('single.post',$post->id)}}">{{$post->title}}</a></h2>
										<p>{!! Str::Limit($post->content , 100) !!}</p>
										
										<p><a href="{{route('single.post',$post->id)}}" class="btn btn-sm btn-outline-primary">Read More</a></p>
									</div>
								</div>
								@else
								<div class="col-md-6 col-lg-3">
									<div class="blog-entry">
										<a href="{{route('single.post',$post->id)}}" class="img-link">
											<img src="{{asset('frontend/user')}}/images/img_3_horizontal.jpg" alt="Image" class="img-fluid">
										</a>
										<span class="date">{{$post->created_at->format('d-M,Y')}}</span>
										<h2><a href="{{route('single.post',$post->id)}}">{{$post->title}}</a></h2>
										<p>{!! Str::Limit($post->content , 40) !!}</p>
										<p><a href="{{route('single.post',$post->id)}}" class="read-more">Continue Reading</a></p>
									</div>
								</div>
								@endif
							@endif
						@endforeach
						
					</div>
				</div>
				<!-- sidebar content start-->
				<div class="col-md-3">
					<ul class="list-unstyled blog-entry-sm">
						@foreach($category->posts as $key => $post)
							@if($key<5)
								<li>
									<span class="date">{{$post->created_at->format('d-M,Y')}}</span>
									<h3><a href="{{route('single.post',$post->id)}}">{{$post->title}}</a></h3>
									<p>{!! Str::Limit($post->content , 40) !!}</p>
									<p><a href="{{route('single.post',$post->id)}}" class="read-more">Continue Reading</a></p>
								</li>
							@else
							@endif
						@endforeach
						
					</ul>
				</div>
				<!-- sidebar content start-->
			</div>
		</div>
	</section>
	@endforeach
	<!-- End posts-entry -->

	
 @endsection   