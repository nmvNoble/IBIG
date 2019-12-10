@extends ('layout_main')

<!-- Tab Content -->
@section('content')
	<section id="main" class="wrapper">
		<div class="container 75%">
		    <div class="row 200%">
		        <div class="6u 12u$(medium)">
		            <div class="image rounded" style="margin-left: -2%;"><img src="\images/organization.jpg" alt="" style=" max-width: 90%" /></div>
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
		            <li style="display: none;" class="orgAboutUsTabToggleOn">
        				<span title="Organization's Affiliates Tab">
        					<img class="image customIcon " src="\images\icons/add-white-512.png"/>
        				</span>
        			</li>
        	    	<li id="orgAboutUsTab" class={{Request::is('organizations/*/aboutUs') ? 'current_page_item' : ''}}>
        	    		<img class="image customIcon orgAboutUsTabToggleOff" src="\images\icons/remove-white-512.png"/>
		            	<a href="\organizations/9099/aboutUs">About Us</a>
		            </li>
		            
        			<li style="display: none;" class="orgAffiliatesTabToggleOn">
        				<span title="Organization's Affiliates Tab">
        					<img class="image customIcon " src="\images\icons/add-white-512.png"/>
        				</span>
        			</li>
        	    	<li id="orgAffiliatesTab" class={{Request::is('organizations/*/affiliates') ? 'current_page_item' : ''}}>
        	    		<img class="image customIcon orgAffiliatesTabToggleOff" src="\images\icons/remove-white-512.png"/>
		            	<a href="\organizations/9099/affiliates">Affiliates</a>
		            </li>

        			<li style="display: none;" class="orgOwnedTabToggleOn">
        				<span title="Organization's Owned Projects Tab">
        					<img class="image customIcon " src="\images\icons/add-white-512.png"/>
        				</span>
        			</li>
        	    	<li id="orgOwnedTab" class={{Request::is('organizations/*/owned') ? 'current_page_item' : ''}}>
        	    		<img class="image customIcon orgOwnedTabToggleOff" src="\images\icons/remove-white-512.png"/>
		            	<a href="\organizations/9099/owned">Projects Owned</a>
		            </li>

        			<li style="display: none;" class="orgDonatedTabToggleOn">
        				<span title="Project's Organization Donated to Tab">
        					<img class="image customIcon " src="\images\icons/add-white-512.png"/>
        				</span>
        			</li>
        	    	<li id="orgDonatedTab" class={{Request::is('organizations/*/donatedto') ? 'current_page_item' : ''}}>
        	    		<img class="image customIcon orgDonatedTabToggleOff" src="\images\icons/remove-white-512.png"/>
		                <a href="\organizations/9099/donatedTo">Projects Donated To</a>
		            </li>
		        </ul>
		    </nav>
		</header>
		<div class="container" style="padding-top: 3em">
			<section>

				<header id="userTab" class="alt" style="height: 20em">
				    <nav id="nav">
				    	<a href="https://www.facebook.com/ilovesantarosafoundationinc/?ref=br_rs">
				    		<img class="image center" src="\images/ILSR.jpg" alt="" style="max-height: 20em; width: auto;" />
				    	</a>
				    	<h1>I Love Sta Rosa's Website</h1>
				    </nav>
				</header>
				<p><span class="image left"><img src="/images/pic04.jpg" alt="" /></span>Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent.</p>
				<p><span class="image right"><img src="/images/pic05.jpg" alt="" /></span>Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent.</p>
			</section>
		</div>
	</section>
@endsection

<!-- Additional Scripts -->
@section('script')
	<script src="\assets\js\customization\users\organizations\org_tabs.js"></script>
@endsection