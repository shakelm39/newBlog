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
                                                <th>User Name</th>
                                                <th>Title</th>
                                                <th>Sub Title</th>
                                                <th>Slug</th>
                                                <th>Content</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
											
											@foreach($post as $key => $posts)
                                            <tr>
                                                <td>{{$key+1}}</td>
                                                <td>{{$posts->user->name}}</td>
                                                <td>{{$posts->title}}</td>
                                                <td>{{$posts->subTitle}}</td>
                                                <td>{{$posts->slug}}</td>
                                                <td>{{$posts->content}}</td>
                                                <td>
                                                    <a href="{{route('post.edit',$posts->id)}}" class="btn btn-sm btn-success"><i class="fa fa-edit"></i></a>
                                                    <a href="{{route('post.destroy',$posts->id)}}" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure to delete this data?')"><i class="fa fa-trash"></i></a>
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