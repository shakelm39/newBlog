@extends('frontend.layouts.master')
@section('main-content')

  <div class="site-cover site-cover-sm same-height overlay single-page" style="background-image: url('{{asset('frontend/user')}}/images/hero_5.jpg');">
    <div class="container">
      <div class="row same-height justify-content-center">
        <div class="col-md-6">
          <div class="post-entry text-center">
            <h1 class="mb-4">{{$singlePost->title}}</h1>
            <div class="post-meta align-items-center text-center">
              <figure class="author-figure mb-0 me-3 d-inline-block"><img src="{{asset('uploads/images/'.$singlePost->user->image)}}" alt="Image" class="img-fluid"></figure>
              <span class="d-inline-block mt-1">By {{$singlePost->user->name}}</span>
              <span>&nbsp;-&nbsp; {{$singlePost->created_at->format('F j, Y')}}</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section class="section">
    <div class="container">

      <div class="row blog-entries element-animate">

        <div class="col-md-12 col-lg-8 main-content">

          <div class="post-content-body">
            <p>{{$singlePost->title}}</p>
            <div class="row my-4">
              <div class="col-md-12 mb-4">
                <img src="{{asset('uploads/post/images/'.$singlePost->img)}}" alt="Image placeholder" class="img-fluid  rounded">
              </div>
              <div class="col-md-6 mb-4">
                <img src="{{asset('uploads/post/images/'.$singlePost->img)}}" alt="Image placeholder" class="img-fluid rounded ">
              </div>
              <div class="col-md-6 mb-4">
                <img src="{{asset('uploads/post/images/'.$singlePost->img)}}" alt="Image placeholder" class="img-fluid rounded ">
              </div>
            </div>
            <p>{!!$singlePost->content!!}</p>
          </div>


          <div class="pt-5">
            <p>Categories: {{$singlePost->category->title}}  Tags: <a href="#">#manila</a>, <a href="#">#asia</a></p>
          </div>


          <div class="pt-5 comment-wrap">
            <h3 class="mb-5 heading">{{count($postComment)}} Comments</h3>
            <ul class="comment-list">
            @foreach($postComment as $comment)
            @if($comment->published==1)
              <li class="comment">
                <div class="vcard">
                  <img src="{{asset('uploads/images/'.$comment->user->image)}}" alt="Image placeholder">
                </div>
                <div class="comment-body">
                  
                  <h3>{{$comment->user->name}}</h3>
                 
                  <div class="meta">{{$comment->created_at}}</div>
                  <p>{{$comment->comment}}</p>
                  
                </div>
              </li>
              @endif
              @endforeach
              
            </ul>
            <!-- END comment-list -->

            <div class="comment-form-wrap pt-5">
              <h3 class="mb-5">Leave a comment</h3>
              <form action="{{route('comment.store')}}" class="p-5 bg-light" method="post">
                @csrf
               
                <div class="form-group">
                  <label for="comment">Comment</label>
                  <textarea  name="comment"  cols="30" rows="10" class="form-control"></textarea>
                </div>
                <input type="hidden" name ="post_id" value="{{$singlePost->id}}">
                <input type="hidden" name ="user_id" value="{{$singlePost->user->id}}">
                <div class="form-group">
                  <input type="submit" value="Post Comment" class="btn btn-primary">
                </div>

              </form>
            </div>
          </div>

        </div>

        <!-- END main-content -->

        <div class="col-md-12 col-lg-4 sidebar">
          <div class="sidebar-box search-form-wrap">
            <form action="#" class="sidebar-search-form">
              <span class="bi-search"></span>
              <input type="text" class="form-control" id="s" placeholder="Type a keyword and hit enter">
            </form>
          </div>
          <!-- END sidebar-box -->
          <div class="sidebar-box">
            <div class="bio text-center">
              <img src="{{asset('uploads/images/'.$singlePost->user->image)}}" alt="Image Placeholder" class="img-fluid mb-3">
              <div class="bio-body">
                <h2>{{$singlePost->user->name}}</h2>
                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem facilis sunt repellendus excepturi beatae porro debitis voluptate nulla quo veniam fuga sit molestias minus.</p>
                <p><a href="#" class="btn btn-primary btn-sm rounded px-2 py-2">Read my bio</a></p>
                <p class="social">
                  <a href="#" class="p-2"><span class="fa fa-facebook"></span></a>
                  <a href="#" class="p-2"><span class="fa fa-twitter"></span></a>
                  <a href="#" class="p-2"><span class="fa fa-instagram"></span></a>
                  <a href="#" class="p-2"><span class="fa fa-youtube-play"></span></a>
                </p>
              </div>
            </div>
          </div>
          <!-- END sidebar-box -->  
          <!-- popular post start -->
          <div class="sidebar-box">
            <h3 class="heading">Popular Posts</h3>
            <div class="post-entry-sidebar">
              <ul>
                @foreach ($posts as $post)
                <li>
                  <a href="{{route('single.post',$post->id)}}">
                    <img src="{{asset('uploads/post/images/'.$post->img)}}" alt="Image placeholder" class="me-4 rounded">
                    <div class="text">
                      <h4>{!!Str::limit($post->content,60)!!}</h4>
                      <div class="post-meta">
                        <span class="mr-2">{{$post->created_at->format('F j, Y')}} </span>
                      </div>
                    </div>
                  </a>
                </li>
                @endforeach
                
              </ul>
            </div>
          </div>
            <!-- popular post end -->
          <!-- END sidebar-box -->

          <div class="sidebar-box">
            <h3 class="heading">Categories</h3>
            <ul class="categories">
              @foreach ($categories as $category)
              <li>
                <a href="#">{{$category->title}}
                  <span>({{count($category->posts)}})</span>
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
        <!-- END sidebar -->

      </div>
    </div>
  </section>


  <!-- Start posts-entry -->
  <section class="section posts-entry posts-entry-sm bg-light">
    <div class="container">
      <div class="row mb-4">
        <div class="col-12 text-uppercase text-black">More Blog Posts</div>
      </div>
      <div class="row">
        @foreach ($posts as $key=> $post)
        @if($key <4)
        <div class="col-md-6 col-lg-3">
          <div class="blog-entry">
            <a href="{{route('single.post',$post->id)}}" class="img-link">
              <img src="{{asset('uploads/post/images/'.$post->img)}}" alt="Image" class="img-fluid img-small">
            </a>
            <span class="date">{{$post->created_at->format('F j ,Y')}}</span>
            <h2><a href="{{route('single.post',$post->id)}}">{{$post->title}}</a></h2>
            <p>{!!$post->content!!}</p>
            <p><a href="{{route('single.post',$post->id)}}" class="read-more">Continue Reading</a></p>
          </div>
        </div>
        @endif
        @endforeach
        
      </div>
    </div>
  </section>
  <!-- End posts-entry -->

 

@endsection  