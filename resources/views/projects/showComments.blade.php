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
					                            <h2><a href="/users/9099/owned">Anonymus</a></h2>
					                            <p>4/22/2020</p>
					                        </header>
					                            <p>Keep up the good work You've haelp those people and now</p>
					                    </div>
					                </div>
					                <div class="project">
					                    <div class="image rounded right" style="margin-left: -2%;"><a href="/users/9099/owned"><img src="\images/user.jpg" alt="" style="max-height: 10em; width: auto;" /></a></div>
					                    <div class="content">
					                        <header>
					                            <h2><a href="/users/9099/owned">John Doe</a></h2>
					                            <p>4/21/2020</p>
					                        </header>
					                            <p>WOoooooooooooo YEah Hype for this. But besides the fun I love this project keep it up!</p>
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