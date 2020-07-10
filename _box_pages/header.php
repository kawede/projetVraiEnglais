<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Kawede Teacher program</title>

    <!-- Favicon -->
    <link rel="icon" href="img\kawedelogo.JPG">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">
        <!-- Top Header Area -->
        <div class="top-header-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-md-6">
                        <!-- Breaking News Widget -->
                        <div class="breaking-news-area d-flex align-items-center">
                            <div class="news-title">
                                <p style="color:rgb(251,188,5); font-family: tahoma;">Breaking News:</p>
                            </div>
                            <div id="breakingNewsTicker" class="ticker">
                                <ul>
                                    <li><a href="single-post.php"style="color:white; font-family: tahoma;">Un Bon endroit pour devenir bilingue</a></li>
                                    <li><a href="single-post.php" style="color:white; font-family: tahoma;"> Welcome to Kawede teacher program.</a></li>
                                    <li><a href="single-post.php" style="color:white; font-family: tahoma;">Une academie des langues dans la region de grand lac</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="top-meta-data d-flex align-items-center justify-content-end">
                            <!-- Top Social Info -->
                            <div class="top-social-info" >
                                <a href="https://web.facebook.com/Kawede-Teacher-Program-108761387217295/" ><i class="fa fa-facebook"style="color:rgb(57,87,154);"></i></a>
                                <a href="#"><i class="fa fa-twitter" style="color:rgb(83,172,238);"></i></a>
                                <a href="#"><i class="fa fa-linkedin" style="color:rgb(0,119,181);"></i></a>
                                <a href="#"><i class="fa fa-youtube-play" style="color:rgb(221,75,57);"></i></a>
                            </div>
                            <!-- Top Search Area -->
                            <div class="top-search-area">
                                <form action="index.php" method="post">
                                    <input type="search" name="top-search" id="topSearch" placeholder="Search...">
                                    <button type="submit" class="btn"><i class="fa fa-search" aria-hidden="true"></i></button>
                                </form>
                            </div>
                            <!-- Login -->
                            <a href="login.php" class="login-btn"><i class="fa fa-user" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navbar Area -->
        <div class="vizew-main-menu" id="sticker" style="background-color:rgb(216,212,0);">
            <div class="classy-nav-container breakpoint-off" style="background-color: rgb(216,212,0);">
                <div class="container" style="background-color:rgb(216,212,0);">

                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="vizewNav" style="background-color: rgb(216,212,0);">

                        <!-- Nav brand -->
                        <a href="index.php" class="nav-brand"><img src="img/KawedeLogo.PNG"alt=""></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <div class="classy-menu">

                            <!-- Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li class="active"><a href="index.php" style="color:black; font-family: tahoma;">Home</a></li>
                                    <li><a href="archive-grid.php" style="color:black; font-family: tahoma;">Archives</a></li>
                                    <li><a href="#" style="color:black; font-family: tahoma;">Activités</a>
                                        <ul class="dropdown" style="color:black;" >
                                            <li><a href="index.php"style="color:black; font-family: tahoma;"><i class="fa fa-home" aria-hidden="true"></i>    Home</a></li>
                                            <hr>
                                            <li><a href="archive-list.html" style="color:black;font-family: tahoma;"><i class="fa fa-universal-access" aria-hidden="true"></i>  Campagnes</a></li>
                                            <hr>
                                            <li><a href="archive-grid.php" style="color:black;font-family: tahoma;"><i class="fa fa-users" aria-hidden="true"></i>  Partenaire</a></li>
                                            <hr>
                                           
                                            <li><a href="login.php" style="color:black;font-family: tahoma;"><i class="fa fa-bullhorn" aria-hidden="true"></i>  Publicité</a></li>
                                            <hr>
                                              <li><a href="login.php" style="color:black;font-family: tahoma;"><i class="fa fa-sign-in" aria-hidden="true"></i>  Login</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#" style="color:black; font-family: tahoma;">LEÇONS</a>
                                        <ul class="dropdown" style="color:black;" >
                                            <li><a href="index.php"style="color:black; font-family: tahoma;"></i><i class="fa fa-star" aria-hidden="true"></i>   Anglais Basic</a></li>
                                            <hr>
                                            <li><a href="archive-list.html" style="color:black;font-family: tahoma;"><i class="fa fa-align-center" aria-hidden="true"></i>         intermediaire</a></li>
                                            <hr>
                                            <li><a href="archive-grid.php" style="color:black;font-family: tahoma;"></i><i class="fa fa-fast-forward" aria-hidden="true"></i>      Avancé</a></li>
                                            <hr>
                                           
                                            <li><a href="login.php" style="color:black;font-family: tahoma;"><i class="fa fa-level-up" aria-hidden="true"></i>          Experts </a></li>
                                        </ul>
                                    </li>
                                    <li><a href="lessons.php" style="color:black;font-family: tahoma;">Contact</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>