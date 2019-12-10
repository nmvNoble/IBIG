<!DOCTYPE HTML>
<html>
    <head>
        <title>IBIG</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!-- <link rel="stylesheet" href="assets/css/main.css" /> -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="/assets/css/main.css" />
        <link rel="stylesheet" href="/assets/css/added.css" />
        <link rel="stylesheet" href="/assets/css/customization.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </head>
    <?php
        $donateNotif=$customize->donateNotif;
    ?>
    <script type="text/javascript">
      var donateNotifVal = <?php echo $donateNotif ?>;
    </script>

    
   
    <body class="landing">

        <!-- Header -->
        <header id="header" class="alt">
            <form action="{{ route('search') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                      <input type="text" name="query" class="form-control" placeholder="Search" style="width: 350px;margin-left: 400px; display: inline; margin-top: 30px; font-color: white; background-color: rgb(255, 255, 255);" id= "searchtext" onkeyup="success()">
                    </div>
                    <div class="col-md-6">
                      <button class="button" value="search" style="display: inline-block;margin-top: 30px; height: 45px;" id="searchBtn" onclick="verify()" disabled>search</button>
                    </div>
                </div>
            </form>
            <script type="text/javascript">
                function success() {
                    if(document.getElementById("searchtext").value==="") { 
                        document.getElementById('searchBtn').disabled = true; 
                    } else { 
                        document.getElementById('searchBtn').disabled = false;
                    }
                }
            </script>
            <h1><a href="/users/9099/owned" class={{Request::is('users*') ? 'current_page_item' : ''}}>J.DC</a><strong><a href="/welcome" > @IBIG</a></strong></h1>
            
            <nav id="nav" style="float: right;">
                <ul>
                    
                    <li style="display: none;" class="donateNotifToggleOn">
                        <span title="User Donations Notification Tab">
                            <img class="image customIcon " src="\images\icons/add-white-512.png"/>
                        </span>
                    </li>
                    <li id="donateNotif" class={{Request::is('users/*/donatedTo') ? 'current_page_item' : ''}} >
                        <img class="image customIcon donateNotifToggleOff" src="\images\icons/remove-white-512.png"/> 
                        <a href="/users/9099/donatedTo" accesskey="0" title="">Your Donations</a>
                    </li>

                    <li class={{Request::path() === 'welcome' ? 'current_page_item' : ''}}>
                        <a href="/welcome" accesskey="1" title="">Home</a>
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

      
        <?php
        $link = mysqli_connect("localhost", "root", "", "ibig"); 
        if($link === false){ 
            die("ERROR: Could not connect. "  
                . mysqli_connect_error()); 
                } 
        if(isset($_COOKIE["donateNotif"])){
            $donateNotif = ($_COOKIE["donateNotif"]);
            $sql = "UPDATE customizes SET donateNotif='$donateNotif' WHERE id=1"; 
            if(mysqli_query($link, $sql)){ 
                  echo '<script>';
                  echo 'console.log("Record was updated successfully.")';
                  echo '</script>';
                  setcookie('donateNotif', '', 1, '/');
            } else { 
                echo "ERROR: Could not able to execute $sql. "  
                . mysqli_error($link); 
            }  
        }
        if(isset($_COOKIE["donateComputed"])){
            $donateComputed = ($_COOKIE["donateComputed"]);
            $sql = "UPDATE customizes SET donateComputed='$donateComputed' WHERE id=1"; 
            if(mysqli_query($link, $sql)){ 
                  echo '<script>';
                  echo 'console.log("Record was updated successfully.")';
                  echo '</script>';
                  setcookie('donateComputed', '', 1, '/');
            } else { 
                echo "ERROR: Could not able to execute $sql. "  
                . mysqli_error($link); 
            }  
        }
        if(isset($_COOKIE["donateProgress"])){
            $donateProgress = ($_COOKIE["donateProgress"]);
            $sql = "UPDATE customizes SET donateProgress='$donateProgress' WHERE id=1"; 
            if(mysqli_query($link, $sql)){ 
                  echo '<script>';
                  echo 'console.log("Record was updated successfully.")';
                  echo '</script>';
                  setcookie('donateProgress', '', 1, '/');
            } else { 
                echo "ERROR: Could not able to execute $sql. "  
                . mysqli_error($link); 
            }  
        }

        if(isset($_COOKIE["donateUnordered"])){
            $donateUnordered = ($_COOKIE["donateUnordered"]);
            $sql = "UPDATE customizes SET donateUnordered='$donateUnordered' WHERE id=1"; 
            if(mysqli_query($link, $sql)){ 
                  echo '<script>';
                  echo 'console.log("Record was updated successfully.")';
                  echo '</script>';
                  setcookie('donateUnordered', '', 1, '/');
            } else { 
                echo "ERROR: Could not able to execute $sql. "  
                . mysqli_error($link); 
            }  
        }
        if(isset($_COOKIE["donateAlternate"])){
            $donateAlternate = ($_COOKIE["donateAlternate"]);
            $sql = "UPDATE customizes SET donateAlternate='$donateAlternate' WHERE id=1"; 
            if(mysqli_query($link, $sql)){ 
                  echo '<script>';
                  echo 'console.log("Record was updated successfully.")';
                  echo '</script>';
                  setcookie('donateAlternate', '', 1, '/');
            } else { 
                echo "ERROR: Could not able to execute $sql. "  
                . mysqli_error($link); 
            }  
        }
        if(isset($_COOKIE["donateOrdered"])){
            $donateOrdered = ($_COOKIE["donateOrdered"]);
            $sql = "UPDATE customizes SET donateOrdered='$donateOrdered' WHERE id=1"; 
            if(mysqli_query($link, $sql)){ 
                  echo '<script>';
                  echo 'console.log("Record was updated successfully.")';
                  echo '</script>';
                  setcookie('donateOrdered', '', 1, '/');
            } else { 
                echo "ERROR: Could not able to execute $sql. "  
                . mysqli_error($link); 
            }  
        }
        if(isset($_COOKIE["projectProgess"])){
            $projectProgess = ($_COOKIE["projectProgess"]);
            $sql = "UPDATE customizes SET projectProgess='$projectProgess' WHERE id=1"; 
            if(mysqli_query($link, $sql)){ 
                  echo '<script>';
                  echo 'console.log("Record was updated successfully.")';
                  echo '</script>';
                  setcookie('projectProgess', '', 1, '/');
            } else { 
                echo "ERROR: Could not able to execute $sql. "  
                . mysqli_error($link); 
            }  
        }
        if(isset($_COOKIE["projDescTab"])){
            $projDescTab = ($_COOKIE["projDescTab"]);
            $sql = "UPDATE customizes SET projectDescTab='$projDescTab' WHERE id=1"; 
            if(mysqli_query($link, $sql)){ 
                  echo '<script>';
                  echo 'console.log("Record was updated successfully.")';
                  echo '</script>';
                  setcookie('projDescTab', '', 1, '/');
            } else { 
                echo "ERROR: Could not able to execute $sql. "  
                . mysqli_error($link); 
            }  
        }
        if(isset($_COOKIE["projectUpdateTab"])){
            $projectUpdateTab = ($_COOKIE["projectUpdateTab"]);
            $sql = "UPDATE customizes SET projectUpdateTab='$projectUpdateTab' WHERE id=1"; 
            if(mysqli_query($link, $sql)){ 
                  echo '<script>';
                  echo 'console.log("Record was updated successfully.")';
                  echo '</script>';
                  setcookie('projectUpdateTab', '', 1, '/');
            } else { 
                echo "ERROR: Could not able to execute $sql. "  
                . mysqli_error($link); 
            }  
        }
        if(isset($_COOKIE["projComntTab"])){
            $projComntTab = ($_COOKIE["projComntTab"]);
            $sql = "UPDATE customizes SET projComntTab='$projComntTab' WHERE id=1"; 
            if(mysqli_query($link, $sql)){ 
                  echo '<script>';
                  echo 'console.log("Record was updated successfully.")';
                  echo '</script>';
                  setcookie('projComntTab', '', 1, '/');
            } else { 
                echo "ERROR: Could not able to execute $sql. "  
                . mysqli_error($link); 
            }  
        }
        if(isset($_COOKIE["projDntnTab"])){
            $projDntnTab = ($_COOKIE["projDntnTab"]);
            $sql = "UPDATE customizes SET projDntnTab='$projDntnTab' WHERE id=1"; 
            if(mysqli_query($link, $sql)){ 
                  echo '<script>';
                  echo 'console.log("Record was updated successfully.")';
                  echo '</script>';
                  setcookie('projDntnTab', '', 1, '/');
            } else { 
                echo "ERROR: Could not able to execute $sql. "  
                . mysqli_error($link); 
            }  
        }
        if(isset($_COOKIE["projDescText"])){
            $projDescText = ($_COOKIE["projDescText"]);
            $sql = "UPDATE customizes SET projDescText='$projDescText' WHERE id=1"; 
            if(mysqli_query($link, $sql)){ 
                  echo '<script>';
                  echo 'console.log("Record was updated successfully.")';
                  echo '</script>';
                  setcookie('projDescText', '', 1, '/');
            } else { 
                echo "ERROR: Could not able to execute $sql. "  
                . mysqli_error($link); 
            }  
        }

        if(isset($_COOKIE["compareLocation"])){
            $compareLocation = ($_COOKIE["compareLocation"]);
            $sql = "UPDATE customizes SET compareLocation='$compareLocation' WHERE id=1"; 
            if(mysqli_query($link, $sql)){ 
                  echo '<script>';
                  echo 'console.log("Record was updated successfully.")';
                  echo '</script>';
                  setcookie('compareLocation', '', 1, '/');
            } else { 
                echo "ERROR: Could not able to execute $sql. "  
                . mysqli_error($link); 
            }  
        }

        if(isset($_COOKIE["benefactorSpotLight"])){
            $benefactorSpotLight = ($_COOKIE["benefactorSpotLight"]);
            $sql = "UPDATE customizes SET benefactorSpotLight='$benefactorSpotLight' WHERE id=1"; 
            if(mysqli_query($link, $sql)){ 
                  echo '<script>';
                  echo 'console.log("Record was updated successfully.")';
                  echo '</script>';
                  setcookie('benefactorSpotLight', '', 1, '/');
            } else { 
                echo "ERROR: Could not able to execute $sql. "  
                . mysqli_error($link); 
            }  
        }

        if(isset($_COOKIE["compareGender"])){
            $compareGender = ($_COOKIE["compareGender"]);
            $sql = "UPDATE customizes SET compareGender='$compareGender' WHERE id=1"; 
            if(mysqli_query($link, $sql)){ 
                  echo '<script>';
                  echo 'console.log("Record was updated successfully.")';
                  echo '</script>';
                  setcookie('compareGender', '', 1, '/');
            } else { 
                echo "ERROR: Could not able to execute $sql. "  
                . mysqli_error($link); 
            }  
        }

        if(isset($_COOKIE["userOwnedTab"])){
            $userOwnedTab = ($_COOKIE["userOwnedTab"]);
            $sql = "UPDATE customizes SET userOwnedTab='$userOwnedTab' WHERE id=1"; 
            if(mysqli_query($link, $sql)){ 
                  echo '<script>';
                  echo 'console.log("Record was updated successfully.")';
                  echo '</script>';
                  setcookie('userOwnedTab', '', 1, '/');
            } else { 
                echo "ERROR: Could not able to execute $sql. "  
                . mysqli_error($link); 
            }  
        }

        if(isset($_COOKIE["userDonatedTab"])){
            $userDonatedTab = ($_COOKIE["userDonatedTab"]);
            $sql = "UPDATE customizes SET userDonatedTab='$userDonatedTab' WHERE id=1"; 
            if(mysqli_query($link, $sql)){ 
                  echo '<script>';
                  echo 'console.log("Record was updated successfully.")';
                  echo '</script>';
                  setcookie('userDonatedTab', '', 1, '/');
            } else { 
                echo "ERROR: Could not able to execute $sql. "  
                . mysqli_error($link); 
            }  
        }

        if(isset($_COOKIE["orgOwnedTab"])){
            $orgOwnedTab = ($_COOKIE["orgOwnedTab"]);
            $sql = "UPDATE customizes SET orgOwnedTab='$orgOwnedTab' WHERE id=1"; 
            if(mysqli_query($link, $sql)){ 
                  echo '<script>';
                  echo 'console.log("Record was updated successfully.")';
                  echo '</script>';
                  setcookie('orgOwnedTab', '', 1, '/');
            } else { 
                echo "ERROR: Could not able to execute $sql. "  
                . mysqli_error($link); 
            }  
        }

        if(isset($_COOKIE["orgDonatedTab"])){
            $orgDonatedTab = ($_COOKIE["orgDonatedTab"]);
            $sql = "UPDATE customizes SET orgDonatedTab='$orgDonatedTab' WHERE id=1"; 
            if(mysqli_query($link, $sql)){ 
                  echo '<script>';
                  echo 'console.log("Record was updated successfully.")';
                  echo '</script>';
                  setcookie('orgDonatedTab', '', 1, '/');
            } else { 
                echo "ERROR: Could not able to execute $sql. "  
                . mysqli_error($link); 
            }  
        }

        if(isset($_COOKIE["orgAboutUsTab"])){
            $orgAboutUsTab = ($_COOKIE["orgAboutUsTab"]);
            $sql = "UPDATE customizes SET orgAboutUsTab='$orgAboutUsTab' WHERE id=1"; 
            if(mysqli_query($link, $sql)){ 
                  echo '<script>';
                  echo 'console.log("Record was updated successfully.")';
                  echo '</script>';
                  setcookie('orgAboutUsTab', '', 1, '/');
            } else { 
                echo "ERROR: Could not able to execute $sql. "  
                . mysqli_error($link); 
            }  
        }

        if(isset($_COOKIE["orgAffiliatesTab"])){
            $orgAffiliatesTab = ($_COOKIE["orgAffiliatesTab"]);
            $sql = "UPDATE customizes SET orgAffiliatesTab='$orgAffiliatesTab' WHERE id=1"; 
            if(mysqli_query($link, $sql)){ 
                  echo '<script>';
                  echo 'console.log("Record was updated successfully.")';
                  echo '</script>';
                  setcookie('orgAffiliatesTab', '', 1, '/');
            } else { 
                echo "ERROR: Could not able to execute $sql. "  
                . mysqli_error($link); 
            }  
        }
        mysqli_close($link); 

        ?>

        <!-- Scripts --><!-- 
            <script src="assets/js/jquery.min.js"></script>
            <script src="assets/js/skel.min.js"></script>
            <script src="assets/js/util.js"></script>
            <script src="assets/js/main.js"></script> -->
            <!-- DB update -->

            <script src="\assets\js\customization\layout_main.js"></script>
            @yield('script')

    </body>
</html>

<!--
    Spatial by TEMPLATED
    templated.co @templatedco
    Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
