@extends ('layout_main')

<!-- Banner -->
@section('banner')
    <section id="banner" style="padding: 10em 0 3em 0;">
        <h2>{{$project->title}} Project Details</h2>
        <!--<p>Lorem ipsum dolor sit amet nullam consequat <br /> interdum vivamus donce sed libero.</p>
        <ul class="actions">
            <li><a href="#" class="button special big">Get Started</a></li>
        </ul>-->
    </section>
@endsection

<!-- Content -->
@section('content')
	<section id="main" class="wrapper">
		<div class="container">
			<header class="major special">
				<h2>Php {{$project->goal - $project->current}} left to go!</h2>
				<a href="\projects\{{$project->id}}\description" class="button big" style="display: inline; float: right;">Back</a>
			</header>
		<!-- Lists -->
			<h3>Donation Details</h3>
			<div class="row">
				<div class="6u 12u$(xsmall)">

					<h4>Unordered</h4>
					<ul>
						<li>Dolor pulvinar etiam magna etiam.</li>
						<li>Sagittis adipiscing lorem eleifend.</li>
						<li>Felis enim feugiat dolore viverra.</li>
					</ul>

					<h4>Alternate</h4>
					<ul class="alt">
						<li>Dolor pulvinar etiam magna etiam.</li>
						<li>Sagittis adipiscing lorem eleifend.</li>
						<li>Felis enim feugiat dolore viverra.</li>
					</ul>

				</div>
				<div class="6u$ 12u$(xsmall)"><!-- sidebar -->

					<h4>Ordered</h4>
					<ol>
						<li>Dolor pulvinar etiam magna etiam.</li>
						<li>Etiam vel felis at lorem sed viverra.</li>
						<li>Felis enim feugiat dolore viverra.</li>
						<li>Dolor pulvinar etiam magna etiam.</li>
						<li>Etiam vel felis at lorem sed viverra.</li>
						<li>Felis enim feugiat dolore viverra.</li>
					</ol>
				</div>
			</div>
			<header id="userTab" class="alt" style="height: 20em">
			    <nav id="nav">
			    	<img class="image center" src="\images/{{$project->image}}.jpg" alt="" style="max-height: 20em; width: auto;" />
			    </nav>
			</header>
			
		</div>
	</section>
@endsection