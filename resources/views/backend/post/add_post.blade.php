@extends('backend.layouts.master')
@section('main-content')
			<!-- page content -->
			<div class="right_col" role="main">
				<div class="">
					<div class="page-title">
						<div class="title_left">
							<h3>Add Post</h3>
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
									<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="{{route('post.store')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="title">Title <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input type="text" id="title" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}">
                                                <span class="text-danger"><strong>@error('title'){{$message}}@enderror</strong></span>
                                            </div>
                                            
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="subTitle">Sub Title <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input type="text" id="subTitle" name="subTitle"  class="form-control @error('subTitle') is-invalid @enderror" value="{{ old('subTitle') }}">
                                                <span class="text-danger"><strong>@error('subTitle'){{$message}}@enderror</strong></span>
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="subTitle"> Category <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <select name="category_id" class="form-control">
                                                    <option value="">Select Category</option>
                                                    @foreach($categories as $category)
                                                    <option value="{{$category->id}}">{{$category->title}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="content">Content <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <textarea name="content" class="form-control" cols="30" rows="10" id="editor"></textarea>
                                                <span class="text-danger"><strong>@error('content'){{$message}}@enderror</strong></span>
                                            </div>
                                        </div> 
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="img">Image <span class="required">*</span>
                                            </label>
                                            <input type="file" class="col-md-6 col-sm-6" name="img">
                                        </div>
                                        
                                        <div class="ln_solid"></div>
                                        <div class="item form-group">
                                            <div class="col-md-6 col-sm-6 offset-md-3">
                                                <button type="submit" class="btn btn-success">Add Post</button>
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



@endsection

