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
				<a href="\projects\{{$project->id}}\description" class="button big" style="display: inline; float: right;">Back</a>

				<span title="Progress as is">
					<img class="image icon curOverGoalToggleOn" src="\images\icons/add-512.png"
					style="display: none;" />
				</span>
				<div class="curOverGoalHide">
					<img class="image icon curOverGoalToggleOff" src="\images\icons/remove-512.png"  />
					<h2 style="display: inline;">Php {{$project->current}} / Php {{$project->goal}} </h2>
                    <progress id="progressBar" max={{$project->goal}} value={{$project->current}}></progress>
				</div>

				<span title="Computed progress">
					<img class="image icon phpLeftToggleOn" src="\images\icons/add-512.png"
					style="display: none;" />
				</span>
				<div class="phpLeftHide">
					<img class="image icon phpLeftToggleOff" src="\images\icons/remove-512.png"  />
					<h2 style="display: inline;">Php {{$project->goal - $project->current}} left to go!</h2>
				</div>

			</header>
		<!-- Lists -->
			<h3>Donation Details</h3>
			<div class="row">
				<div class="6u 12u$(xsmall)">

					<span title="Unordered">
						<img class="image icon unorderedToggleOn" src="\images\icons/add-512.png"
						style="display: none;" />
					</span>
					<div class="unorderedHide">
						<img class="image icon unorderedToggleOff" src="\images\icons/remove-512.png"  />
						<h4 class="tooltoptext" style="display: inline;">Unordered</h4>
						<ul>
							<li>Dolor pulvinar etiam magna etiam.</li>
							<li>Sagittis adipiscing lorem eleifend.</li>
							<li>Felis enim feugiat dolore viverra.</li>
						</ul>
					</div>					
					
					<span title="Alternate">
						<img class="image icon alternateToggleOn" src="\images\icons/add-512.png"
						style="display: none;" />
					</span>
					<div class="alternateHide">
						<img class="image icon alternateToggleOff" src="\images\icons/remove-512.png"  />
						<h4 class="tooltoptext" style="display: inline;">Alternate</h4>
						<ul class="alt">
							<li>Dolor pulvinar etiam magna etiam.</li>
							<li>Sagittis adipiscing lorem eleifend.</li>
							<li>Felis enim feugiat dolore viverra.</li>
						</ul>
					</div>

				</div>
				<div class="6u$ 12u$(xsmall)"><!-- sidebar -->
					
					<span title="Ordered">
						<img class="image icon orderedToggleOn" src="\images\icons/add-512.png"
						style="display: none;" />
					</span>
					<div class="orderedHide">
						<img class="image icon orderedToggleOff" src="\images\icons/remove-512.png"  />
						<h4 class="tooltoptext" style="display: inline;">Ordered</h4>
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
			</div>
			<header id="userTab" class="alt" style="height: 20em">
			    <nav id="nav">
			    	<img class="image center" src="\images/{{$project->image}}.jpg" alt="" style="max-height: 20em; width: auto;" />
			    </nav>
			</header>
			
		</div>
	</section>
@endsection