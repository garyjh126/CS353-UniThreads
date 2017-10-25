@extends('layouts.app')

@section('content')
<head>
<title>UNI-Threads</title>
</head>
<div>
		<h1>This is your profile page</h1>
        <a href="/subjects">Go Back to Subjects</a>
		<form>
			<i class="icon-search"></i>
			<input type="text" name="search" placeholder="Search through your posts.."> <!-- Module search bar -->
		</form>
</div>

<div id="content">
	
	<p>Your previous posts and questions.</p>

</div>
</body>
@endsection