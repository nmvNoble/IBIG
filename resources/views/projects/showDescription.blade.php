@extends ('layout_main')

<!-- Content -->
@section('content')
	
	<section id="main" class="wrapper">
		<div class="container">
			<header class="major special">
				<h2>{{$project->title}}</h2>
				<a href="\projects\{{$project->id}}\donate" class="button special big" style=" float: right;">Donate</a>
				<p>Php {{$project->goal - $project->current}} left to go!</p>
	            <a href="\projects\{{$project->id}}\edit" class="button big" style="display: inline;">Edit</a>
			</header>


			<header id="userTab" class="alt" style="height: 20em; margin-bottom: 3%;">
			    <nav id="nav">
			    	<img class="image center" src="\images/{{$project->image}}.jpg" alt="" style="max-height: 20em; width: auto;" />
			    </nav>
			</header>


			<header id="userTab" class="alt">
			    <nav id="nav">
			        <ul>
		        		<li style="display: none;" class="projDescTabToggleOn">
		        			<span title="Project Description Tab">
		        				<img class="image customIcon " src="\images\icons/add-white-512.png"/>
		        			</span>
		        		</li>
		            	<li id="projDescTab" class={{Request::is('projects/*/description') ? 'current_page_item' : ''}}>
		            		<img class="image customIcon projDescTabToggleOff" src="\images\icons/remove-white-512.png"/>
		            		<a href="\projects\{{$project->id}}\description">Description</a>
		            	</li>

			            
		        		<li style="display: none;" class="projUpdateTabToggleOn">
		        			<span title="Project Updates Tab">
		        				<img class="image customIcon " src="\images\icons/add-white-512.png"/>
		        			</span>
		        		</li>
		            	<li id="projUpdateTab" class={{Request::is('projects/*/updates') ? 'current_page_item' : ""}}>
		            		<img class="image customIcon projUpdateTabToggleOff" src="\images\icons/remove-white-512.png"/>
		            		<a href="\projects\{{$project->id}}\updates">Updates</a>
		            	</li>

			            
		        		<li style="display: none;" class="projComntTabToggleOn">
		        			<span title="Project Comments Tab">
		        				<img class="image customIcon " src="\images\icons/add-white-512.png"/>
		        			</span>
		        		</li>
		            	<li id="projComntTab" class={{Request::is('projects/*/comments') ? 'current_page_item' : ''}}>
		            		<img class="image customIcon projComntTabToggleOff" src="\images\icons/remove-white-512.png"/>
		            		<a href="\projects\{{$project->id}}\comments">Comments</a>
		            	</li>
		            	
			            
		        		<li style="display: none;" class="projDntnTabToggleOn">
		        			<span title="Project Donations Tab">
		        				<img class="image customIcon " src="\images\icons/add-white-512.png"/>
		        			</span>
		        		</li>
		            	<li id="projDntnTab" class={{Request::is('projects/*/donations') ? 'current_page_item' : ''}}>
		            		<img class="image customIcon projDntnTabToggleOff" src="\images\icons/remove-white-512.png"/>
		            		<a href="\projects\{{$project->id}}\donations">Donations</a>
		            	</li>
			        </ul>
			    </nav>
			</header>
			<div class="container" style="padding-top: 3em">
				<span title="Project Description Text Body">
					<img class="image customIcon projDescTextToggleOn" src="\images\icons/add-512.png"
					style="display: none;" />
				</span>
				<div class="hide" id="projDescText">
					<img class="image customIcon projDescTextToggleOff" src="\images\icons/remove-512.png"  />
					<p>{{$project->description}}</p>
				</div>
			</div>
		</div>
	</section>
	<?php 
	$projDescTab = $customize->projectDescTab;
	$projUpdateTab= $customize->projectUpdateTab;
	$projComntTab= $customize->projComntTab;
	$projDntnTab= $customize->projDntnTab;
	$projDescText= $customize->projDescText;
	?>
@endsection

<!-- Additional Scripts -->
@section('script')
	
	<script type="text/javascript">
		var projDescTabVal = <?php echo $projDescTab ?>;
		var projUpdateTabVal= <?php echo $projUpdateTab ?>;
		var projComntTabVal= <?php echo $projComntTab ?>;
		var projDntnTabVal= <?php echo $projDntnTab ?>;
		var projDescTextVal= <?php echo $projDescText ?>;
	</script>
	<script src="\assets\js\customization\project\projects_tabs.js"></script>
	<script src="\assets\js\customization\project\showDescription.js"></script>
@endsection