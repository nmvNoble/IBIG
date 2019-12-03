<!DOCTYPE HTML>
<!--
    Spatial by TEMPLATED
    templated.co @templatedco
    Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
    <head>
        <title>IBIG</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
<<<<<<< HEAD
<<<<<<< Updated upstream
        <link rel="stylesheet" href="assets/css/main.css" />
=======
        <link rel="stylesheet" href="/assets/css/main.css" />
        <link rel="stylesheet" href="/assets/css/added.css" />
        <link rel="stylesheet" href="/assets/css/customization.css" />
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
      <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
>>>>>>> Stashed changes
=======
        <link rel="stylesheet" href="/assets/css/main.css" />
        <link rel="stylesheet" href="/assets/css/added.css" />
        <link rel="stylesheet" href="/assets/css/customization.css" />
>>>>>>> dev-Noble-baseCustomization
    </head>
    <body class="landing">

        <!-- Header -->
        <header id="header" class="alt">
            <h1><a href="/users/9099/owned" class={{Request::is('users*') ? 'current_page_item' : ''}}>J.DC</a><strong><a href="/" > @IBIG</a></strong></h1>
            <nav id="nav" style="float: right;">
                <ul>
                    <span title="User Donations Notification Tab">
                        <li style="display: none;" class="donateNotifToggleOn">
                            <img class="image customIcon " src="\images\icons/add-512.png"/>
                        </li>
                    </span>
                    <li id="donateNotif" class={{Request::is('users/*/donatedTo') ? 'current_page_item' : ''}} >
                        <img class="image customIcon donateNotifToggleOff" src="\images\icons/remove-512.png"/>
                        <a href="/users/9099/donatedTo" accesskey="0" title="">Your Donations</a>
                    </li>

                    <li class={{Request::path() === '/' ? 'current_page_item' : ''}}>
                        <a href="/" accesskey="1" title="">Home</a>
                    </li>

                    <li class={{Request::is('projects*') ? 'current_page_item' : ''}}><a href="\projects">Projects</a></li>
                    <!--<li class="inactive_page_item"><a href="\elements.html">Elements</a></li>-->
                </ul>
            </nav>
        </header>

        <a href="#menu" class="navPanelToggle"><span class="fa fa-bars"></span></a>

        <!-- Banner -->
            @yield('banner')

        <!-- Content -->
            @yield('content')

        <!-- Footer -->
        <footer id="footer">
            <div class="container">
                <!--<ul class="icons">
                    <li><a href="#" class="icon fa-facebook"></a></li>
                    <li><a href="#" class="icon fa-twitter"></a></li>
                    <li><a href="#" class="icon fa-instagram"></a></li>
                </ul>-->
                <ul class="copyright">
                    <li>&copy; IBIG</li>
                    <li>Base Design: <a href="http://templated.co">TEMPLATED</a></li>
                    <!--<li>Images: <a href="http://unsplash.com">Unsplash</a></li>-->
                </ul>
            </div>
        </footer>

        <!-- Scripts -->
            <script src="assets/js/jquery.min.js"></script>
            <script src="assets/js/skel.min.js"></script>
            <script src="assets/js/util.js"></script>
            <script src="assets/js/main.js"></script>
            <script src="\assets\js\customization\layout_main.js"></script>
            @yield('script')

    </body>
</html>
