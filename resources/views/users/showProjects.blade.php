@extends ('layout_main')

<!-- Content -->
@section('content')
<?php 
	$userOwnedTab= $customize->userOwnedTab;
	$userDonatedTab= $customize->userDonatedTab;
?>
<script type="text/javascript">
    var userOwnedTabVal = <?php echo $userOwnedTab ?>;
    var userDonatedTabVal = <?php echo $userDonatedTab ?>;
</script>
	<section id="main" class="wrapper">
		<div class="container 75%">
		    <div class="row 200%">
		        <div class="6u 12u$(medium)">
		            <div class="image rounded center" style="margin-left: -2%;"><img src="\images/user.jpg" alt="" style=" max-width: 90%" /></div>
		            <header class="major">
		                <h2>{{ Auth::user()->name }}</h2>
		                <p>User #: {{ Auth::user()->id}}</p>
		                <p>Affiliated with: <a href="/organizations/9099/owned" class="button fit small" >I Love Sta. Rosa</a></p>
		            </header>
		        </div>
		        <div class="6u$ 12u$(medium)" style="margin-top: 5%;">
		            <p>I am Juan. I believe in the helping hands of society. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non ea mollitia corporis id, distinctio sunt veritatis officiis dolore reprehenderit deleniti voluptatibus harum magna, doloremque alias quisquam minus, eaque. Feugiat quod, nesciunt! Iste quos ipsam, iusto sit esse.</p>
		            <p>Dolorum aspernatur maxime libero ratione quidem distinctio, placeat fugiat laborum voluptatum enim neque soluta vel sunt id ex veritatis. Labore rerum, odit sapiente, alias mollitia magnam exercitationem modi amet earum quia atque ipsum voluptas asperiores quas laboriosam.</p>
		        </div>
		    </div>
		</div>

		<header id="userTab" class="alt">
		    <nav id="nav">
		        <ul>
        			<li style="display: none;" class="userOwnedTabToggleOn">
        				<span title="User's Owned Projects Tab">
        					<img class="image customIcon " src="\images\icons/add-white-512.png"/>
        				</span>
        			</li>
        	    	<li id="userOwnedTab" class={{Request::is('users/*/owned') ? 'current_page_item' : ''}}>
        	    		<img class="image customIcon userOwnedTabToggleOff" src="\images\icons/remove-white-512.png"/>
		            	<a href="\users/9099/owned">Projects Owned</a>
		            </li>

        			<li style="display: none;" class="userDonatedTabToggleOn">
        				<span title="Project's User Donated to Tab">
        					<img class="image customIcon " src="\images\icons/add-white-512.png"/>
        				</span>
        			</li>
        	    	<li id="userDonatedTab" class={{Request::is('users/*/donatedTo') ? 'current_page_item' : ''}}>
        	    		<img class="image customIcon userDonatedTabToggleOff" src="\images\icons/remove-white-512.png"/>
		                <a href="\users/9099/donatedTo">Projects Donated To</a>
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
                                        <h2>
                                            <span title="Project for Calamity Victim Support">
                                                <img class="image calamityIcon" src="\images\icons/AlertCalamity-512.png" style= @if ($project->calamity === 0)
                                                    display:none;
                                                @elseif ($project->calamity === 1)
                                                    display:block;
                                                @endif
                                                />
                                            </span>
                                            <a href= "@if ($project->calamity === 0)
                                                    /projects/{{$project->id}}/description
                                                @elseif ($project->calamity === 1)
                                                    /projects/calamities/{{$project->id}}/description
                                                @endif">{{$project->title}}</a>
                                        </h2>
                                        <p>Project by: User #{{$project->creatorID}}</p>
                                    </header>
			                        <p>{{$project->description}}</p>
			                    </div>
			                    <div class="fund">
			                        <div>
			                            <header>
			                                <h3>Php {{$project->goal - $project->current}}</h3>
			                                <p>left to go!</p>
			                                <progress id="progressBar" max={{$project->goal}} value={{$project->current}}></progress>
			                            </header>
			                            <ul class="actions">
			                                <li><a href="/projects/{{$project->id}}/donate" class="button special" >Get in Touch</a></li>
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
@endsection

<!-- Additional Scripts -->
@section('script')
	<script src="\assets\js\customization\users\user_tabs.js"></script>
@endsection