<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>KK Educenter - Online Education & Study Materials</title>
    <meta name="robots" content="index, follow" />
    <meta name="description" content="KK Educenter: Empowering UPSC, State PCS, JEE, NEET, ect. aspirants to achieve their dreams through comprehensive Study Materials.">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">
    <meta name="revisit-after" content="1 days">
    <meta name="author" content="Kaushalendra Kumar">
    

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="/assets/images/favicon.ico">

    <!-- CSS
	============================================ -->
    <link rel="stylesheet" href="/assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/vendor/slick.css">
    <link rel="stylesheet" href="/assets/css/vendor/slick-theme.css">
    <link rel="stylesheet" href="/assets/css/plugins/sal.css">
    <link rel="stylesheet" href="/assets/css/plugins/feather.css">
    <link rel="stylesheet" href="/assets/css/plugins/fontawesome.min.css">
    <link rel="stylesheet" href="/assets/css/plugins/euclid-circulara.css">
    <link rel="stylesheet" href="/assets/css/plugins/swiper.css">
    <link rel="stylesheet" href="/assets/css/plugins/magnify.css">
    <link rel="stylesheet" href="/assets/css/plugins/odometer.css">
    <link rel="stylesheet" href="/assets/css/plugins/animation.css">
    <link rel="stylesheet" href="/assets/css/plugins/bootstrap-select.min.css">
    <link rel="stylesheet" href="/assets/css/plugins/jquery-ui.css">
    <link rel="stylesheet" href="/assets/css/plugins/magnigy-popup.min.css">
    <link rel="stylesheet" href="/assets/css/plugins/plyr.css">
    <link rel="stylesheet" href="/assets/css/style.css">

    <script type="application/ld+json">
        {
            "@context": "https://schema.org/",
            "@type": "WebSite",
            "name": "ApexCSE",
            "url": "https://www.apexcse.com/",
            "potentialAction": {
                "@type": "SearchAction",
                "target": "https://www.apexcse.com/search/?q={search_term_string}",
                "query-input": "required name=search_term_string"
            }
        }
    </script>
</head>

<body class="rbt-header-sticky">
    <!-- Start Header Area -->
    <header class="rbt-header rbt-header-10">
        <div class="rbt-sticky-placeholder"></div>
        <div class="rbt-header-wrapper header-not-transparent header-sticky">
            <div class="container">
                <div class="mainbar-row rbt-navigation-center align-items-center">
                    <div class="header-left rbt-header-content">
                        <div class="header-info">
                            <div class="logo">
                                <a href="/">
                                    <img src="/assets/images/logo/logo.png" alt="Education Logo Images">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="rbt-main-navigation d-none d-xl-block">
                        <nav class="mainmenu-nav">
                            <ul class="mainmenu">
                                <li class="active position-static">
                                    <a href="/">Home</a>
                                </li>
                                <li class="with-megamenu has-menu-child-item position-static">
                                    <a href="javascript:voild(0)">E-Books <i class="feather-chevron-down"></i></a>
                                    <!-- Start Mega Menu  -->
                                    <div class="rbt-megamenu grid-item-2">
                                        <div class="wrapper">
                                            <div class="row row--15">
                                                <div class="col-lg-12 col-xl-6 col-xxl-4 single-mega-item">
                                                    <h3 class="rbt-short-title">NCERT Book English Medium</h3>
                                                    <ul class="mega-menu-item">
                                                        <li><a href="#">Class 12</a></li>
                                                        <li><a href="#">Class 11</a></li>
                                                        <li><a href="#">Class 10</a></li>
                                                        <li><a href="#">Class 9</a></li>
                                                        <li><a href="#">Class 8</a></li>
                                                        <li><a href="#">Class 7</a></li>
                                                        <li><a href="#">Class 6</a></li>
                                                    </ul>
                                                </div>

                                                <div class="col-lg-12 col-xl-6 col-xxl-4 single-mega-item">
                                                    <h3 class="rbt-short-title">NCERT Book Hindi Medium</h3>
                                                    <ul class="mega-menu-item">
                                                        <li><a href="#">Class 12</a></li>
                                                        <li><a href="#">Class 11</a></li>
                                                        <li><a href="#">Class 10</a></li>
                                                        <li><a href="#">Class 9</a></li>
                                                        <li><a href="#">Class 8</a></li>
                                                        <li><a href="#">Class 7</a></li>
                                                        <li><a href="#">Class 6</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Mega Menu  -->
                                </li>
                                <li class="position-static">
                                    <a href="/course/">Courses</a>
                                </li>
                                <li class="position-static">
                                    <a href="/current-affairs/">Current Affairs</a>
                                </li>
                                <li class="position-static">
                                    <a href="/blog/">Blog</a>
                                </li>
                                <li class="with-megamenu has-menu-child-item position-static">
                                    <a href="javascript:voild(0)">Miscellaneous <i class="feather-chevron-down"></i></a>
                                    <!-- Start Mega Menu  -->
                                    <div class="rbt-megamenu grid-item-2">
                                        <div class="wrapper">
                                            <div class="row row--15">
                                                <div class="col-lg-12 col-xl-6 col-xxl-4 single-mega-item">
                                                    <ul class="mega-menu-item">
                                                        <li><a href="#">History</a></li>
                                                        <li><a href="#">Geography</a></li>
                                                        <li><a href="#">Polity</a></li>
                                                        <li><a href="#">Ecomomics</a></li>
                                                        <li><a href="#">Science</a></li>
                                                        <li><a href="#">Science & Tech</a></li>
                                                        <li><a href="#">Esay Hindi</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Mega Menu  -->
                                </li>
            
                            </ul>
                        </nav>
                    </div>

                    <div class="header-right">
                        <!-- Navbar Icons -->
                        <ul class="quick-access">
                            <li class="access-icon">
                                <a class="search-trigger-active rbt-round-btn" href="#">
                                    <i class="feather-search"></i>
                                </a>
                            </li>
                            <li></li>
                        </ul>

                        <div class="rbt-btn-wrapper d-none d-xl-block">
                            <a class="rbt-btn btn-border-gradient radius-round btn-sm hover-transform-none" href="/logout.php">
                                <span>Logout</span>
                            </a>
                        </div>

                        <!-- Start Mobile-Menu-Bar -->
                        <div class="mobile-menu-bar d-block d-xl-none">
                            <div class="hamberger">
                                <button class="hamberger-button rbt-round-btn">
                                    <i class="feather-menu"></i>
                                </button>
                            </div>
                        </div>
                        <!-- Start Mobile-Menu-Bar -->

                    </div>
                </div>
            </div>
            <!-- Start Search Dropdown  -->
            <div class="rbt-search-dropdown">
                <div class="wrapper">
                    <div class="row">
                        <div class="col-lg-12">
                            <form action="/search/">
                                <input type="text" placeholder="What are you looking for?">
                                <div class="submit-btn">
                                    <a class="rbt-btn btn-gradient btn-md">Search</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Search Dropdown  -->
        </div>
    </header>
    <!-- Mobile Menu Section -->
    <div class="popup-mobile-menu">
        <div class="inner-wrapper">
            <div class="inner-top">
                <div class="content">
                    <div class="logo">
                        <a href="/">
                            <img src="/assets/images/logo/logo.png" alt="Education Logo Images">
                        </a>
                    </div>
                    <div class="rbt-btn-close">
                        <button class="close-button rbt-round-btn"><i class="feather-x"></i></button>
                    </div>
                </div>
            </div>

            <nav class="mainmenu-nav">
                <ul class="mainmenu">
                    <li class="active position-static">
                        <a href="/">Home</a>
                    </li>
                    <li class="with-megamenu has-menu-child-item position-static">
                        <a href="javascript:voild(0)">E-Books <i class="feather-chevron-down"></i></a>
                        <!-- Start Mega Menu  -->
                        <div class="rbt-megamenu grid-item-2">
                            <div class="wrapper">
                                <div class="row row--15">
                                    <div class="col-lg-12 col-xl-6 col-xxl-4 single-mega-item">
                                        <h3 class="rbt-short-title">NCERT Book English Medium</h3>
                                        <ul class="mega-menu-item">
                                            <li><a href="#">Class 12</a></li>
                                            <li><a href="#">Class 11</a></li>
                                            <li><a href="#">Class 10</a></li>
                                            <li><a href="#">Class 9</a></li>
                                            <li><a href="#">Class 8</a></li>
                                            <li><a href="#">Class 7</a></li>
                                            <li><a href="#">Class 6</a></li>
                                        </ul>
                                    </div>

                                    <div class="col-lg-12 col-xl-6 col-xxl-4 single-mega-item">
                                        <h3 class="rbt-short-title">NCERT Book Hindi Medium</h3>
                                        <ul class="mega-menu-item">
                                            <li><a href="#">Class 12</a></li>
                                            <li><a href="#">Class 11</a></li>
                                            <li><a href="#">Class 10</a></li>
                                            <li><a href="#">Class 9</a></li>
                                            <li><a href="#">Class 8</a></li>
                                            <li><a href="#">Class 7</a></li>
                                            <li><a href="#">Class 6</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Mega Menu  -->
                    </li>
                    <li class="position-static">
                        <a href="/course/">Courses</a>
                    </li>
                    <li class="position-static">
                        <a href="/current-affairs/">Current Affairs</a>
                    </li>
                    <li class="position-static">
                        <a href="/blog/">Blog</a>
                    </li>
                    <li class="with-megamenu has-menu-child-item position-static">
                        <a href="javascript:voild(0)">Miscellaneous <i class="feather-chevron-down"></i></a>
                        <!-- Start Mega Menu  -->
                        <div class="rbt-megamenu grid-item-1">
                            <div class="wrapper">
                                <div class="row row--15 single-dropdown-menu-presentation">
                                    <div class="col-lg-6 col-xxl-4 single-mega-item">
                                        <ul class="mega-menu-item">
                                            <li><a href="#">History</a></li>
                                            <li><a href="#">Geography</a></li>
                                            <li><a href="#">Polity</a></li>
                                            <li><a href="#">Ecomomics</a></li>
                                            <li><a href="#">Science</a></li>
                                            <li><a href="#">Science & Tech</a></li>
                                            <li><a href="#">Esay Hindi</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Mega Menu  -->
                    </li>

                </ul>
            </nav>

            <div class="mobile-menu-bottom">
                <div class="rbt-btn-wrapper mb--20">
                    <a class="rbt-btn btn-border-gradient radius-round btn-sm hover-transform-none w-100 justify-content-center text-center" href="/logout.php">
                        <span>Logout</span>
                    </a>
                </div>

                <div class="social-share-wrapper">
                    <span class="rbt-short-title d-block">Find With Us</span>
                    <ul class="social-icon social-default justify-content-center justify-content-lg-end mt_sm--10 mt_md--10">
                        <li>
                            <a href="https://www.facebook.com/people/Apex-CSE/100093677916533/">
                                <i class="feather-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.youtube.com/channel/UCPufZaPiM4oKwaOlqmG4YLg">
                                <i class="feather-youtube"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>

    <!-- Start Banner Area -->
    <div class="rbt-banner-area rbt-banner-1 variation-2 height-750">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-8">
                    <div class="content">
                        <div class="inner">
                            <div class="rbt-new-badge rbt-new-badge-one">
                                <span class="rbt-new-badge-icon">🏆</span> The Leader in Online Learning
                            </div>
                            <h1 class="title">The Largest <span class="color-primary">Online Learning</span> Platform
                                for Drive Your Career.</h1>
                            <p class="description">Prepare for success with KK Educenter, the go-to application for aspiring UPSC, State PCS, JEE, NEET, ect. candidates to access comprehensive notes and ace their exams.</strong>.
                            </p>
                            <div class="slider-btn">
                                <a class="rbt-btn btn-gradient hover-icon-reverse" href="#">
                                    <span class="icon-reverse-wrapper">
                                        <span class="btn-text">View Course</span>
                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    </span>
                                </a>
                                <a class="rbt-btn btn-border-gradient hover-icon-reverse" href="#">
                                    <span class="icon-reverse-wrapper">
                                        <span class="btn-text">View Blogs</span>
                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="content">
                        <div class="banner-card pb--60 swiper rbt-dot-bottom-center banner-swiper-active swiper-cards swiper-3d swiper-initialized swiper-horizontal swiper-pointer-events">
                            <div class="swiper-wrapper" id="swiper-wrapper-54101eee6d2cfce88" aria-live="polite" style="cursor: grab; transition-duration: 0ms;">
                                <!-- Start Single Card  -->
                                <div class="swiper-slide" style="width: 320px; z-index: 1; transform: translate3d(calc(0px + -13%), 0px, -200px) rotateZ(-4deg) scale(1); transition-duration: 0ms;" role="group" aria-label="1 / 3">
                                    <div class="rbt-card variation-01 rbt-hover">
                                        <div class="rbt-card-img">
                                            <a href="course-details.html">
                                                <img src="/assets/images/course/course-3.jpg" alt="Card image">
                                            </a>
                                        </div>
                                        <div class="rbt-card-body">
                                            <h4 class="rbt-card-title"><a href="course-details.html">UPSC CSE</a>
                                            </h4>
                                            <p class="rbt-card-text"><small>UPSC conducts recruitment exams for administrative positions in India. It includes a Preliminary exam (screening) and Main exam (subjective) to select candidates for various government services and departments.</small></p>
                                            <div class="rbt-review">
                                                <div class="rating">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star-half"></i>
                                                </div>
                                                <span class="rating-count"> (35 Reviews)</span>
                                            </div>
                                            <div class="rbt-card-bottom">
                                                <div class="rbt-price">
                                                    <span class="current-price">Free</span>
                                                </div>
                                                <a class="rbt-btn-link" href="course-details.html">Learn More<i class="feather-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                <div class="swiper-slide-shadow" style="opacity: 1; transition-duration: 0ms;"></div></div>
                                <!-- End Single Card  -->

                                <!-- Start Single Card  -->
                                <div class="swiper-slide swiper-slide-prev" style="width: 320px; z-index: 2; transform: translate3d(calc(-320px + -7.25%), 0px, -100px) rotateZ(-2deg) scale(1); transition-duration: 0ms;" role="group" aria-label="2 / 3">
                                    <div class="rbt-card variation-01 rbt-hover">
                                        <div class="rbt-card-img">
                                            <a href="course-details.html">
                                                <img src="/assets/images/course/course-1.png" alt="Card image">
                                            </a>
                                        </div>
                                        <div class="rbt-card-body">
                                            <h4 class="rbt-card-title"><a href="course-details.html">BPSC CSE</a>
                                            </h4>
                                            <p class="rbt-card-text"><small>BPSC conducts recruitment exams for administrative positions in Bihar. It includes a Preliminary exam (screening) and Main exam (subjective) to select candidates for government jobs.</small></p>
                                            <div class="rbt-review">
                                                <div class="rating">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                                <span class="rating-count"> (27 Reviews)</span>
                                            </div>
                                            <div class="rbt-card-bottom">
                                                <div class="rbt-price">
                                                    <span class="current-price">Free</span>
                                                </div>
                                                <a class="rbt-btn-link" href="course-details.html">Learn More<i class="feather-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                <div class="swiper-slide-shadow" style="opacity: 1; transition-duration: 0ms;"></div></div>
                                <!-- End Single Card  -->

                                <!-- Start Single Card  -->
                                <div class="swiper-slide swiper-slide-prev" style="width: 320px; z-index: 2; transform: translate3d(calc(-320px + -7.25%), 0px, -100px) rotateZ(-2deg) scale(1); transition-duration: 0ms;" role="group" aria-label="2 / 3">
                                    <div class="rbt-card variation-01 rbt-hover">
                                        <div class="rbt-card-img">
                                            <a href="course-details.html">
                                                <img src="/assets/images/course/course-2.png" alt="Card image">
                                            </a>
                                        </div>
                                        <div class="rbt-card-body">
                                            <h4 class="rbt-card-title"><a href="course-details.html">JEE</a>
                                            </h4>
                                            <p class="rbt-card-text"><small>Joint Entrance Examination (JEE) is an engineering entrance examination conducted for admission to different engineering colleges in India. It is organised by two different examinations such as JEE Main and the JEE Advanced.</small></p>
                                            <div class="rbt-review">
                                                <div class="rating">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                                <span class="rating-count"> (31 Reviews)</span>
                                            </div>
                                            <div class="rbt-card-bottom">
                                                <div class="rbt-price">
                                                    <span class="current-price">Free</span>
                                                </div>
                                                <a class="rbt-btn-link" href="course-details.html">Learn More<i class="feather-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                <div class="swiper-slide-shadow" style="opacity: 1; transition-duration: 0ms;"></div></div>
                                <!-- End Single Card  -->
                            </div>
                            <div class="rbt-swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal"><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 1"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 3" aria-current="true"></span></div>
                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner Area -->



    <!-- Start services Area  -->
    <div class="rbt-categories-area bg-color-white rbt-section-gap">
        <div class="container">
            <div class="row g-5 align-items-start mb--30">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="section-title">
                        <h4 class="title">Popular Categories.</h4>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="read-more-btn text-start text-md-end">
                        <a class="rbt-btn rbt-switch-btn bg-primary-opacity btn-sm" href="archive.html">
                            <span data-text="View All">View All</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row g-5">
                <!-- Start Category Box Layout  -->
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <a class="rbt-cat-box rbt-cat-box-1 list-style" href="course-filter-one-toggle.html">
                        <div class="inner">
                            <div class="thumbnail">
                                <img src="assets/images/category/image/web-design.jpg" alt="Icons Images">
                            </div>
                            <div class="content">
                                <h5 class="title">Web Design</h5>
                                <div class="read-more-btn">
                                    <span class="rbt-btn-link">15 Blogs<i class="feather-arrow-right"></i></span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- End Category Box Layout  -->
                <!-- Start Category Box Layout  -->
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <a class="rbt-cat-box rbt-cat-box-1 list-style" href="course-filter-one-toggle.html">
                        <div class="inner">
                            <div class="thumbnail">
                                <img src="assets/images/category/image/graphic-design.jpg" alt="Icons Images">
                            </div>
                            <div class="content">
                                <h5 class="title">Graphic Design</h5>
                                <div class="read-more-btn">
                                    <span class="rbt-btn-link">25 Blogs<i class="feather-arrow-right"></i></span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- End Category Box Layout  -->

                <!-- Start Category Box Layout  -->
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="rbt-cat-box rbt-cat-box-1 list-style">
                        <div class="inner">
                            <div class="thumbnail">
                                <img src="assets/images/category/image/personal-development.jpg" alt="Icons Images">
                            </div>
                            <div class="content">
                                <h5 class="title">Personal Development</h5>
                                <div class="read-more-btn">
                                    <span class="rbt-btn-link">14 Blogs<i class="feather-arrow-right"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Category Box Layout  -->

                <!-- Start Category Box Layout  -->
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <a class="rbt-cat-box rbt-cat-box-1 list-style" href="course-filter-one-toggle.html">
                        <div class="inner">
                            <div class="thumbnail">
                                <img src="assets/images/category/image/software.jpg" alt="Icons Images">
                            </div>
                            <div class="content">
                                <h5 class="title">IT and Software</h5>
                                <div class="read-more-btn">
                                    <span class="rbt-btn-link">12 Blogs<i class="feather-arrow-right"></i></span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- End Category Box Layout  -->

                <!-- Start Category Box Layout  -->
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <a class="rbt-cat-box rbt-cat-box-1 list-style" href="course-filter-one-toggle.html">
                        <div class="inner">
                            <div class="thumbnail">
                                <img src="assets/images/category/image/sales.jpg" alt="Icons Images">
                            </div>
                            <div class="content">
                                <h5 class="title">Sales Marketing</h5>
                                <div class="read-more-btn">
                                    <span class="rbt-btn-link">30 Blogs<i class="feather-arrow-right"></i></span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- End Category Box Layout  -->

                <!-- Start Category Box Layout  -->
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <a class="rbt-cat-box rbt-cat-box-1 list-style" href="course-filter-one-toggle.html">
                        <div class="inner">
                            <div class="thumbnail">
                                <img src="assets/images/category/image/arts.jpg" alt="Icons Images">
                            </div>
                            <div class="content">
                                <h5 class="title">Art &amp; Humanities</h5>
                                <div class="read-more-btn">
                                    <span class="rbt-btn-link">15 Blogs<i class="feather-arrow-right"></i></span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- End Category Box Layout  -->

                <!-- Start Category Box Layout  -->
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <a class="rbt-cat-box rbt-cat-box-1 list-style" href="course-filter-one-toggle.html">
                        <div class="inner">
                            <div class="thumbnail">
                                <img src="assets/images/category/image/mobile.jpg" alt="Icons Images">
                            </div>
                            <div class="content">
                                <h5 class="title">Mobile Application</h5>
                                <div class="read-more-btn">
                                    <span class="rbt-btn-link">40 Blogs<i class="feather-arrow-right"></i></span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- End Category Box Layout  -->

                <!-- Start Category Box Layout  -->
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <a class="rbt-cat-box rbt-cat-box-1 list-style" href="course-filter-one-toggle.html">
                        <div class="inner">
                            <div class="thumbnail">
                                <img src="assets/images/category/image/finance.jpg" alt="Icons Images">
                            </div>
                            <div class="content">
                                <h5 class="title">Finance &amp; Accounting</h5>
                                <div class="read-more-btn">
                                    <span class="rbt-btn-link">20 Blogs<i class="feather-arrow-right"></i></span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- End Category Box Layout  -->
            </div>

        </div>
    </div>
    <!-- End services Area  -->



    <!-- Start Newslatter area  -->
    <div class="rbt-newsletter-area bg-gradient-6 ptb--50">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-5 col-md-12 col-12">
                    <div class="inner">
                        <div class="section-title text-center text-lg-start">
                            <h4 class="title"><strong>Subscribe</strong> <br> <span class="w-400">Our Newsletter</span></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-12 col-12 text-start text-sm-end">
                    <form action="#" class="newsletter-form-1 me-0">
                        <input type="email" placeholder="Enter Your E-Email" fdprocessedid="nugyul">
                        <button type="submit" class="rbt-btn btn-md btn-gradient hover-icon-reverse" fdprocessedid="4s6avj">
                            <span class="icon-reverse-wrapper">
                        <span class="btn-text">Subscribe</span>
                            <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                            <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                            </span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Newslatter area  -->



    <!-- Start Courses Area -->
    <div class="rbt-course-area bg-color-white rbt-section-gap">
        <div class="container">
            <div class="row mb--55 g-5 align-items-end">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="section-title text-start">
                        <span class="subtitle bg-pink-opacity">Top Popular Course</span>
                        <h2 class="title">Most Popular <span class="color-primary">Courses</span></h2>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="load-more-btn text-start text-md-end">
                        <a class="rbt-btn rbt-switch-btn bg-primary-opacity" href="course.html">
                            <span data-text="View All Course">View All Course</span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Start Card Area -->
            <div class="row g-5">
                <!-- Start Single Course  -->
                <div class="col-lg-4 col-md-6 col-sm-12 col-12 sal-animate" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
                    <div class="rbt-card variation-01 rbt-hover">
                        <div class="rbt-card-img">
                            <a href="course-details.html">
                                <img src="assets/images/course/course-3.jpg" alt="Card image">
                            </a>
                        </div>
                        <div class="rbt-card-body">
                            <div class="rbt-card-top">
                                <div class="rbt-review">
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half"></i>
                                    </div>
                                    <span class="rating-count"> (35 Reviews)</span>
                                </div>
                            </div>
                            <h4 class="rbt-card-title"><a href="course-details.html">UPSC: From A to Z</a></h4>
                            <p class="rbt-card-text"><small>UPSC conducts recruitment exams for administrative positions in India. It includes a Preliminary exam (screening) and Main exam (subjective) to select candidates for various government services and departments.</small></p>
                            <div class="rbt-card-bottom">
                                <div class="rbt-price">
                                    <span class="current-price">Free</span>
                                </div>
                                <a class="rbt-btn-link" href="course-details.html">Learn More<i class="feather-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Course  -->

                <!-- Start Single Course  -->
                <div class="col-lg-4 col-md-6 col-sm-12 col-12 sal-animate" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
                    <div class="rbt-card variation-01 rbt-hover">
                        <div class="rbt-card-img">
                            <a href="course-details.html">
                                <img src="assets/images/course/course-1.png" alt="Card image">
                            </a>
                        </div>
                        <div class="rbt-card-body">
                            <div class="rbt-card-top">
                                <div class="rbt-review">
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <span class="rating-count"> (31 Reviews)</span>
                                </div>
                            </div>
                            <h4 class="rbt-card-title"><a href="course-details.html">BPSC: From A to Z</a></h4>
                            <p class="rbt-card-text"><small>BPSC conducts recruitment exams for administrative positions in Bihar. It includes a Preliminary exam (screening) and Main exam (subjective) to select candidates for government jobs.</small></p>
                            <div class="rbt-card-bottom">
                                <div class="rbt-price">
                                    <span class="current-price">Free</span>
                                </div>
                                <a class="rbt-btn-link" href="course-details.html">Learn More<i class="feather-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Course  -->

                <!-- Start Single Course  -->
                <div class="col-lg-4 col-md-6 col-sm-12 col-12 sal-animate" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
                    <div class="rbt-card variation-01 rbt-hover">
                        <div class="rbt-card-img">
                            <a href="course-details.html">
                                <img src="assets/images/course/course-2.png" alt="Card image">
                            </a>
                        </div>
                        <div class="rbt-card-body">
                            <div class="rbt-card-top">
                                <div class="rbt-review">
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <span class="rating-count"> (31 Reviews)</span>
                                </div>
                            </div>
                            <h4 class="rbt-card-title"><a href="course-details.html">JEE: All Subject</a></h4>
                            <p class="rbt-card-text"><small>Joint Entrance Examination (JEE) is an engineering entrance examination conducted for admission to different engineering colleges in India. It is organised by two different examinations such as JEE Main and the JEE Advanced.</small></p>
                            <div class="rbt-card-bottom">
                                <div class="rbt-price">
                                    <span class="current-price">Free</span>
                                </div>
                                <a class="rbt-btn-link" href="course-details.html">Learn More<i class="feather-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Card  -->
            </div>
            <!-- End Card Area -->
        </div>
    </div>
    <!-- End Courses Area -->

    

    <!-- Start Blog Style -->
    <div class="rbt-rbt-blog-area rbt-section-gapTop rbt-section-gapBottom bg-color-gray-light">
        <div class="container">
            <div class="row mb--55 g-5 align-items-end">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="section-title text-start">
                        <span class="subtitle bg-pink-opacity">Top Blog</span>
                        <h2 class="title">Have a look on <span class="color-primary">our Blogs</span></h2>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="load-more-btn text-start text-md-end">
                        <a class="rbt-btn rbt-switch-btn bg-primary-opacity" href="blog.html">
                            <span data-text="View All News">View All Blogs</span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Start Card Area -->
            <div class="row g-5">
                <!-- Start Single Card  -->
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="rbt-card variation-02 rbt-hover">
                        <div class="rbt-card-img">
                            <a href="course-details.html">
                                <img src="assets/images/blog/blog-grid-01.jpg" alt="Card image"> </a>
                        </div>
                        <div class="rbt-card-body">
                            <h5 class="rbt-card-title"><a href="course-details.html">Is lms The Most Trending
                                    Thing Now?</a></h5>
                            <p class="rbt-card-text">It is a long established fact that a reader.</p>
                            <div class="rbt-card-bottom">
                                <a class="transparent-button" href="course-details.html">Learn
                                    More<i><svg width="17" height="12" xmlns="http://www.w3.org/2000/svg"><g stroke="#27374D" fill="none" fill-rule="evenodd"><path d="M10.614 0l5.629 5.629-5.63 5.629"></path><path stroke-linecap="square" d="M.663 5.572h14.594"></path></g></svg></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Card  -->

                <!-- Start Single Card  -->
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="rbt-card variation-02 rbt-hover">
                        <div class="rbt-card-img">
                            <a href="course-details.html">
                                <img src="assets/images/blog/blog-grid-02.jpg" alt="Card image"> </a>
                        </div>
                        <div class="rbt-card-body">
                            <h5 class="rbt-card-title"><a href="course-details.html">Learn How More Money With
                                    lms.</a></h5>
                            <p class="rbt-card-text">It is a long established fact that a reader.</p>
                            <div class="rbt-card-bottom">
                                <a class="transparent-button" href="course-details.html">Learn
                                    More<i><svg width="17" height="12" xmlns="http://www.w3.org/2000/svg"><g stroke="#27374D" fill="none" fill-rule="evenodd"><path d="M10.614 0l5.629 5.629-5.63 5.629"></path><path stroke-linecap="square" d="M.663 5.572h14.594"></path></g></svg></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Card  -->

                <!-- Start Single Card  -->
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="rbt-card variation-02 rbt-hover">
                        <div class="rbt-card-img">
                            <a href="course-details.html">
                                <img src="assets/images/blog/blog-grid-03.jpg" alt="Card image"> </a>
                        </div>
                        <div class="rbt-card-body">
                            <h5 class="rbt-card-title"><a href="course-details.html">Understand The Background Of
                                    lms.</a></h5>
                            <p class="rbt-card-text">It is a long established fact that a reader.</p>
                            <div class="rbt-card-bottom">
                                <a class="transparent-button" href="course-details.html">Learn
                                    More<i><svg width="17" height="12" xmlns="http://www.w3.org/2000/svg"><g stroke="#27374D" fill="none" fill-rule="evenodd"><path d="M10.614 0l5.629 5.629-5.63 5.629"></path><path stroke-linecap="square" d="M.663 5.572h14.594"></path></g></svg></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Card  -->
            </div>
            <!-- End Card Area -->
        </div>
    </div>
    <!-- End Blog Style -->


    <!-- Start CallTo Action Area  -->
    <div class="rbt-call-to-action-area rbt-section-gap bg-gradient-6 rbt-call-to-action-5">
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="rbt-cta-5">
                            <div class="content">
                                <h1 class="title">Download our mobile app, start learning today</h1>
                                <p>Includes all Course && Features</p>
                                <div class="rbt-button-group justify-content-start">
                                    <a class="rbt-btn btn-gradient" href="#">Android Version &nbsp;&nbsp;&nbsp;
                                        <svg xmlns="http://www.w3.org/2000/svg" height="1.25em" viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#ffffff}</style><path d="M420.55,301.93a24,24,0,1,1,24-24,24,24,0,0,1-24,24m-265.1,0a24,24,0,1,1,24-24,24,24,0,0,1-24,24m273.7-144.48,47.94-83a10,10,0,1,0-17.27-10h0l-48.54,84.07a301.25,301.25,0,0,0-246.56,0L116.18,64.45a10,10,0,1,0-17.27,10h0l47.94,83C64.53,202.22,8.24,285.55,0,384H576c-8.24-98.45-64.54-181.78-146.85-226.55"/></svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape-images">
            <img src="/assets/images/icons/three-shape.png" alt="Shape Images">
        </div>
    </div>
    <!-- End CallTo Action Area  -->



    <!-- Start Footer aera -->
    <footer class="rbt-footer footer-style-1 bg-color-white overflow-hidden">
        <div class="footer-top">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="footer-widget">
                            <div class="logo">
                                <a href="index.html">
                                    <img src="/assets/images/logo/logo.png" alt="Edu-cause">
                                </a>
                            </div>

                            <p class="description mt--20">KK Educenter: Empowering UPSC, State PCS, JEE, NEET, ect. aspirants to achieve their dreams through comprehensive Study Materials.</p>

                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6 col-sm-6 col-12">
                        <div class="footer-widget">
                            <h5 class="ft-title">Study Material</h5>
                            <ul class="ft-link">
                                <li>
                                    <a href="#">UPSC CSE</a>
                                </li>
                                <li>
                                    <a href="#">BPSC CSE</a>
                                </li>
                                <li>
                                    <a href="#">Bihar Teacher</a>
                                </li>
                                <li>
                                    <a href="#">UGC NET</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6 col-sm-6 col-12">
                        <div class="footer-widget">
                            <h5 class="ft-title">Useful Links 1</h5>
                            <ul class="ft-link">
                                <li>
                                    <a href="#">Current Affairs</a>
                                </li>
                                <li>
                                    <a href="/blog/">Blog</a>
                                </li>
                                <li>
                                    <a href="#">NCERT Book English</a>
                                </li>
                                <li>
                                    <a href="#">NCERT Book Hindi</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6 col-sm-6 col-12">
                        <div class="footer-widget">
                            <h5 class="ft-title">Useful Links 2</h5>
                            <ul class="ft-link">
                                <li>
                                    <a href="/contact/">Contact Us</a>
                                </li>
                                <li>
                                    <a href="/instructor/">Instructor</a>
                                </li>
                                <li>
                                    <a href="/course/">Course</a>
                                </li>
                                <li>
                                    <a href="#">Miscellaneous</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="rbt-separator-mid">
            <div class="container">
                <hr class="rbt-separator m-0">
            </div>
        </div>
        <!-- Start Copyright Area  -->
        <div class="copyright-area copyright-style-1 ptb--20">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-12">
                        <p class="rbt-link-hover text-center text-lg-start">Copyright © 2023 <i>KK Educenter</i>.</a> All Rights Reserved</p>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-12">
                        <ul class="social-icon social-default justify-content-center justify-content-lg-end mt_sm--10 mt_md--10">
                            <li>
                                <a href="https://www.facebook.com/people/Apex-CSE/100093677916533/">
                                    <i class="feather-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.youtube.com/channel/UCPufZaPiM4oKwaOlqmG4YLg">
                                    <i class="feather-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.youtube.com/channel/UCPufZaPiM4oKwaOlqmG4YLg">
                                    <i class="feather-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.youtube.com/channel/UCPufZaPiM4oKwaOlqmG4YLg">
                                    <i class="fab fa-telegram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.youtube.com/channel/UCPufZaPiM4oKwaOlqmG4YLg">
                                    <i class="feather-youtube"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-12">
                        <ul class="copyright-link rbt-link-hover justify-content-center justify-content-lg-end mt_sm--10 mt_md--10">
                            <li><a href="/terms-conditions/">Terms & Conditions</a></li>
                            <li><a href="/privacy-policy/">Privacy policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Copyright Area  -->
    </footer>
    <!-- End Footer aera -->
    <div class="rbt-progress-parent">
        <svg class="rbt-back-circle svg-inner" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>

    <!-- JS
============================================ -->
    <!-- Modernizer JS -->
    <script src="/assets/js/vendor/modernizr.min.js"></script>
    <!-- jQuery JS -->
    <script src="/assets/js/vendor/jquery.js"></script>
    <!-- Bootstrap JS -->
    <script src="/assets/js/vendor/bootstrap.min.js"></script>
    <!-- sal.js -->
    <script src="/assets/js/vendor/sal.js"></script>
    <script src="/assets/js/vendor/swiper.js"></script>
    <script src="/assets/js/vendor/magnify.min.js"></script>
    <script src="/assets/js/vendor/jquery-appear.js"></script>
    <script src="/assets/js/vendor/odometer.js"></script>
    <script src="/assets/js/vendor/backtotop.js"></script>
    <script src="/assets/js/vendor/isotop.js"></script>
    <script src="/assets/js/vendor/imageloaded.js"></script>

    <script src="/assets/js/vendor/wow.js"></script>
    <script src="/assets/js/vendor/waypoint.min.js"></script>
    <script src="/assets/js/vendor/easypie.js"></script>
    <script src="/assets/js/vendor/text-type.js"></script>
    <script src="/assets/js/vendor/jquery-one-page-nav.js"></script>
    <script src="/assets/js/vendor/bootstrap-select.min.js"></script>
    <script src="/assets/js/vendor/jquery-ui.js"></script>
    <script src="/assets/js/vendor/magnify-popup.min.js"></script>
    <script src="/assets/js/vendor/paralax-scroll.js"></script>
    <script src="/assets/js/vendor/paralax.min.js"></script>
    <script src="/assets/js/vendor/countdown.js"></script>
    <script src="/assets/js/vendor/plyr.js"></script>
    <!-- Main JS -->
    <script src="/assets/js/main.js"></script>
</body>

</html>