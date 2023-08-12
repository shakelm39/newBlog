@extends('backend.layouts.master')
@section('main-content')
			<!-- page content -->
			<div class="right_col" role="main">
				<div class="">
					<div class="page-title">
						<div class="title_left">
							<h3>Edit Post</h3>
						</div>
					</div>
					<div class="clearfix"></div>
					<div class="row">
						<div class="col-md-12 col-sm-12 ">
							<div class="x_panel">
								
								<div class="x_content">
                                    @if(session('success'))
                                        <div class="alert alert-success">{{session('success')}}</div>
                                    @endif
									<br />
									<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="{{route('post.update')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $post->id}}"
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="category_id"> Category <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <select name="category_id" class="form-control">
                                                    @foreach($categories as $category)
                                                    <option value="{{ $category->id }}"  {{ ($category->id==$post->category->id) ? 'selected' : '' }}>{{ $category->title }}</option>
                                                   @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="title">Title <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input type="text" id="title" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ $post->title}}">
                                                <span class="text-danger"><strong>@error('title'){{$message}}@enderror</strong></span>
                                            </div>
                                            
                                        </div>
                                       
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="subTitle">Sub Title <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input type="text" id="subTitle" name="subTitle"  class="form-control @error('subTitle') is-invalid @enderror" value="{{ $post->subTitle }}">
                                                <span class="text-danger"><strong>@error('subTitle'){{$message}}@enderror</strong></span>
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="content">Content <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6">
                                                <textarea name="content" cols="80" rows="10" id="editor">{{$post->content}}</textarea>
                                                <span class="text-danger"><strong>@error('content'){{$message}}@enderror</strong></span>
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="content">Image <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 ">
                                            <img src="{{asset('uploads/post/images/'.$post->img)}}"  alt="" width="120" height="80" ><br><br>
                                                <input type="file" name="img" {{asset('uploads/post/images/'.$post->img) ? 'slected' :''}}>
                                                <span class="text-danger"><strong>@error('img'){{$message}}@enderror</strong></span>
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="title">Post Status <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <select name="published" class="form-control">
                                                    <option value="0" {{$post->published==0 ? 'selected': ''}}>Pending</option>
                                                    <option value="1" {{$post->published==1 ? 'selected': ''}}>Published</option>
                                                </select>
                                            </div>
                                            
                                        </div>
                                        <div class="ln_solid"></div>
                                        <div class="item form-group">
                                            <div class="col-md-6 col-sm-6 offset-md-3">
                                                <button type="submit" class="btn btn-success">Update Post</button>
                                            </div>
                                        </div>

                                    </form>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
			<!-- /page content -->

            <script>
            function previewFile(input){
                var file = $("input[type=file]").get(0).files[0];
        
                if(file){
                    var reader = new FileReader();
        
                    reader.onload = function(){
                        $("#previewImg").attr("src", reader.result);
                    }
        
                    reader.readAsDataURL(file);
                }
            }
        </script>

@endsection

