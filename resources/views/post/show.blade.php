@extends('main')
@section('title','|View Post')
@section('content')

<div class="row">

	<div class="col-md-8">
		<h1>{{$post->title}}</h1>
		<p class="lead">{{$post->body}}</p>
	</div>
	
	<div class="col-md-4">
		<div class="well">
			<dl class="dl-horizontal">
			  <label>Url:</label>
			  <p><a href="{{ url($post->slug) }}">{{ url($post->slug) }}</a></p>
			</dl>

			<dl class="dl-horizontal">
			  <label>Created at:</label>
			  <p>{{date("M j, Y H:i",strtotime($post->created_at))}}</p>
			</dl>

			<dl class="dl-horizontal">
			  <label>Last updated:</label>
			  <p>{{date("M j, Y H:i",strtotime($post->updated_at))}}</p>
			</dl>
			<hr>
			<div class="row">
				<div class="col-md-6">
				{!! Html::linkRoute('posts.edit','Edit',array($post->id),array('class'=> 'btn btn-primary btn-block')) !!}
								
				</div>
				<div class="col-md-6">
					{!! Form::open(['method'=>'DELETE','route'=>['posts.destroy',$post->id]]) !!}
					{!! Form::submit('DELETE',array('class'=>'btn btn-danger btn-block')) !!}
					{!! Form::close() !!}
					
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					{!! Html::linkRoute('posts.index','Show all posts',[],array('class'=> 'btn btn-default btn-block btn-h1-spacing')) !!}
				</div>	
			</div>
		</div>
	</div>		
	
</div>
@endsection