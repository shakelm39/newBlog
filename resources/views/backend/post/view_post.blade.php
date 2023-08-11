@extends('backend.layouts.master')
@section('main-content')
			<!-- page content -->
			<div class="right_col" role="main">
				<div class="">
					<div class="page-title">
						<div class="title_left">
							<h3>Post List</h3>
						</div>
					</div>
					<div class="clearfix"></div>
					<div class="row">
						<div class="col-md-12 col-sm-12 ">
							<div class="x_panel">
								
								<div class="x_content">
									<br />
									<table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>Sl</th>
                                                <th>Category</th>
                                                <th>Title</th>
                                                <th>Sub Title</th>
                                                <th>Slug</th>
                                                <th>Content</th>
                                                <th>Status</th>
                                                <th>Created_By</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
											
											@foreach($posts as $key=> $post)
                                            <tr>
                                                <td>{{$key+1}}</td>
                                                <td>{{$post->category->title}}</td>
                                                <td>{{$post->title}}</td>
                                                <td>{{$post->subTitle}}</td>
                                                <td>{{$post->slug}}</td>
                                                <td>{!!$post->content!!}</td>
                                                <td>
                                                    @if($post->published==0)
                                                    <span class="badge bg-warning">{{'Pending'}}</span>
                                                    @else
                                                    <span class="badge bg-success text-white">{{'Published'}}</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    {{Auth::user()->name}}<br>
                                                    {{$post->created_at}}

                                                </td>
                                                <td width="10%">
                                                    <a href="{{route('post.edit',$post->id)}}" class="btn btn-sm btn-success"><i class="fa fa-edit"></i></a>
                                                    <a href="{{route('post.destroy',$post->id)}}" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure want to delete this data?')"><i class="fa fa-trash"></i></a>
                                                </td>
                                                
                                                
                                            </tr>
											
											@endforeach
											
                                        </tbody>
                                        </table>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
			<!-- /page content -->



@endsection