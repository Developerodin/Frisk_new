<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>The Neuralnest</title>
    <meta name="description" content="Frisk - Creative Agency & Portfolio HTML Template">
    <meta name="keywords" content="Frisk - Creative Agency & Portfolio HTML Template">
    <meta name="robots" content="INDEX,FOLLOW">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicons - Place favicon.ico in the root directory -->
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon.png">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/img/favicons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!--==============================
	  Google Fonts
	============================== -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&family=Unbounded:wght@400;500;600;700&display=swap"
        rel="stylesheet">



    <!--==============================
	    All CSS File
	============================== -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.min.css">
    <link rel="stylesheet" href="assets/css/slick.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/imageRevealHover.css">
    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

    <style>
        @keyframes animate {
            100% {
                transform: translateX(-3114.77px);
            }
        }

        .motion {
            width: 100000px;
            transform: translateX(0px);
            animation: 46.4s linear 0s infinite normal none running animate;
        }
    </style>

</head>

<body>


    <!--==============================
     Preloader
    ==============================-->
    <!-- <div class="preloader">
        <div class="preloader-inner">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div> -->

    <div class="popup-search-box">
        <button class="searchClose"><img src="assets/img/icon/close.svg" alt="img"></button>
        <form action="#">
            <input type="text" placeholder="Search Here..">
            <button type="submit"><img src="assets/img/icon/search-white.svg" alt="img"></button>
        </form>
    </div>

    <div class="sidemenu-wrapper">
        <div class="sidemenu-content">
            <button class="closeButton sideMenuCls"><img src="assets/img/icon/close.svg" alt="icon"></button>
            <div class="widget footer-widget">
                <div class="widget-about">
                    <div class="footer-logo">
                        <!-- <a href="index.php"><img src="assets/img/logo-white.svg" alt="Ovation"></a> -->
                        <h3 style="color:white;">The Neuralnest</h3>
                    </div>
                    <p class="about-text">We are digital agency that helps businesses develop immersive and engaging</p>
                    <div class="sidebar-wrap">
                        <h6>27 Division St, New York,</h6>
                        <h6>NY 10002, USA</h6>
                    </div>
                    <div class="sidebar-wrap">
                        <h6><a href="tel:1800123654987">+1 800 123 654 987 </a></h6>
                        <h6><a href="mailto:frisk.agency@mail.com">frisk.agency@mail.com</a></h6>
                    </div>
                    <div class="social-btn style2">
                        <a href="https://www.facebook.com/">
                            <span class="link-effect">
                                <span class="effect-1"><i class="fab fa-facebook"></i></span>
                                <span class="effect-1"><i class="fab fa-facebook"></i></span>
                            </span>
                        </a>
                        <a href="https://instagram.com/">
                            <span class="link-effect">
                                <span class="effect-1"><i class="fab fa-instagram"></i></span>
                                <span class="effect-1"><i class="fab fa-instagram"></i></span>
                            </span>
                        </a>
                        <a href="https://twitter.com/">
                            <span class="link-effect">
                                <span class="effect-1"><i class="fab fa-twitter"></i></span>
                                <span class="effect-1"><i class="fab fa-twitter"></i></span>
                            </span>
                        </a>
                        <a href="https://dribbble.com/">
                            <span class="link-effect">
                                <span class="effect-1"><i class="fab fa-dribbble"></i></span>
                                <span class="effect-1"><i class="fab fa-dribbble"></i></span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-end">
                <a href="contact.php" class="chat-btn gsap-magnetic">Let’s Talk with us</a>
            </div>
        </div>
    </div>


    <!--==============================
        Mobile Menu
        ============================== -->
    <div class="mobile-menu-wrapper">
        <div class="mobile-menu-area">
            <button class="menu-toggle"><i class="fas fa-times"></i></button>
            <div class="mobile-logo">
                <!-- <a href="index.php"><img src="assets/img/logo.svg" alt="Ovation"></a> -->
                <h2>The Neuralnest</h2>
            </div>
            <div class="mobile-menu">
                <ul>
                    <li class="menu-item-has-children">
                        <a href="<?php echo base_url('main');?>">Home</a>
                        <ul class="sub-menu">

                            <li><a href="<?php echo base_url('main');?>">Digital Agency</a></li>
                            <li><a href="home-2.php">Creative Agency</a></li>
                            <li><a href="home-3.php">Design Studio</a></li>
                            <li><a href="home-4.php">Digital Marketing</a></li>
                            <li><a href="home-5.php">Modern Agency</a></li>
                            <li><a href="home-6.php">Creative Studio</a></li>
                            <li><a href="home-7.php">Startup Agency</a></li>
                            <li><a href="home-8.php">Personal Portfolio</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="<?php echo base_url('#');?>">Pages</a>
                        <ul class="sub-menu">
                            <li><a href="<?php echo base_url('about');?>">About Page</a></li>
                            <li class="menu-item-has-children"><a href="service.php">Service Page</a>
                                <ul class="sub-menu">
                                    <li><a href="service.php">Service Version 1</a></li>
                                    <li><a href="service-2.php">Service Version 2</a></li>
                                    <li><a href="service-3.php">Service Version 3</a></li>
                                    <li><a href="service-details.php">Service Details Page</a></li>
                                </ul>
                            </li>
                            <li><a href="service-details.php">Service Details</a></li>
                            <li><a href="team.php">Team Page</a></li>
                            <li><a href="team-details.php">Team Details Page</a></li>
                            <li><a href="pricing.php">Pricing Page</a></li>
                            <li><a href="faq.php">FAQ Page</a></li>
                            <li><a href="error.php">Error Page</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">Portfolio</a>
                        <ul class="sub-menu">
                            <li><a href="project.php">Portfolio Masonary</a></li>
                            <li><a href="project-2.php">Portfolio Pinterest</a></li>
                            <li><a href="project-3.php">Portfolio Gallery</a></li>
                            <li><a href="project-4.php">Portfolio Full Width</a></li>
                            <li><a href="project-5.php">Portfolio Slider</a></li>
                            <li><a href="project-6.php">Portfolio Interactive</a></li>
                            <li><a href="project-details.php">Portfolio Details</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">Blog</a>
                        <ul class="sub-menu">
                            <li><a href="blog.php">Blog Standard</a></li>
                            <li><a href="blog-2.php">Blog 2 Column</a></li>
                            <li><a href="blog-details.php">Blog Details</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="contact.php">Contact</a>
                    </li>
                </ul>
            </div>
            <div class="sidebar-wrap">
                <h6>27 Division St, New York,</h6>
                <h6>NY 10002, USA</h6>
            </div>
            <div class="sidebar-wrap">
                <h6><a href="tel:1800123654987">+1 800 123 654 987 </a></h6>
                <h6><a href="mailto:frisk.agency@mail.com">frisk.agency@mail.com</a></h6>
            </div>
            <div class="social-btn style3">
                <a href="https://www.facebook.com/">
                    <span class="link-effect">
                        <span class="effect-1"><i class="fab fa-facebook"></i></span>
                        <span class="effect-1"><i class="fab fa-facebook"></i></span>
                    </span>
                </a>
                <a href="https://instagram.com/">
                    <span class="link-effect">
                        <span class="effect-1"><i class="fab fa-instagram"></i></span>
                        <span class="effect-1"><i class="fab fa-instagram"></i></span>
                    </span>
                </a>
                <a href="https://twitter.com/">
                    <span class="link-effect">
                        <span class="effect-1"><i class="fab fa-twitter"></i></span>
                        <span class="effect-1"><i class="fab fa-twitter"></i></span>
                    </span>
                </a>
                <a href="https://dribbble.com/">
                    <span class="link-effect">
                        <span class="effect-1"><i class="fab fa-dribbble"></i></span>
                        <span class="effect-1"><i class="fab fa-dribbble"></i></span>
                    </span>
                </a>
            </div>
        </div>
    </div>


    <!--==============================
	Header Area
    ==============================-->
    <header class="nav-header header-layout1">
        <div class="sticky-wrapper">
            <!-- Main Menu Area -->
            <div class="menu-area">
                <div class="container-fluid">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto">
                            <div class="header-logo">
                                 <!-- <a href="index.php"><img src="assets/img/logo.svg" alt="logo"></a> -->
                                 <h3>The Neuralnest</h3>
                            </div>
                        </div>
                        <div class="col-auto ms-auto">
                            <nav class="main-menu d-none d-lg-inline-block">
                                <ul>
                                    <li class="active menu-item-has-children">
                                        <a href="<?php echo base_url('/');?>">
                                            <span class="link-effect">
                                                <span class="effect-1">HOME</span>
                                                <span class="effect-1">HOME</span>
                                            </span>
                                        </a>
                                        <!-- <ul class="sub-menu">
                                            <li class="active"><a href="<?php echo base_url('/');?>">Digital
                                                    Agency</a></li>
                                            <li><a href="<?php echo base_url('Home2');?>">Creative Agency</a></li>
                                            <li><a href="<?php echo base_url('Home3');?>">Design Studio</a></li>
                                            <li><a href="<?php echo base_url('Home4');?>">Digital Marketing</a></li>
                                            <li><a href="<?php echo base_url('Home5');?>">Modern Agency</a></li>
                                            <li><a href="<?php echo base_url('Home6');?>">Creative Studio</a></li>
                                            <li><a href="<?php echo base_url('Home7');?>">Startup Agency</a></li>
                                            <li><a href="<?php echo base_url('Home8');?>">Personal Portfolio</a>
                                            </li>
                                        </ul> -->
                                    </li>
                                    <li class="menu-item-has-children">

                                        <a href="<?php echo base_url('faq');?>">
                                            <span class="link-effect">
                                                <span class="effect-1">FAQs</span>
                                                <span class="effect-1">FAQs</span>
                                            </span>
                                        </a>
                                        <!-- <ul class="sub-menu">
                                            <li><a href="about.php">FAQs</a></li>
                                            <li class="menu-item-has-children"><a href="service.php">Service Page</a>
                                                <ul class="sub-menu">
                                                    <li><a href="service.php">Service Version 1</a></li>
                                                    <li><a href="service-2.php">Service Version 2</a></li>
                                                    <li><a href="service-3.php">Service Version 3</a></li>
                                                    <li><a href="service-details.php">Service Details Page</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="team.php">Team Page</a>
                                            </li>
                                            <li><a href="team-details.php">Team Details Page</a></li>
                                            <li><a href="<?php echo base_url('pricing');?>">Pricing Page</a></li>
                                            <li><a href="faq.php">FAQ Page</a></li>
                                            <li><a href="error.php">Error Page</a></li>
                                        </ul>
                                    </li> -->
                                    <li class="menu-item-has-children">
                                        <a href="<?php echo base_url('#');?>">
                                            <span class="link-effect">
                                                <span class="effect-1">PRICING</span>
                                                <span class="effect-1">PRICING</span>
                                            </span>
                                        </a>
                                        <!-- <ul class="sub-menu">
                                            <li><a href="project.php">Portfolio Masonary</a></li>
                                            <li><a href="project-2.php">Portfolio Pinterest</a></li>
                                            <li><a href="project-3.php">Portfolio Gallery</a></li>
                                            <li><a href="project-4.php">Portfolio Full Width</a></li>
                                            <li><a href="project-5.php">Portfolio Slider</a></li>
                                            <li><a href="project-6.php">Portfolio Interactive</a></li>
                                            <li><a href="project-details.php">Portfolio Details</a></li>
                                        </ul>
                                    </li> -->
                                    <li class="menu-item-has-children">
                                        <a href="<?php echo base_url('#');?>">
                                            <span class="link-effect">
                                                <span class="effect-1">BLOG</span>
                                                <span class="effect-1">BLOG</span>
                                            </span>
                                        </a>
                                        <ul class="sub-menu">
                                            <li><a href="blog.php">Blog Standard</a></li>
                                            <li><a href="blog-2.php">Blog 2 Column</a></li>
                                            <li><a href="blog-details.php">Blog Details</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url('contact');?>">
                                            <span class="link-effect">
                                                <span class="effect-1">CONTACT</span>
                                                <span class="effect-1">CONTACT</span>
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                            <div class="navbar-right d-inline-flex d-lg-none">
                                <button type="button" class="menu-toggle sidebar-btn">
                                    <span class="line"></span>
                                    <span class="line"></span>
                                    <span class="line"></span>
                                </button>
                            </div>
                        </div>
                        <div class="col-auto d-none d-lg-block">
                            <div class="header-button">
                                <button type="button" class="search-btn searchBoxToggler"><img
                                        src="assets/img/icon/search.svg" alt="icon">
                                    <span class="link-effect">
                                        <span class="effect-1">SEARCH</span>
                                        <span class="effect-1">SEARCH</span>
                                    </span>
                                </button>
                                <button type="button" class="sidebar-btn sideMenuToggler">
                                    <span class="line"></span>
                                    <span class="line"></span>
                                    <span class="line"></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <!-- Jquery -->
    <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/gsap.min.js"></script>
    <script src="assets/js/ScrollSmoother.min.js"></script>
    <script src="assets/js/ScrollTrigger.min.js"></script>
    <script src="assets/js/SplitText.min.js"></script>
    <script src="assets/js/twinmax.js"></script>
    <script src="assets/js/imageRevealHover.js"></script>
    <script src="assets/js/jarallax.min.js"></script>
    <script src="assets/js/jquery.marquee.min.js"></script>
    <script src="assets/js/waypoints.js"></script>
    <script src="assets/js/wow.js"></script>

    <!-- Main Js File -->
    <script src="assets/js/main.js"></script>
</body>

</html>