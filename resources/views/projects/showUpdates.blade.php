@extends ('layout_main')

<!-- Content -->
@section('content')
	<section id="main" class="wrapper">
		<div class="container">
			<header class="major special">
				<h2>{{$project->title}}</h2>
				<a href="\projects{!!Request::is('projects/calamities*') ? '\calamities' : ''!!}\{{$project->id}}\donate" class="button special big" style=" float: right;">Donate</a>
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
			            	<a href="\projects{!!Request::is('projects/calamities*') ? '\calamities' : ''!!}\{{$project->id}}\description">Description</a>
		            	</li>

			            
		        		<li style="display: none;" class="projUpdateTabToggleOn">
		        			<span title="Project Updates Tab">
		        				<img class="image customIcon " src="\images\icons/add-white-512.png"/>
		        			</span>
		        		</li>
		            	<li id="projUpdateTab" class={{Request::is('projects/*/updates') ? 'current_page_item' : ""}}>
		            		<img class="image customIcon projUpdateTabToggleOff" src="\images\icons/remove-white-512.png"/>
		            		<a href="\projects{!!Request::is('projects/calamities*') ? '\calamities' : ''!!}\{{$project->id}}\updates">Updates</a>
		            	</li>

			            
		        		<li style="display: none;" class="projComntTabToggleOn">
		        			<span title="Project Comments Tab">
		        				<img class="image customIcon " src="\images\icons/add-white-512.png"/>
		        			</span>
		        		</li>
		            	<li id="projComntTab" class={{Request::is('projects/*/comments') ? 'current_page_item' : ''}}>
		            		<img class="image customIcon projComntTabToggleOff" src="\images\icons/remove-white-512.png"/>
		            		<a href="\projects{!!Request::is('projects/calamities*') ? '\calamities' : ''!!}\{{$project->id}}\comments">Comments</a>
		            	</li>
		            	
			            
		        		<li style="display: none;" class="projDntnTabToggleOn">
		        			<span title="Project Donations Tab">
		        				<img class="image customIcon " src="\images\icons/add-white-512.png"/>
		        			</span>
		        		</li>
		            	<li id="projDntnTab" class={{Request::is('projects/*/donations') ? 'current_page_item' : ''}}>
		            		<img class="image customIcon projDntnTabToggleOff" src="\images\icons/remove-white-512.png"/>
			            	<a href="\projects{!!Request::is('projects/calamities*') ? '\calamities' : ''!!}\{{$project->id}}\donations">Donations</a>
		            	</li>
			        </ul>
			    </nav>
			</header>
			<div class="container" style="padding-top: 3em">
				<div class="projects-grid">
				    <ul style="list-style: none;">
				            <li>
				                <div class="project">
				                    <p><span class="image left"><img src="/images/pic04.jpg" alt="" /></span><h1>Thank you for all the Summer Volunteers!<br>10/23/2020</h1>Thank you. Thank you. Thank you. we have no other words to say about just how it means to us that you all helped us in our project and mission as an organization. We hope this is not the last of our meeting and we hope to see more new faces. Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent.</p>
				                </div>
				            </li>
				            <li>
				                <div class="project">
				                    <p><span class="image left"><img src="/images/pic05.jpg" alt="" /></span><h1>Emergency evacuation during floods in MM<br>8/11/2020</h1> Oh no disaster strikes in MM! However we stay ever vigilant in the face of adversity. We held strong while we responded to the emergency calls of MM and we hope we did a good job. Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent.</p>
				                </div>
				            </li>
				        @foreach ($updates as $update)
				            <li>
				                <div class="project">
				                    <p><span class="image left"><img src="/images/updates/{{$update->updateImage}}.jpg" alt="" /></span><h1>{{$update->updateTitle}}<br>{{$update->updated_at}}</h1> {{$update->updateText}}</p>
				                </div>
				            </li>
	                	@endforeach 
				    </ul>
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
	<script src="\assets\js\customization\projects\projects_tabs.js"></script>
@endsection