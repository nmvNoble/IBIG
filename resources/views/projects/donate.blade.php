@extends ('layout_main')

<!-- Banner -->
@section('banner')
    <section id="banner" style="padding: 10em 0 3em 0;">
    	<h2>{{$project->title}} Project Details</h2>
    </section>
@endsection

<!-- Content -->
@section('content')

	<?php 

	$donateComp = $customize->donateComputed;
	// $donateProgress;
	// $donateAlternate;
	// $donateOrdered;
	// $donateUnordered;
	?>
	<!-- <script>
		var donateC = <?php echo $donateComp ?>;
		alert(donateC);
	</script> -->
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
	<!-- <script src="\assets\js\customization\project\donate.js"></script> -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script> -->
    <script type="text/javascript">
    	
		var donateComputed = <?php echo $donateComp ?>;
		var donateProgress;
		var donateAlternate;
		var donateOrdered;
		var donateUnordered;
		var id =1;

		// function myCallback(response) {
		//   result = response;
		//   console.log("Inside ajax: "+result);                
		//   // Do whatever you need with result variable
		//   alert(result.donateComputed)
		// }

		// $.ajax({
		//   type: "GET",
		//   url: 'getUser/'+id,
		//   datatype: "json",
		//   success: myCallback,
		//   error: alert("ded2"),
		// });
		/* phpLeft */


		var phpLeft = document.querySelector("#phpLeft");
		var phpLeftToggleOn = document.querySelector(".phpLeftToggleOn");
		var phpLeftToggleOff = document.querySelector(".phpLeftToggleOff");
		//var phpLeftToggleValue = 1;


		if (donateComputed=0){
			phpLeft.style.display = "none";
			phpLeftToggleOn.style.display = "block";
			phpLeftToggleValue = 0;
		}else{
			phpLeft.style.display = "block";
			phpLeftToggleOn.style.display = "none";
			phpLeftToggleValue = 1;
		}


		phpLeftToggleOn.addEventListener("mouseover", function(){
			phpLeftToggleOn.style.background = "white";
		});

		$(document).on("click",".phpLeftToggleOn", function(){
			phpLeft.style.display = "block";
			phpLeftToggleOn.style.display = "none";
			phpLeftToggleValue = 1;
			alert(phpLeftToggleValue);
			// $.ajax({
		 //      url: '/projects/{project}/updateUser',
		 //      type: 'post',
		 //      data: {editid : id,type: 1, update: phpLeftToggleValue},
		 //      success: function(response){
		 //        alert(response);
		 //        alert(phpLeftToggleValue +'ded');
		 //      },
		 //      error: function (ex) {
		 //        alert("ded error");
		 //      }
		 //    });
			

		});

		// phpLeftToggleOn.addEventListener("click", function(){
		// 	phpLeft.style.display = "block";
		// 	phpLeftToggleOn.style.display = "none";
		// 	phpLeftToggleValue = 1;
		// });

		phpLeftToggleOff.addEventListener("click", function(){
			phpLeft.style.display = "none";
			phpLeftToggleOn.style.display = "block";
			phpLeftToggleValue = 0;
		});


		/* curOverGoal */


		var curOverGoal = document.querySelector("#curOverGoal");
		var curOverGoalToggleOn = document.querySelector(".curOverGoalToggleOn");
		var curOverGoalToggleOff = document.querySelector(".curOverGoalToggleOff");
		var curOverGoalToggleValue = 1;


		curOverGoalToggleOn.addEventListener("click", function(){
			curOverGoal.style.display = "block";
			curOverGoalToggleOn.style.display = "none";
			curOverGoalToggleValue = 1;
		});

		curOverGoalToggleOff.addEventListener("click", function(){
			curOverGoal.style.display = "none";
			curOverGoalToggleOn.style.display = "block";
			curOverGoalToggleValue = 0;
		});




		/* Unordered */


		var unordered = document.querySelector("#unordered");
		var unorderedToggleOn = document.querySelector(".unorderedToggleOn");
		var unorderedToggleOff = document.querySelector(".unorderedToggleOff");
		var unorderedToggleValue = 1;


		unorderedToggleOn.addEventListener("mouseover", function(){
			unorderedToggleOn.style.background = "white";
		});

		unorderedToggleOn.addEventListener("click", function(){
			unordered.style.display = "block";
			unorderedToggleOn.style.display = "none";
			unorderedToggleValue = 1;
		});

		unorderedToggleOff.addEventListener("click", function(){
			unordered.style.display = "none";
			unorderedToggleOn.style.display = "block";
			unorderedToggleValue = 0;
		});


		/* alternate */


		var alternate = document.querySelector("#alternate");
		var alternateToggleOn = document.querySelector(".alternateToggleOn");
		var alternateToggleOff = document.querySelector(".alternateToggleOff");
		var alternateToggleValue = 1;


		alternateToggleOn.addEventListener("mouseover", function(){
			alternateToggleOn.style.background = "white";
		});

		alternateToggleOn.addEventListener("click", function(){
			alternate.style.display = "block";
			alternateToggleOn.style.display = "none";
			alternateToggleValue = 1;
		});

		alternateToggleOff.addEventListener("click", function(){
			alternate.style.display = "none";
			alternateToggleOn.style.display = "block";
			alternateToggleValue = 0;
		});


		/* ordered */


		var ordered = document.querySelector("#ordered");
		var orderedToggleOn = document.querySelector(".orderedToggleOn");
		var orderedToggleOff = document.querySelector(".orderedToggleOff");
		var orderedToggleValue = 1;


		orderedToggleOn.addEventListener("mouseover", function(){
			orderedToggleOn.style.background = "white";
		});

		orderedToggleOn.addEventListener("click", function(){
			ordered.style.display = "block";
			orderedToggleOn.style.display = "none";
			orderedToggleValue = 1;
		});

		orderedToggleOff.addEventListener("click", function(){
			ordered.style.display = "none";
			orderedToggleOn.style.display = "block";
			orderedToggleValue = 0;
		});




    </script>
@endsection