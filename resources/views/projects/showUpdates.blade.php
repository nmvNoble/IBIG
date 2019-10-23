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
				<div class="projects-grid">
			    <ul style="list-style: none;">
			        <!-- for each updates as update-->
			            <li>
			                <div class="project">
			                    <p><span class="image left"><img src="/images/pic04.jpg" alt="" /></span><h1>10/23/2020 - Thank you for all the Summer Volunteers!</h1>Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent.</p>
			                </div>
			            </li>
			            <li>
			                <div class="project">
			                    <p><span class="image left"><img src="/images/pic05.jpg" alt="" /></span><h1>8/11/2020 - Lay On Hands Emergency evacuation during floods in MM</h1>Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent.</p>
			                </div>
			            </li>
			    </ul>
			</div>
			</div>

		</div>
	</section>
@endsection