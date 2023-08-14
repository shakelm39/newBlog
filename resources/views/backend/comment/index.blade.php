@extends('backend.layouts.master')
@section('main-content')
			<!-- page content -->
			<div class="right_col" role="main">
				<div class="">
					<div class="page-title">
						<div class="title_left">
							<h3>Comment List</h3>
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
                                                <th>Post Title</th>
                                                <th>Comment</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
											
											@foreach($posts as  $post)
                                                @foreach($post->postComments as $key=> $comment)
                                               
                                                <tr>
                                                    <td>{{$key+1}}</td>
                                                    <td>{{$comment->user->name}}</td>
                                                    <td>{{$post->title}}</td>
                                                    <td>{{$comment->comment}}</td>
                                                    <td>
                                                        @if($comment->published==0)
                                                        <span class="badge bg-warning">{{'Pending'}}</span>
                                                        @else
                                                        <span class="badge bg-success text-white">{{'Published'}}</span>
                                                        @endif
                                                    </td>
                                                    
                                                    <td width="10%">
                                                        
                                                        <a href="{{route('comment.edit',$comment->id)}}" class="btn btn-sm btn-success" ><i class="fa fa-edit"></i></a>
                                                        <a href="{{route('comment.destroy',$comment->id)}}" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure want to delete this data?')"><i class="fa fa-trash"></i></a>
                                                    </td>
                                                    
                                                    
                                                </tr>
                                                
                                                @endforeach
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