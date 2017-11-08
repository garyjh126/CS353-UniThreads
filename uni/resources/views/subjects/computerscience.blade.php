@extends('layouts.app')

@section('content')
<head>
<title>UNI-Threads</title>
</head>
<div>
		<h1>Computer Science</h1>
        <a href="/subjects">Go Back to Subjects</a>
		<form method="post" action="search.php?go" id="searchform">
			<i class="icon-search"></i>
			<input type="text" name="search" placeholder="Search Module Code.."> <!-- Module search bar -->
			<input type="submit" name=submit value=Search>
		</form>
</div>

<div id="content">
	
	
	<h2>Modules</h2><!-- Title to show what page you are on -->
	

@if(count($mods)>1)
	@foreach($mods as $mod)

	<a href="/mods/{{$mod->id}}">{{$mod->title}}</a> 
	<hr>
	@endforeach
@else
	<p>no mods</p>
@endif

</div>
</body>
@endsection