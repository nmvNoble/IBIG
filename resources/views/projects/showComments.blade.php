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
				<div class="container" style="padding-top: 3em">
					<div class="projects-grid">
					    <ul style="list-style: none;">
					            <li>
					                <div class="project">
					                    <div class="image rounded right" style="margin-left: -2%;"><a href="/users/9099/owned"><img src="\images/user.jpg" alt="" style="max-height: 10em; width: auto;" /></a></div>
					                    <div class="content">
					                        <header>
					                            <h2>Anonymus</h2>
					                            <p>4/22/2020</p>
					                        </header>
					                            <p>WOoooooooooooo YEah Hype for this. But besides the fun I love this project keep it up!</p>
					                    </div>
					                </div>
					                <div class="project">
					                    <div class="image rounded right" style="margin-left: -2%;"><a href="/users/9099/owned"><img src="\images/user.jpg" alt="" style="max-height: 10em; width: auto;" /></a></div>
					                    <div class="content">
					                        <header>
												<span title="User Anonymity Turned ON" id="userAnonymityOn" style="display: none;" >
													<img class="image customIcon userAnonymityToggleOff" src="\images\icons/add-512.png"
													/>
													<h2>Anonymus</h2>
												</span>
												<span title="User Anonymity Turned OFF" id="userAnonymityOff">
													<img class="image customIcon userAnonymityToggleOn" src="\images\icons/remove-512.png"  />
													<h2><a href="/users/9099/owned">Juan Dela Cruz</a></h2>
												</span>
					                            <p>4/21/2020</p>
					                        </header>
					                            <p>Keep up the good work! You've helped those people then and now again. Thank you!</p>
					                    </div>
					                </div>
					                <div class="project">
					                    <div class="image rounded right" style="margin-left: -2%;"><a href="/users/9099/owned"><img src="\images/user.jpg" alt="" style="max-height: 10em; width: auto;" /></a></div>
					                    <div class="content">
					                        <header>
					                            <h2><a href="/users/9099/owned">Jane Doe</a></h2>
					                            <p>9/9/1998</p>
					                        </header>
					                            <p>I love you. So much.</p>
					                    </div>
					                </div>
					            </li>
					    </ul>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection

<!-- Additional Scripts -->
@section('script')
	<script src="\assets\js\customization\projects\projects_tabs.js"></script>
	<script src="\assets\js\customization\projects\showComments.js"></script>
@endsection