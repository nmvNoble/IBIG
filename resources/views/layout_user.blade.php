@extends ('layout_main')

<!-- Content -->
@section('content')
	<section id="main" class="wrapper">
		<div class="container 75%">
		    <div class="row 200%">
		        <div class="6u 12u$(medium)">
		            <div class="image rounded" style="margin-left: -2%;"><img src="\images/pic01.jpg" alt="" style=" max-width: 90%" /></div>
		            <header class="major">
		                <h2>Maecenas luctus lectus</h2>
		                <p>User #: 9099</p>
		            </header>
		        </div>
		        <div class="6u$ 12u$(medium)">
		            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non ea mollitia corporis id, distinctio sunt veritatis officiis dolore reprehenderit deleniti voluptatibus harum magna, doloremque alias quisquam minus, eaque. Feugiat quod, nesciunt! Iste quos ipsam, iusto sit esse.</p>
		            <p>Dolorum aspernatur maxime libero ratione quidem distinctio, placeat fugiat laborum voluptatum enim neque soluta vel sunt id ex veritatis. Labore rerum, odit sapiente, alias mollitia magnam exercitationem modi amet earum quia atque ipsum voluptas asperiores quas laboriosam.</p>
		            <p>Dolorum aspernatur maxime libero ratione quidem distinctio, placeat fugiat laborum voluptatum enim neque soluta vel sunt id ex veritatis. Labore rerum, odit sapiente, alias mollitia magnam exercitationem modi amet earum quia atque ipsum voluptas asperiores quas laboriosam.</p>
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
		                <li class="inactive_page_item">
		                    <a href="\users/9099/donatedTo" accesskey="1">About Us</a>
		                </li>
		            </ul>
		        </nav>
		    </header>
		</div>
		<div class="container" style="padding-top: 3em">
			@yield('tabContent')
		</div>
	</section>
@stop