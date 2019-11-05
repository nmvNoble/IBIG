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
        <link rel="stylesheet" href="/assets/css/main.css" />
    </head>
    <body class="landing">

        <!-- Header -->
        <header id="header" class="alt">
            <h1><a href="/users/9099/owned" class={{Request::is('users*') ? 'current_page_item' : ''}}>J.DC</a><strong><a href="/" > @IBIG</a></strong></h1>
            <form action="{{ route('search') }}" method="POST">
                @csrf
                  <div class="row">
                    <div class="col-md-6">
                      <input type="text" name="query" class="form-control" placeholder="Search" style="width: 350px;margin-left: 400px; display: inline; margin-top: 30px; font-color: white; background-color: rgb(255, 255, 255);">
                    </div>
                    <div class="col-md-6">
                      <button class="btn btn-default" value="search" style="display: inline-block;margin-top: 30px;width: 10px;margin-right: 500px "></button>
                    </div>
                  </div>
                </form>
            <nav id="nav" style="float: right;">
                <ul>
                    <li class={{Request::path() === '/' ? 'current_page_item' : ''}}>
                        <a href="/" accesskey="1" title="">Home</a>
                    </li>
                    <li class={{Request::is('projects*') ? 'current_page_item' : ''}}><a href="\projects">Projects</a></li>
                    <li class="inactive_page_item"><a href="\elements.html">Elements</a></li>
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
                <ul class="icons">
                    <li><a href="#" class="icon fa-facebook"></a></li>
                    <li><a href="#" class="icon fa-twitter"></a></li>
                    <li><a href="#" class="icon fa-instagram"></a></li>
                </ul>
                <ul class="copyright">
                    <li>&copy; IBIG</li>
                    <li>Design: <a href="http://templated.co">TEMPLATED</a></li>
                    <li>Images: <a href="http://unsplash.com">Unsplash</a></li>
                </ul>
            </div>
        </footer>

        <!-- Scripts -->
            <script src="assets/js/jquery.min.js"></script>
            <script src="assets/js/skel.min.js"></script>
            <script src="assets/js/util.js"></script>
            <script src="assets/js/main.js"></script>

    </body>
</html>
