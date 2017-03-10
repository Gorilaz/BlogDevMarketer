@extends('main')
@section('title','| All Posts')
@section("stylesheets")
    <link rel="stylesheet" type="text/css" href="css/styles.css">
@endsection
@section('content')
	<div class="row">
		<div class="col-md-10">
			<h1>All Posts</h1>
		</div>

		<div class="col-md-2">
			<a href="{{ route('posts.create')}}" class="btn btn-primary btn-lg btn-block btn1-spacing">Create post</a>
		</div>
		<div class="col-md-12">
			<hr>
		</div>
		
	</div>	
	<div class="row">
		<div class="col-md-12">
			<table class="table">
				<thead>
					<th>#</th>
					<th>Title</th>
					<th>Body</th>
					<th>Created at</th>
					<th></th>
				</thead>
				
				<tbody>
					@foreach($posts as $post)
						<tr>
							<th>{{$post->id}}</th>
							<td>{{substr($post->title,0,20)}}</td>
							<td>{{substr($post->body,0,50)}}
							{{strlen($post->body)>50 ? '...' : ''}}</td>
							<td>{{date('M j, Y',strtotime($post->created_at))}}</td>

							<td><a  href="{{route('posts.edit',$post->id)}}" class="btn btn-default">Edit</a>
							<a href="{{route('posts.show',$post->id)}}" class="btn btn-default">View</a></td>

							
						</tr>

					@endforeach
				</tbody>	
				
			</table>
			<div class="text-center">
				{!! $posts->links(); !!}
			</div>
		</div>
	</div>
@endsection

