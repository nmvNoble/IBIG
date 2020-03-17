@extends ('layout_main')

<!-- Banner -->
@section('banner')
    <section id="banner" style="padding: 10em 0 3em 0;">
    	<h2>{{$project->title}} Project Details</h2>
    </section>
@endsection

<!-- Content -->
@section('content')
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<?php 

	$donateComp = $customize->donateComputed;
	$donateProg= $customize->donateProgress;
	$donateAlt= $customize->donateAlternate;
	$donateOrd= $customize->donateOrdered;
	$donateUno= $customize->donateUnordered;
	?>
	<!-- <script>
		var donateC = <?php echo $donateComp ?>;
		alert(donateC);
	</script> -->
	<section id="main" class="wrapper">
		<div class="container">
			<header class="major special">
				<a href="\projects{!!Request::is('projects/calamities*') ? '\calamities' : ''!!}\{{$project->id}}\description" class="button big" style="display: inline; float: right;">Back</a>
				
				@guest
					<h2 style="display: inline;">Php {{$project->goal - $project->current}} left to go!</h2>
				@else
					<span title="Computed progress">
					<img class="image customIcon phpLeftToggleOn" src="\images\icons/add-512.png"
					style="display: none;" />
					</span>
					<div class="hide" id="phpLeft">
						<img class="image customIcon phpLeftToggleOff" src="\images\icons/remove-512.png"  />
						<h2 style="display: inline;">Php {{$project->goal - $project->current}} left to go!</h2>
					</div>
				@endguest


				@guest
                    <progress class="projectProgress" id="progressBar" max={{$project->goal}} value={{$project->current}}></progress>
                    <h2 class="projectProgressAfter"> Php {{$project->goal}} </h2>
				@else
					<span title="Progress as is">
						<img class="image customIcon curOverGoalToggleOn" src="\images\icons/add-512.png"
						style="display: none;" />
					</span>
					<div class="hide" id="curOverGoal">
						<img class="image customIcon curOverGoalToggleOff" src="\images\icons/remove-512.png"  />
	                    <progress class="projectProgress" id="progressBar" max={{$project->goal}} value={{$project->current}}></progress>
	                    <h2 class="projectProgressAfter"> Php {{$project->goal}} </h2>
					</div>
				@endguest

			</header>
		<!-- Lists -->
			<h3>Donation Details</h3>
			<div class="row">
				<div class="6u 12u$(xsmall)">
					@guest
						<h4 class="tooltoptext" style="display: inline;">How to Donate</h4>
						<ol>
							<li>Visit our center at Sta Rosa bayan.</li>
							<li>Voice your support in any of the Sta Rosa Villages' town hall meetings.</li>
							<li>Contact our FB page.</li>
							<li>Fr Francis will always be present at the Don Bosco Church.</li>
							<li>Mrs. David is stationed and the barangay hall.</li>
						</ol>
					@else
						<span title="How to Donate">
							<img class="image customIcon orderedToggleOn" src="\images\icons/add-512.png"
							style="display: none;" />
						</span>
						<div class="hide" id="ordered">
							<img class="image customIcon orderedToggleOff" src="\images\icons/remove-512.png"  />
							<h4 class="tooltoptext" style="display: inline;">How to Donate</h4>
							<ol>
								<li>Visit our center at Sta Rosa bayan.</li>
								<li>Voice your support in any of the Sta Rosa Villages' town hall meetings.</li>
								<li>Contact our FB page.</li>
								<li>Fr Francis will always be present at the Don Bosco Church.</li>
								<li>Mrs. David is stationed and the barangay hall.</li>
							</ol>
						</div>
					@endguest
									
					
					@guest
						<h4 class="tooltoptext" style="display: inline;">Contact Persons</h4>
						<ul class="alt">
							<li>Arnel Gomez, 0945 123 1234, AG@email.com</li>
							<li>Sally G. David, 0905 321 3214</li>
							<li>Fr. Fancis Tolen, fr.tolen@email.com</li>
						</ul>
					@else
						<span title="Contact Persons">
							<img class="image customIcon alternateToggleOn" src="\images\icons/add-512.png"
							style="display: none;" />
						</span>
						<div class="hide" id="alternate">
							<img class="image customIcon alternateToggleOff" src="\images\icons/remove-512.png"  />
							<h4 class="tooltoptext" style="display: inline;">Contact Persons</h4>
							<ul class="alt">
								<li>Arnel Gomez, 0945 123 1234, AG@email.com</li>
								<li>Sally G. David, 0905 321 3214</li>
								<li>Fr. Fancis Tolen, fr.tolen@email.com</li>
							</ul>
						</div>
					@endguest

				</div>
				<div class="6u$ 12u$(xsmall)"><!-- sidebar -->
					@guest
						<h4 class="tooltoptext" style="display: inline;">What happens to the Money</h4>
						<ul>
							<li>All donations go straight to our Centers Finance team.</li>
							<li>On our organization's FB page we list our weekly to monthly breakdown of expenses.</li>
							<li>We partition the fund such that each beneficiary is given eqal to their needs.</li>
						</ul>
					@else
						<span title="What happens to the Money">
							<img class="image customIcon unorderedToggleOn" src="\images\icons/add-512.png"
							style="display: none;" />
						</span>
						<div class="hide" id="unordered">
							<img class="image customIcon unorderedToggleOff" src="\images\icons/remove-512.png"  />
							<h4 class="tooltoptext" style="display: inline;">What happens to the Money</h4>
							<ul>
								<li>All donations go straight to our Centers Finance team.</li>
								<li>On our organization's FB page we list our weekly to monthly breakdown of expenses.</li>
								<li>We partition the fund such that each beneficiary is given eqal to their needs.</li>
							</ul>
						</div>	
					@endguest
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
	<script type="text/javascript">
		var donateComputed = <?php echo $donateComp ?>;
		var donateProgress= <?php echo $donateProg ?>;
		var donateAlternate= <?php echo $donateAlt ?>;
		var donateOrdered= <?php echo $donateOrd ?>;
		var donateUnordered= <?php echo $donateUno ?>;
	</script>
	<script src="\assets\js\customization\projects\donate.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script> -->
    

@endsection