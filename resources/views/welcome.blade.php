@extends ('layout_main')

<!-- Banner -->
@section('banner')
    <section id="banner">
        <h2>Welcome to IBIG</h2>
        <p>Lorem ipsum dolor sit amet nullam consequat <br /> interdum vivamus donce sed libero.</p>
        <ul class="actions">
            <li><a href="\projects" class="button special big">View Projects</a></li>
        </ul>
    </section>
@endsection

@section('content')

<?php
    $compareLocation=$customize->compareLocation;
    $benefactorSpotLight=$customize->benefactorSpotLight;
    $compareGender=$customize->compareGender;
?>
<script type="text/javascript">
    var compareLocationVal = <?php echo $compareLocation ?>;
    var benefactorSpotLightVal = <?php echo $benefactorSpotLight ?>;
    var compareGenderVal = <?php echo $compareGender ?>;
</script>



<!-- One -->

<section id="one" class="wrapper style1 special">
    <span title="Comparative Statistics based on Location">
        <img class="image customIcon compareLocationToggleOn" src="\images\icons/add-512.png"
        style="display: none; " />
    </span>
    <div class="hide" id="compareLocation">
        <img class="image customIcon compareLocationToggleOff" src="\images\icons/remove-512.png" style="" />
        <div class="container">
            <header class="major">
                <h2>People of Laguna give more than Manila</h2>
                <p>IBIG statistics</p>
            </header>
            <div class="row 150%">
                <div class="6u 12u$(xsmall)">
                    <div class="image fit captioned">
                        <h3>58% of Donations are by the people of Laguna</h3>
                    </div>
                </div>
                <div class="6u$ 12u$(xsmall)">
                    <div class="image fit captioned">
                        <h3>42% of Donations are by the people of Manila</h3>
                    </div>
                </div>
            </div>
            <div class="feature-grid">
                <div class="feature">
                    <div class="image rounded"><img src="images/pic06.jpg" alt="" /></div>
                    <div class="content">
                        <header>
                            <h4>Fresh Air!</h4>
                            <p>58% of Donations are by the people of Laguna</p>
                        </header>
                        <p>Maybe it's the fresh air of Laguna that gives it's people a fresh new perspective that makes them more generous.</p>
                    </div>
                </div>
                <div class="feature">
                    <div class="image rounded"><img src="images/pic07.jpg" alt="" /></div>
                    <div class="content">
                        <header>
                            <h4>Stuck in traffic?</h4>
                            <p>42% of Donations are by the people of Manila</p>
                        </header>
                        <p>Donations are a bit on a jam here in Manila. Maybe you'd want to change route. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Two -->
<section id="two" class="wrapper style2">
    <span title="Benefactor Spot Light"class="wrapper style2">
        <img class="image customIcon benefactorSpotLightToggleOn" src="\images\icons/add-512.png"
        style="display: none; " />
    </span>
    <div class="hide" id="benefactorSpotLight">
        <img class="image customIcon benefactorSpotLightToggleOff" src="\images\icons/remove-512.png" style="" />
        <div class="container 75%">
            <div class="row 200%">
                <div class="6u 12u$(medium)">
                    <header class="major">
                        <h2>A Big welcome to you Juan!</h2>
                        <p>From I love Sta Rosa</p>
                    </header>
                </div>
                <div class="6u$ 12u$(medium)">
                    <p>On 11/1/2019 Juan donated a whopping 2,000 Pesos to our project Lay on Hands. Not only did Mr Juan donate but he also volunteered! We send you all our thanks for your generosity and your service.</p>
                </div>
            </div>
            <div class="project">
                <div class="image rounded left" style="margin-left: -2%;">
                    <a href="/users/9099/owned"><img src="\images/user.jpg" alt="" style="max-height: 10em; width: auto;" /></a>
                </div>
                <div class="content">
                    <header>
                        <h2>Php 2000</h2>
                        <p><a href="/users/9099/owned">Juan Dela Cruz</a> 11/1/2019</p>
                    </header>
                    <p>I'll also be going to your volunteering unit at MM</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Three -->
<section id="three" class="wrapper style1 special">
    <span title="Comparative Statistics based on Location">
        <img class="image customIcon compareGenderToggleOn" src="\images\icons/add-512.png"
        style="display: none; " />
    </span>
    <div class="hide" id="compareGender">
        <img class="image customIcon compareGenderToggleOff" src="\images\icons/remove-512.png" style="" />
        <div class="container">
            <header class="major">
                <h2>Women give more than Men</h2>
                <p>IBIG statistics</p>
            </header>
            <div class="row 150%">
                <div class="6u 12u$(xsmall)">
                    <div class="image fit captioned">
                        <h3>62% of Donations are by women</h3>
                    </div>
                </div>
                <div class="6u$ 12u$(xsmall)">
                    <div class="image fit captioned">
                        <h3>38% of Donations are by men</h3>
                    </div>
                </div>
            </div>
            <div class="feature-grid">
                <div class="feature">
                    <div class="image rounded"><img src="images/pic06.jpg" alt="" /></div>
                    <div class="content">
                        <header>
                            <h4>Girl Power</h4>
                            <p>62% of Donations are by women</p>
                        </header>
                        <p>Good job ladies! Making the world a better and healthier place one donation at a time.</p>
                    </div>
                </div>
                <div class="feature">
                    <div class="image rounded"><img src="images/pic07.jpg" alt="" /></div>
                    <div class="content">
                        <header>
                            <h4>Hussle</h4>
                            <p>38% of Donations are by men</p>
                        </header>
                        <p>Nothing to be ashamed about. What's given is still given and we should still be proud of that. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Four -->
<!-- <section id="four" class="wrapper style1">
    <div class="container">
        <header class="major special">
            <h2>Mauris vulputate dolor</h2>
            <p>Feugiat sed lorem ipsum magna</p>
        </header>
        <ul class="actions">
            <li><a href="#" class="button special big">Nulla luctus</a></li>
            <li><a href="#" class="button big">Sed vulputate</a></li>
        </ul>
    </div>
</section>
 -->
<!-- Five -->
<!-- <section id="five" class="wrapper style3 special">
    <div class="container">
        <header class="major">
            <h2>Aenean elementum ligula</h2>
            <p>Feugiat sed lorem ipsum magna</p>
        </header>
        <ul class="actions">
            <li><a href="#" class="button special big">Get in touch</a></li>
        </ul>
    </div>
</section> -->
@endsection

<!-- Footer -->
@section('footer')
@endsection

<!-- Additional Scripts -->
@section('script')
    <script src="\assets\js\customization\welcome.js"></script>
@endsection