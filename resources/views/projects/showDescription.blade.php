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

			        	<span title="Project Description Tab">
			        		<li style="display: none;" class="projDescTabToggleOn">
			        			<img class="image customIcon " src="\images\icons/add-512.png"/>
			        		</li>
			        		
			        	</span>
			            	<li class={{Request::is('projects/*/description') ? 'current_page_item' : ''}} id="projDescTab">
			            		<img class="image customIcon projDescTabToggleOff" src="\images\icons/remove-512.png"/>
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
@endsection

<!-- Additional Scripts -->
@section('script')
	<script src="\assets\js\customization\project\showDescription.js"></script>
@endsection