@extends('main')
@section('title','| Homepage')

@section('content')
     
          <div class="row">
              <div class="col-md-10 col-md-offset-1">
                  <div class="jumbotron">
                    <h1>Welcome to my Blog!</h1>
                    <p>...</p>
                    <p><a class="btn btn-primary btn-lg" href="#" role="button">Popular post</a></p>
                  </div>
              </div>
          </div>
       
        <div class="row">
            <div class="col-md-6 col-md-offset-1" >
                @foreach($posts as $post)
                    <div class="post">
                        <h1>{{$post->title}}</h1>
                        <p>{{substr($post->body,0,300)}}{{ strlen($post->body)>300 ? "..." : "" }}</p>  
                        <a class="btn btn-primary " href="{{url('blog/'.$post->slug)}}" role="button">Read more</a>
                        <hr>
                       
                    </div>
                  
                @endforeach
            </div>
            <div class="col-md-3 col-md-offset-2" >
                <h1> SIDEBAR</h1>
            </div>
        </div>
          
      </div>
 
@endsection
