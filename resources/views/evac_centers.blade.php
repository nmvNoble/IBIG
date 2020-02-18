@extends ('layout_main')

<!-- Content -->
@section('content')
	
	<section id="main" class="wrapper">
		<div class="container">
			<header class="major special">
            <h2><a href="\evac_centers">Evauation Centers in Batangas due to Taal Volcano</a></h2>
            <p>Link to the official government list available</p>
        </header>
        <p>Due to the recent events of the Taal volcano we have found it to be relevant and possibly helpful to spread awarenes to the possible projects regarding the efforts to help those affected by the recent calamity and the nearby Evacuation Centers.</p>
        <p>Projects that are part of the Calamity Victims Support efforts will be marked with the icon [
            <span title="Project for Calamity Victim Support">
                <img class="image customIcon" src="\images\icons/AlertCalamity-512.png"/>
            </span>
        ].</p><br>

        <h4>Official list of Evacuation Centers in Batangas.</h4>
        <img src="images/EvacuationCenters/EC1.jpg"/>
        <img src="images/EvacuationCenters/EC2.jpg"/>
        <img src="images/EvacuationCenters/EC3.jpg"/>
        <img src="images/EvacuationCenters/EC4.jpg"/>

        <br><h4>Links related to Evacuation Centers</h4>
        <ul class="alt">
            <li><a href="http://www.batangas.gov.ph/portal/evacuation-centers/">Official list from batangas.gov.ph</a></li>
            <li><a href="https://www.untvweb.com/news/list-evacuation-centers-in-batangas/">Short article from untvweb</a></li>
        </ul>
		</div>
	</section>
@endsection