@extends ('layout_main')

<!-- Content -->
@section('content')
	<section id="main" class="wrapper">
		<div class="container">

			<header class="major special">
				<h2>{{$project->title}}</h2>
	            <a href="\projects\{{$project->id}}\edit" class="button special big" style="display: inline; float: right;">Edit</a>
				<p>Php {{$project->goal - $project->current}} left to go!</p>
			</header>

			<a href="#" class="image fit"><img src="\images/{{$project->image}}.jpg" alt="" /></a>
			<p>{{$project->description}}</p>

		</div>
	</section>
@endsection