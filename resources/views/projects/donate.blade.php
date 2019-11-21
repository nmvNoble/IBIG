@extends ('layout_main')

<!-- Banner -->
@section('banner')
    <section id="banner" style="padding: 10em 0 3em 0;">
    	<h2>{{$project->title}} Project Details</h2>
    </section>
@endsection

<!-- Content -->
@section('content')
	<section id="main" class="wrapper">
		<div class="container">
			<header class="major special">
				<a href="\projects\{{$project->id}}\description" class="button big" style="display: inline; float: right;">Back</a>

				<span title="Computed progress">
					<img class="image customIcon phpLeftToggleOn" src="\images\icons/add-512.png"
					style="display: none;" />
				</span>
				<div class="hide" id="phpLeft">
					<img class="image customIcon phpLeftToggleOff" src="\images\icons/remove-512.png"  />
					<h2 style="display: inline;">Php {{$project->goal - $project->current}} left to go!</h2>
				</div>

				<span title="Progress as is">
					<img class="image customIcon curOverGoalToggleOn" src="\images\icons/add-512.png"
					style="display: none;" />
				</span>
				<div class="hide" id="curOverGoal">
					<img class="image customIcon curOverGoalToggleOff" src="\images\icons/remove-512.png"  />
                    <progress class="projectProgress" id="progressBar" max={{$project->goal}} value={{$project->current}}></progress>
                    <h2 class="projectProgressAfter"> Php {{$project->goal}} </h2>
				</div>

			</header>
		<!-- Lists -->
			<h3>Donation Details</h3>
			<div class="row">
				<div class="6u 12u$(xsmall)">

					<span title="Unordered">
						<img class="image customIcon unorderedToggleOn" src="\images\icons/add-512.png"
						style="display: none;" />
					</span>
					<div class="hide" id="unordered">
						<img class="image customIcon unorderedToggleOff" src="\images\icons/remove-512.png"  />
						<h4 class="tooltoptext" style="display: inline;">Unordered</h4>
						<ul>
							<li>Dolor pulvinar etiam magna etiam.</li>
							<li>Sagittis adipiscing lorem eleifend.</li>
							<li>Felis enim feugiat dolore viverra.</li>
						</ul>
					</div>					
					
					<span title="Alternate">
						<img class="image customIcon alternateToggleOn" src="\images\icons/add-512.png"
						style="display: none;" />
					</span>
					<div class="hide" id="alternate">
						<img class="image customIcon alternateToggleOff" src="\images\icons/remove-512.png"  />
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
						<img class="image customIcon orderedToggleOn" src="\images\icons/add-512.png"
						style="display: none;" />
					</span>
					<div class="hide" id="ordered">
						<img class="image customIcon orderedToggleOff" src="\images\icons/remove-512.png"  />
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

<!-- Additional Scripts -->
@section('script')
	<script src="\assets\js\customization\project\donate.js"></script>
@endsection