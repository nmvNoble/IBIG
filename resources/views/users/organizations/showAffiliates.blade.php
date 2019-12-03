@extends ('layout_main')

<!-- Content -->
@section('content')
	<section id="main" class="wrapper">
		<div class="container 75%">
		    <div class="row 200%">
		        <div class="6u 12u$(medium)">
		            <div class="image rounded center" style="margin-left: -2%;"><img src="\images/organization.jpg" alt="" style=" max-width: 90%" /></div>
		            <header class="major">
		                <h2>I Love Sta Rosa</h2>
		                <p>Organization #: 9099</p>
		            </header>
		        </div>
		        <div class="6u$ 12u$(medium)">
		            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non ea mollitia corporis id, distinctio sunt veritatis officiis dolore reprehenderit deleniti voluptatibus harum magna, doloremque alias quisquam minus, eaque. Feugiat quod, nesciunt! Iste quos ipsam, iusto sit esse.</p>
		            <p>Dolorum aspernatur maxime libero ratione quidem distinctio, placeat fugiat laborum voluptatum enim neque soluta vel sunt id ex veritatis. Labore rerum, odit sapiente, alias mollitia magnam exercitationem modi amet earum quia atque ipsum voluptas asperiores quas laboriosam.</p>
		        </div>
		    </div>
		</div>

		<header id="userTab" class="alt">
		    <nav id="nav">
		        <ul>
		            <li class={{Request::is('organizations/*/aboutUs') ? 'current_page_item' : ''}}>
		                <a href="\organizations/9099/aboutUs">About Us</a>
		            </li>
		            <li class={{Request::is('organizations/*/affiliates') ? 'current_page_item' : ''}}>
		                <a href="\organizations/9099/affiliates">Affiliates</a>
		            </li>
		            <li class={{Request::is('organizations/*/owned') ? 'current_page_item' : ''}}>
		            	<a href="\organizations/9099/owned">Projects Owned</a>
		            </li>
		            <li class={{Request::is('organizations/*/donatedTo') ? 'current_page_item' : ''}}>
		                <a href="\organizations/9099/donatedTo">Projects Donated To</a>
		            </li>
		        </ul>
		    </nav>
		</header>
		<div class="container" style="padding-top: 3em">
			<div class="projects-grid">
			    <ul style="list-style: none;">
			            <li>
			                <div class="project">
			                    <div class="image rounded right" style="margin-left: -2%;"><a href="/users/9099/owned"><img src="\images/user.jpg" alt="" style="max-height: 10em; width: auto;" /></a></div>
			                    <div class="content">
			                        <header>
			                            <h2><a href="/users/9099/owned">Juan Dela Cruz</a></h2>
			                        </header>
			                    </div>
			                </div>
			                <div class="project">
			                    <div class="image rounded right" style="margin-left: -2%;"><a href="/users/9099/owned"><img src="\images/user.jpg" alt="" style="max-height: 10em; width: auto;" /></a></div>
			                    <div class="content">
			                        <header>
			                            <h2><a href="/users/9099/owned">Jane Doe</a></h2>
			                        </header>
			                    </div>
			                </div>
			                <div class="project">
			                    <div class="image rounded right" style="margin-left: -2%;"><a href="/users/9099/owned"><img src="\images/user.jpg" alt="" style="max-height: 10em; width: auto;" /></a></div>
			                    <div class="content">
			                        <header>
			                            <h2><a href="/users/9099/owned">John Doe</a></h2>
			                        </header>
			                    </div>
			                </div>
			            </li>
			    </ul>
			</div>
		</div>
	</section>
			
@stop