@extends('layouts.app')

@section('content')
<head>
<title>UNI-Threads</title>
</head>
<div>
		<h1>CS210: Data Structures & Algorithms</h1>
        <a href="/computerscience">Go Back to Computer Science</a>
		<form>
			<i class="icon-search"></i>
			<input type="text" name="search" placeholder="Search Module Code.."> <!-- Module search bar -->
		</form>

		<hr>

		<a href='/posts/create' class='btn btn-default'> Create post</a>
			
</div>

<h1>Post List, Have something to share? Share it here!</h1>

<div id="content">
		<hr>
@if(count($posts)>0)
	@foreach($posts as $post)
		<div class="well">
			<div class="row">
				<div class="col-md-4 col-sm-4">
					<img style="width:100%" src="/storage/files/{{$post->files}}">
				</div>

				<div class="col-md-4 col-sm-4">
						<a href="/posts/{{$post->id}}">{{$post->title}}</a>   <!--Where is this $post coming from? Not from PagesController@cs210-->
						<hr><small>Written on {{$post->created_at}}</small>	<!--Where is this $post coming from? Not from PagesController@cs210-->
						<small><strong>By {{$post->created_at}}</strong></small>
				</div>	
			</div>
		</div>
			@endforeach
		@else
			<p>no posts</p>
		@endif
			

		</div>
		</body>
		@endsection