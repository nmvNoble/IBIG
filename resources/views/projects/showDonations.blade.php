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
			            <li class={{Request::is('projects/*/description') ? 'current_page_item' : ''}}>
			            	<a href="\projects\{{$project->id}}\description">Description</a>
			            </li>
			            <li class={{Request::is('projects/*/updates') ? 'current_page_item' : ''}}>
			            	<a href="\projects\{{$project->id}}\updates">Updates</a>
			            </li>
			            <li class={{Request::is('projects/*/comments') ? 'current_page_item' : ''}}>
			            	<a href="\projects\{{$project->id}}\comments">Comments</a>
			            </li>
			            <li class={{Request::is('projects/*/donations') ? 'current_page_item' : ''}}>
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
					                            <h2>Php 500</h2>
					                            <p>Anonymus 12/3/2019</p>
					                        </header>
					                            <p>I hope you guys continue. I've seen you guys at work and I support.</p>
					                    </div>
					                </div>
					                <div class="project">
					                    <div class="image rounded right" style="margin-left: -2%;"><a href="/users/9099/owned"><img src="\images/user.jpg" alt="" style="max-height: 10em; width: auto;" /></a></div>
					                    <div class="content">
					                        <header>
					                            <h2>Php 200</h2>
					                            <p><a href="/users/9099/owned">John Doe</a> 11/1/2019</p>
					                        </header>
					                            <p>I'll also be going to your volunteering unit at MM</p>
					                    </div>
					                </div>
					                <div class="project">
					                    <div class="image rounded right" style="margin-left: -2%;"><a href="/users/9099/owned"><img src="\images/user.jpg" alt="" style="max-height: 10em; width: auto;" /></a></div>
					                    <div class="content">
					                        <header>
					                            <h2>Php 1300</h2>
					                            <p><a href="/users/9099/owned">Jane Doe</a> 9/9/1998</p>
					                        </header>
					                            <p>I love you. So much. Forever.</p>
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