<?php
$_SERVER['DOCUMENT_ROOT'];
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv='cache-control' content='no-cache'>
<meta http-equiv='expires' content='0'>
<meta http-equiv='pragma' content='no-cache'>
    
    
    
    <title><?php echo"$page_title"; ?></title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">

    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="/css/fontawesome-all.min.css">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="/css/swiper.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="/style.css?version=1.0.0">
</head>

<body class="<?php echo"$body_class";?>">
<header class="site-header">
    <div class="header-bar">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-10 col-lg-3">
                    <h1 class="site-branding flex">
                        <img class="logo" src="/images/logos/dark.png" alt="Teknothon"/>
                        <!--img class="logo-navbar-white" src="/images/logos/light.png" alt="Teknothon"/-->
                        <!--a href="#">TEKNOTHON<span class="text-primary">19</span></a-->
                    </h1>
                </div>

                <div class="col-2 col-lg-9">
                    <nav class="site-navigation">
                        <div class="hamburger-menu d-lg-none">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div><!-- .hamburger-menu -->

                        <ul>
                            <li><a href="/">HOME</a></li>
                            <li><a href="/about">ABOUT</a></li>
                            <li><a href="/events">EVENTS</a></li>
                            <!--li><a href="/sponsors">SPONSORS</a></li-->
                            <li><a href="/contact">CONTACT</a></li>
                            <li><a href="/registration" class="registerbutton flex justify-content-center align-items-center" style="padding-left: 20px; display: flex">REGISTER</a></li>
                        </ul><!-- flex -->
                    </nav><!-- .site-navigation -->
                </div><!-- .col-12 -->
            </div><!-- .row -->
        </div><!-- container-fluid -->
    </div><!-- header-bar -->
</header><!-- .site-header -->