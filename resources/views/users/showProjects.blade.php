@extends ('layout_main')

<!-- Content -->
@section('content')
	<section id="main" class="wrapper">
		<div class="container 75%">
		    <div class="row 200%">
		        <div class="6u 12u$(medium)">
		            <div class="image rounded center" style="margin-left: -2%;"><img src="\images/user.jpg" alt="" style=" max-width: 90%" /></div>
		            <header class="major">
		                <h2>Juan Dela Cruz</h2>
		                <p>User #: 9099</p>
		                <p>Affiliated with: <a href="/organizations/9099/owned" class="button fit small" >I Love Sta. Rosa</a></p>
		            </header>
		        </div>
		        <div class="6u$ 12u$(medium)" style="margin-top: 5%;">
		            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non ea mollitia corporis id, distinctio sunt veritatis officiis dolore reprehenderit deleniti voluptatibus harum magna, doloremque alias quisquam minus, eaque. Feugiat quod, nesciunt! Iste quos ipsam, iusto sit esse.</p>
		            <p>Dolorum aspernatur maxime libero ratione quidem distinctio, placeat fugiat laborum voluptatum enim neque soluta vel sunt id ex veritatis. Labore rerum, odit sapiente, alias mollitia magnam exercitationem modi amet earum quia atque ipsum voluptas asperiores quas laboriosam.</p>
		        </div>
		    </div>
		</div>

		<header id="userTab" class="alt">
		    <nav id="nav">
		        <ul>
		            <li class={{Request::is('users/*/owned') ? 'current_page_item' : ''}}>
		            	<a href="\users/9099/owned">Projects Owned</a>
		            </li>
		            <li class={{Request::is('users/*/donatedTo') ? 'current_page_item' : ''}}>
		                <a href="\users/9099/donatedTo" accesskey="1">Projects Donated To</a>
		            </li>
		        </ul>
		    </nav>
		</header>
		<div class="container" style="padding-top: 3em">
			<div class="projects-grid">
			    <ul style="list-style: none;">
			        @foreach ($projects as $project)
			            <li>
			                <div class="project">
			                    <div class="image rounded" style="margin-left: -2%;"><img src="\images/{{$project->image}}.jpg" alt="" /></div>
			                    <div class="content">
			                        <header>
			                            <h2><a href="/projects/{{$project->id}}/description">{{$project->title}}</a></h2>
			                            <p>Project by: User #{{$project->creatorID}}</p>
			                        </header>
			                        <p>{{$project->description}}</p>
			                    </div>
			                    <div class="fund">
			                        <div>
			                            <header>
			                                <h3 >Php {{$project->goal - $project->current}}</h3>
			                                <p>They need that much more!</p>
			                            </header>
			                            <!--<header>
			                                <h4 style="display: inline">{{$project->current}}</h4>
			                                <p>They need this much more!</p>
			                            </header>-->
			                            <ul class="actions">
			                                <li><a href="/projects/{{$project->id}}" class="button special" >Get in Touch</a></li>
			                            </ul>
			                        </div>
			                    </div>
			                </div>
			            </li>
			        @endforeach
			    </ul>
			</div>
		</div>
	</section>
			
@stop