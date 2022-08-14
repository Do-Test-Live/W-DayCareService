<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <!--including all the header css and js-->
    <?php
    include ('includes/head.php');
    ?>
</head>
<body class="tm-container-1340px has-side-panel side-panel-right">
<!-- preloader -->
<?php
include ("includes/preloader.php");
?>


<!--right side panel from the menu part-->
<?php
include ("includes/rightSidePanel.php");
?>


<div id="wrapper" class="clearfix">
    <!-- including the navbar -->
    <?php
    include ("includes/navbar.php")
    ?>

    <!-- Start main-content -->
    <div class="main-content-area">

        <!-- Section: home Start -->
        <section id="home" class="bg-pos-center-center home-wave-object" data-tm-bg-img="images/bg/bg1.jpg">
            <div class="container" data-tm-padding-top="180px" data-tm-padding-bottom="180px">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="home-banner">
                            <div class="banner-inner">
                                <span class="text-white">Special Kindergarten</span>
                                <h2 class="text-white">Best Children <br> Kindergarten</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col"></div>
                </div>
            </div>
            <div class="tm-floating-objects">
                <span class="floating-object-2 tm-animation-floating" data-tm-bg-img="images/objects/home-object1.png"
                      data-tm-opacity="0.8" data-tm-width="115" data-tm-height="115" data-tm-top="8%"
                      data-tm-left="10%"></span>
                <span class="floating-object-2 tm-animation-floating" data-tm-bg-img="images/objects/home-object2.png"
                      data-tm-opacity="0.8" data-tm-width="140" data-tm-height="150" data-tm-top="15%"
                      data-tm-right="42%"></span>
                <span class="floating-object-2 tm-animation-floating" data-tm-bg-img="images/objects/home-object3.png"
                      data-tm-opacity="0.8" data-tm-width="150" data-tm-height="165" data-tm-top="55%"
                      data-tm-right="45%"></span>
            </div>
        </section>
        <!-- Section: home End -->

        <!-- Section: Features -->
        <section class="features-section">
            <div class="container pt-50 pb-lg-60">
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-6 col-lg-4 col-xl-4">
                            <div class="feature-current-item text-center mb-lg-30">
                                <div class="feature-icon object-bg1">
                                    <img src="images/objects/feature-bg-object01.png" alt="images">
                                </div>
                                <h4 class="feature-title">Drawing Class</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua Totam rem.</p>
                                <a href="page-course-details.html" class="feature-link-btn">+</a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-4">
                            <div class="feature-current-item text-center mb-lg-30 active">
                                <div class="feature-icon object-bg2">
                                    <img src="images/objects/feature-bg-object02.png" alt="images">
                                </div>
                                <h4 class="feature-title">Music Class</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua Totam rem.</p>
                                <a href="page-course-details.html" class="feature-link-btn">+</a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-4">
                            <div class="feature-current-item text-center mb-lg-30">
                                <div class="feature-icon object-bg2">
                                    <img src="images/objects/feature-bg-object03.png" alt="images">
                                </div>
                                <h4 class="feature-title">Knowledge Class</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua Totam rem.</p>
                                <a href="page-course-details.html" class="feature-link-btn">+</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tm-floating-objects">
                <span class="floating-object-2 tm-animation-flicker z-index--1"
                      data-tm-bg-img="images/objects/object-apple.png" data-tm-opacity="0.8" data-tm-width="230"
                      data-tm-height="210" data-tm-top="0" data-tm-right="0"></span>
                <span class="floating-object-2 tm-animation-scaling z-index--1"
                      data-tm-bg-img="images/objects/object-star1.png" data-tm-opacity="0.8" data-tm-width="210"
                      data-tm-height="210" data-tm-top="16%" data-tm-left="6%"></span>
                <span class="floating-object-2 tm-animation-scaling z-index--1"
                      data-tm-bg-img="images/objects/object-star2.png" data-tm-opacity="0.8" data-tm-width="210"
                      data-tm-height="210" data-tm-bottom="0" data-tm-right="0"></span>
            </div>
        </section>

        <!-- Section: About -->
        <section>
            <div class="container pt-0">
                <div class="row align-items-center">
                    <div class="col-md-12 col-lg-7 col-xl-7">
                        <div class="image-box tilt-hover-effect mb-50">
                            <img src="images/about/about1.png" alt="">
                            <img class="floating-img1" src="images/about/about-floating-img1.png" alt="">
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-5 col-xl-5">
                        <h2 class="text-theme-colored1">Welcome to <span class="text-theme-colored2">Baby Care</span>
                            and Kindergarten</h2>
                        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit tempor incididunt ut
                            labore et dolore magna.</p>
                        <div class="row mb-30">
                            <div class="col-lg-5 mb-sm-30">
                                <div class="box-hover-effect tm-sc-video-popup tm-sc-video-popup-button-over-image">
                                    <div class="effect-wrapper">
                                        <div class="thumb">
                                            <img class="img-fullwidth" src="images/gallery/1.jpg" alt="images">
                                        </div>
                                        <div class="animated-css-play-button"><span class="play-icon"><i
                                                class="fa fa-play"></i></span></div>
                                        <a class="hover-link" data-lightbox-gallery="youtube-video"
                                           href="https://www.youtube.com/watch?v=xcJtL7QggTI" title=""></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="tm-sc-unordered-list list-style2 mt-md-30">
                                    <ul>
                                        <li class="theme-colored-before">We Use Quality Services</li>
                                        <li class="theme-colored-before">We’re Professional Teacher</li>
                                        <li class="theme-colored-before">The Most Trusted School</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Totam rem aperiam, eaque ipsa quae ab illo.</p>
                        <a href="page-about.html" class="about-btn btn btn-lg btn-dark btn-theme-colored2">Read More</a>
                    </div>
                </div>
            </div>
            <div class="tm-floating-objects">
                <span class="floating-object-2 tm-animation-spin z-index--1"
                      data-tm-bg-img="images/objects/object-star3.png" data-tm-opacity="0.8" data-tm-width="210"
                      data-tm-height="210" data-tm-top="16%" data-tm-left="6%"></span>
                <span class="floating-object-2 tm-animation-floating z-index--1"
                      data-tm-bg-img="images/objects/object-rocket1.png" data-tm-opacity="0.8" data-tm-width="210"
                      data-tm-height="210" data-tm-top="8%" data-tm-right="3%"></span>
            </div>
        </section>
        <!-- End About -->

        <!-- Start Service -->
        <section class="bg-silver-light z-index-1">
            <div class="container">
                <div class="section-title">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <div class="tm-sc-section-title section-title text-center">
                                <div class="title-wrapper">
                                    <h6>Programm</h6>
                                    <h2 class="title text-theme-colored1">Care Programms</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elitrem ipsum dolor sit amet,
                                        consectetur adipisicing elit, sed do</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-6 col-xl-4">
                            <div class="tm-sc-services services-style-current-theme text-center mb-lg-50">
                                <div class="tm-service">
                                    <div class="thumb">
                                        <img class="rounded-circle" src="images/service/1.jpg" alt="Image">
                                        <div class="service-icon">
                                            <img src="images/icon/1.png" alt="">
                                        </div>
                                    </div>
                                    <div class="details clearfix">
                                        <h4 class="title"><a href="page-course-details.html">Nursery</a></h4>
                                        <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                            eiusmod tempor incididunt ut labore et dolore magna aliqua Totam rem.</p>
                                        <ul class="service-info-list">
                                            <li><span class="font-weight-800 text-theme-colored3">Age:</span> 2-4 Years
                                            </li>
                                            <li><span class="font-weight-800 text-theme-colored3">Time:</span> 9.00 -
                                                11.00
                                            </li>
                                            <li><span class="font-weight-800 text-theme-colored3">Price:</span> $30</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4">
                            <div class="tm-sc-services services-style-current-theme text-center mb-sm-50">
                                <div class="tm-service">
                                    <div class="thumb">
                                        <img class="rounded-circle" src="images/service/2.jpg" alt="Image">
                                        <div class="service-icon bg-theme-colored3">
                                            <img src="images/icon/2.png" alt="">
                                        </div>
                                    </div>
                                    <div class="details clearfix">
                                        <h4 class="title"><a href="page-course-details.html">Paper Plates Art</a></h4>
                                        <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                            eiusmod tempor incididunt ut labore et dolore magna aliqua Totam rem.</p>
                                        <ul class="service-info-list">
                                            <li><span class="font-weight-800 text-theme-colored3">Age:</span> 2-4 Years
                                            </li>
                                            <li><span class="font-weight-800 text-theme-colored3">Time:</span> 9.00 -
                                                11.00
                                            </li>
                                            <li><span class="font-weight-800 text-theme-colored3">Price:</span> $30</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4">
                            <div class="tm-sc-services services-style-current-theme text-center">
                                <div class="tm-service">
                                    <div class="thumb">
                                        <img class="rounded-circle" src="images/service/3.jpg" alt="Image">
                                        <div class="service-icon bg-theme-colored4">
                                            <img src="images/icon/1.png" alt="">
                                        </div>
                                    </div>
                                    <div class="details clearfix">
                                        <h4 class="title"><a href="page-course-details.html">Drawing</a></h4>
                                        <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                            eiusmod tempor incididunt ut labore et dolore magna aliqua Totam rem.</p>
                                        <ul class="service-info-list">
                                            <li><span class="font-weight-800 text-theme-colored3">Age:</span> 2-4 Years
                                            </li>
                                            <li><span class="font-weight-800 text-theme-colored3">Time:</span> 9.00 -
                                                11.00
                                            </li>
                                            <li><span class="font-weight-800 text-theme-colored3">Price:</span> $30</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tm-floating-objects">
                <span class="floating-object-2 tm-animation-floating z-index--1"
                      data-tm-bg-img="images/objects/object-scissors1.png" data-tm-opacity="0.8" data-tm-width="210"
                      data-tm-height="210" data-tm-bottom="12%" data-tm-left="2%"></span>
                <span class="floating-object-2 tm-animation-floating z-index--1"
                      data-tm-bg-img="images/objects/object-jar1.png" data-tm-opacity="0.8" data-tm-width="210"
                      data-tm-height="210" data-tm-top="8%" data-tm-right="3%"></span>
            </div>
        </section>
        <!-- End Service -->

        <!-- Start Why Choose Us -->
        <section>
            <div class="container-fluid p-0">
                <div class="tm-sc-custom-columns-holder tm-cc-two-columns tm-cc-responsive-mode-1280">
                    <div class="tm-sc-custom-columns-holder-item bg-theme-colored2"
                         data-item-class="tm-custom-columns-12" data-1200-up="100px 10% 60px 28%"
                         data-1199-down="100px 10% 60px 10%" data-991-down="100px 10% 60px 10%"
                         data-767-down="100px 10% 60px 10%" data-575-down="100px 10% 60px 10%"
                         data-tm-bg-img="images/bg/why-choose-bg1.png">
                        <div class="item-inner">
                            <div class="item-content tm-custom-columns-12">
                                <!-- Contact Form -->
                                <div class="why-choose-us-block">
                                    <h6 class="mt-0 font-italic text-white">Like Us</h6>
                                    <h2 class="text-theme-colored1 mb-40">Why Choose Us</h2>
                                    <div class="why-choose-us-item">
                                        <div class="why-choose-us-img">
                                            <img src="images/objects/why-choose-icon1.png" alt="img">
                                        </div>
                                        <div class="why-choose-us-content">
                                            <h4 class="text-theme-colored4">Knowledge Classes</h4>
                                            <p class="text-white-f1">Lorem ipsum dolor sit amet nsectetur cing ndisse
                                                suscipit sagitis leo sit ipsum dolor sit amet nsectetur.</p>
                                        </div>
                                    </div>
                                    <div class="why-choose-us-item">
                                        <div class="why-choose-us-img">
                                            <img src="images/objects/why-choose-icon4.png" alt="img">
                                        </div>
                                        <div class="why-choose-us-content">
                                            <h4 class="text-theme-colored3">Full day session</h4>
                                            <p class="text-white-f1">Lorem ipsum dolor sit amet nsectetur cing ndisse
                                                suscipit sagitis leo sit ipsum dolor sit amet nsectetur.</p>
                                        </div>
                                    </div>
                                    <div class="why-choose-us-item">
                                        <div class="why-choose-us-img">
                                            <img src="images/objects/why-choose-icon3.png" alt="img">
                                        </div>
                                        <div class="why-choose-us-content">
                                            <h4 class="text-theme-colored1">Last minute request</h4>
                                            <p class="text-white-f1">Lorem ipsum dolor sit amet nsectetur cing ndisse
                                                suscipit sagitis leo sit ipsum dolor sit amet nsectetur.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tm-sc-custom-columns-holder-item bg-img-left border-bottom-1px"
                         data-item-class="tm-custom-columns-11" data-1200-up="8% 24%  5% 8%"
                         data-1199-down="0 10% 0 10%" data-991-down="0 10% 0 10%" data-767-down="0 10% 0 10%"
                         data-575-down="0 10% 0 10%">
                        <div class="item-inner">
                            <div class="item-content tm-custom-columns-11">
                                <img class="mt-lg-100 mb-30 mb-sm-10" src="images/about/about6.jpg" alt="">
                                <h5 class="text-theme-colored2">About Kid Education</h5>
                                <h2 class="text-theme-colored1">A Great Place for Your Child to Grow At</h2>
                                <p>Our priority is to make sure that your children are safe while playing or studying at
                                    the center, and therefore, we implement innovative methology for our educational
                                    activities and encourage our staff to develop their skills. We implement innovative
                                    methology for our educational activities and encourage our staff to develop their
                                    skills.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Why Choose Us -->

        <!-- Start Gallery -->
        <section>
            <div class="container">
                <div class="section-title">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <div class="tm-sc-section-title section-title text-center">
                                <div class="title-wrapper">
                                    <h6>Checkout</h6>
                                    <h2 class="title text-theme-colored1">Centre Photo Gallery</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elitrem ipsum dolor sit amet,
                                        consectetur adipisicing elit, sed do</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="tm-sc-gallery tm-sc-gallery-grid gallery-style1-basic">
                                <!-- Isotope Gallery Grid -->
                                <div id="gallery-holder-618422"
                                     class="isotope-layout masonry grid-3 gutter-15 clearfix lightgallery-lightbox">
                                    <div class="isotope-layout-inner">
                                        <div class="isotope-item isotope-item-sizer"></div>

                                        <!-- Isotope Item Start -->
                                        <div class="isotope-item cat1">
                                            <div class="isotope-item-inner">
                                                <div class="tm-gallery">
                                                    <div class="tm-gallery-inner">
                                                        <div class="thumb">
                                                            <a href="#">
                                                                <img width="672" height="448"
                                                                     src="images/gallery/masonry-tiles-4col.jpg"
                                                                     class="" alt=""/>
                                                            </a>
                                                        </div>
                                                        <div class="tm-gallery-content-wrapper">
                                                            <div class="tm-gallery-content">
                                                                <div class="tm-gallery-content-inner">
                                                                    <div class="icons-holder-inner">
                                                                        <div class="styled-icons icon-lg icon-dark icon-circled icon-theme-colored1">
                                                                            <a class="lightgallery-trigger styled-icons-item"
                                                                               data-exthumbimage="images/gallery/1.jpg"
                                                                               data-src="images/gallery/1.jpg"
                                                                               title="Gallery 1"
                                                                               href="images/gallery/1.jpg"><i
                                                                                    class="fa fa-plus"></i></a>
                                                                            <a class="styled-icons-item"
                                                                               title="Gallery 1" href="#"><i
                                                                                    class="fa fa-link"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Isotope Item End -->

                                        <!-- Isotope Item Start -->
                                        <div class="isotope-item cat1 cat3">
                                            <div class="isotope-item-inner">
                                                <div class="tm-gallery">
                                                    <div class="tm-gallery-inner">
                                                        <div class="thumb">
                                                            <a href="#">
                                                                <img width="672" height="448" src="images/gallery/3.jpg"
                                                                     class="" alt=""/>
                                                            </a>
                                                        </div>
                                                        <div class="tm-gallery-content-wrapper">
                                                            <div class="tm-gallery-content">
                                                                <div class="tm-gallery-content-inner">
                                                                    <div class="icons-holder-inner">
                                                                        <div class="styled-icons icon-lg icon-dark icon-circled icon-theme-colored1">
                                                                            <a class="lightgallery-trigger styled-icons-item"
                                                                               data-exthumbimage="images/gallery/3.jpg"
                                                                               data-src="images/gallery/3.jpg"
                                                                               title="Gallery 3"
                                                                               href="images/gallery/3.jpg"><i
                                                                                    class="fa fa-plus"></i></a>
                                                                            <a class="styled-icons-item"
                                                                               title="Gallery 3" href="#"><i
                                                                                    class="fa fa-link"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Isotope Item End -->

                                        <!-- Isotope Item Start -->
                                        <div class="isotope-item cat2 cat3">
                                            <div class="isotope-item-inner">
                                                <div class="tm-gallery">
                                                    <div class="tm-gallery-inner">
                                                        <div class="thumb">
                                                            <a href="#">
                                                                <img width="672" height="448"
                                                                     src="images/gallery/masonry-tiles-3col-height.jpg"
                                                                     class="" alt=""/>
                                                            </a>
                                                        </div>
                                                        <div class="tm-gallery-content-wrapper">
                                                            <div class="tm-gallery-content">
                                                                <div class="tm-gallery-content-inner">
                                                                    <div class="icons-holder-inner">
                                                                        <div class="styled-icons icon-lg icon-dark icon-circled icon-theme-colored1">
                                                                            <a class="lightgallery-trigger styled-icons-item"
                                                                               data-exthumbimage="images/gallery/2.jpg"
                                                                               data-src="images/gallery/2.jpg"
                                                                               title="Gallery 2"
                                                                               href="images/gallery/2.jpg"><i
                                                                                    class="fa fa-plus"></i></a>
                                                                            <a class="styled-icons-item"
                                                                               title="Gallery 2" href="#"><i
                                                                                    class="fa fa-link"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Isotope Item End -->

                                        <!-- Isotope Item Start -->
                                        <div class="isotope-item cat2 cat3">
                                            <div class="isotope-item-inner">
                                                <div class="tm-gallery">
                                                    <div class="tm-gallery-inner">
                                                        <div class="thumb">
                                                            <a href="#">
                                                                <img width="672" height="448"
                                                                     src="images/gallery/masonry-3col.jpg" class=""
                                                                     alt=""/>
                                                            </a>
                                                        </div>
                                                        <div class="tm-gallery-content-wrapper">
                                                            <div class="tm-gallery-content">
                                                                <div class="tm-gallery-content-inner">
                                                                    <div class="icons-holder-inner">
                                                                        <div class="styled-icons icon-lg icon-dark icon-circled icon-theme-colored1">
                                                                            <a class="lightgallery-trigger styled-icons-item"
                                                                               data-exthumbimage="images/gallery/2.jpg"
                                                                               data-src="images/gallery/2.jpg"
                                                                               title="Gallery 2"
                                                                               href="images/gallery/2.jpg"><i
                                                                                    class="fa fa-plus"></i></a>
                                                                            <a class="styled-icons-item"
                                                                               title="Gallery 2" href="#"><i
                                                                                    class="fa fa-link"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Isotope Item End -->

                                        <!-- Isotope Item Start -->
                                        <div class="isotope-item cat2 cat3">
                                            <div class="isotope-item-inner">
                                                <div class="tm-gallery">
                                                    <div class="tm-gallery-inner">
                                                        <div class="thumb">
                                                            <a href="#">
                                                                <img width="672" height="448" src="images/gallery/2.jpg"
                                                                     class="" alt=""/>
                                                            </a>
                                                        </div>
                                                        <div class="tm-gallery-content-wrapper">
                                                            <div class="tm-gallery-content">
                                                                <div class="tm-gallery-content-inner">
                                                                    <div class="icons-holder-inner">
                                                                        <div class="styled-icons icon-lg icon-dark icon-circled icon-theme-colored1">
                                                                            <a class="lightgallery-trigger styled-icons-item"
                                                                               data-exthumbimage="images/gallery/2.jpg"
                                                                               data-src="images/gallery/2.jpg"
                                                                               title="Gallery 2"
                                                                               href="images/gallery/2.jpg"><i
                                                                                    class="fa fa-plus"></i></a>
                                                                            <a class="styled-icons-item"
                                                                               title="Gallery 2" href="#"><i
                                                                                    class="fa fa-link"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Isotope Item End -->

                                        <!-- Isotope Item Start -->
                                        <div class="isotope-item cat1 cat2">
                                            <div class="isotope-item-inner">
                                                <div class="tm-gallery">
                                                    <div class="tm-gallery-inner">
                                                        <div class="thumb">
                                                            <a href="#">
                                                                <img width="672" height="448" src="images/gallery/1.jpg"
                                                                     class="" alt=""/>
                                                            </a>
                                                        </div>
                                                        <div class="tm-gallery-content-wrapper">
                                                            <div class="tm-gallery-content">
                                                                <div class="tm-gallery-content-inner">
                                                                    <div class="icons-holder-inner">
                                                                        <div class="styled-icons icon-lg icon-dark icon-circled icon-theme-colored1">
                                                                            <a class="lightgallery-trigger styled-icons-item"
                                                                               data-exthumbimage="images/gallery/1.jpg"
                                                                               data-src="images/gallery/1.jpg"
                                                                               title="Gallery 1"
                                                                               href="images/gallery/1.jpg"><i
                                                                                    class="fa fa-plus"></i></a>
                                                                            <a class="styled-icons-item"
                                                                               title="Gallery 1" href="#"><i
                                                                                    class="fa fa-link"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Isotope Item End -->

                                    </div>
                                </div>
                                <!-- End Isotope Gallery Grid -->
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="tm-floating-objects">
                <span class="floating-object-2 tm-animation-flicker z-index--1"
                      data-tm-bg-img="images/objects/object-long-arrow1.png" data-tm-opacity="0.8" data-tm-width="210"
                      data-tm-height="210" data-tm-top="6%" data-tm-left="0"></span>
                <span class="floating-object-2 tm-animation-flicker z-index--1"
                      data-tm-bg-img="images/objects/object-clip1.png" data-tm-opacity="0.8" data-tm-width="210"
                      data-tm-height="210" data-tm-bottom="6%" data-tm-left="0"></span>
                <span class="floating-object-2 tm-animation-scaling z-index--1"
                      data-tm-bg-img="images/objects/object-plane1.png" data-tm-opacity="0.8" data-tm-width="230"
                      data-tm-height="210" data-tm-top="0" data-tm-right="3%"></span>
            </div>
        </section>
        <!-- End Gallery -->

        <!-- Start Video Popup -->
        <section class="bg-theme-colored2" data-tm-bg-img="images/bg/object-bg1.png">
            <div class="container" data-tm-padding-bottom="200px">
                <div class="section-content">
                    <div class="row">
                        <div class="col"></div>
                        <div class="col-xl-8">
                            <div class="video-block text-center mb-0">
                                <div class="cp-video-divider section-typo-light">
                                    <div class="tm-sc-video-popup video-popup-current-style1 box-hover-effect play-video-button">
                                        <div class="effect-wrapper">
                                            <div class="icon">
                                                <i class="fa fa-play"></i>
                                            </div>
                                            <div class="video-button-text"></div>
                                            <a class="hover-link" data-lightbox-gallery="youtube-video"
                                               href="https://www.youtube.com/mcvqOUtcAJg" title=""></a>
                                        </div>
                                    </div>
                                </div>
                                <h2 class="text-white popup-video-title" data-tm-font-size="3.8rem">Kipso one & only
                                    mission is to extend your knowledge base</h2>
                            </div>
                        </div>
                        <div class="col"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Video Popup -->

        <!-- Start Testimonials -->
        <section class="z-index-1" data-tm-margin-top="-100px">
            <div class="container pt-0 pb-lg--0">
                <div class="section-content">
                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
                            <div class="testimonial-current-style1 testimonial-theme-colored1 mb-lg-60">
                                <div class="testimonial-upper">
                                    <div class="quote-icon">
                                        <i class="fas fa-quote-left"></i>
                                    </div>
                                    <div class="author-text"> I feel very happy and be proud to connect with this
                                        industry. I presume this is a very productive and professional very good luck &
                                        success for this industry
                                    </div>
                                </div>
                                <div class="d-flex align-items-center author-info clearfix ml-30">
                                    <div class="author-thumb mr-15">
                                        <img class="rounded-circle" src="images/testimonials/s1.jpg" alt="">
                                    </div>
                                    <div class="author-detials">
                                        <h5 class="name m-0">Tom Johan,</h5>
                                        <h6 class="job-position font-weight-400 m-0">Developer</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
                            <div class="testimonial-current-style1 mb-lg-60">
                                <div class="testimonial-upper">
                                    <div class="quote-icon">
                                        <i class="fas fa-quote-left"></i>
                                    </div>
                                    <div class="author-text"> I feel very happy and be proud to connect with this
                                        industry. I presume this is a very productive and professional very good luck &
                                        success for this industry
                                    </div>
                                </div>
                                <div class="d-flex align-items-center author-info clearfix ml-30">
                                    <div class="author-thumb mr-15">
                                        <img class="rounded-circle" src="images/testimonials/s2.jpg" alt="">
                                    </div>
                                    <div class="author-detials">
                                        <h5 class="name m-0">Alina Grace,</h5>
                                        <h6 class="job-position font-weight-400 m-0">Developer</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
                            <div class="testimonial-current-style1 testimonial-theme-colored3 mb-lg-60">
                                <div class="testimonial-upper">
                                    <div class="quote-icon">
                                        <i class="fas fa-quote-left"></i>
                                    </div>
                                    <div class="author-text"> I feel very happy and be proud to connect with this
                                        industry. I presume this is a very productive and professional very good luck &
                                        success for this industry
                                    </div>
                                </div>
                                <div class="d-flex align-items-center author-info clearfix ml-30">
                                    <div class="author-thumb mr-15">
                                        <img class="rounded-circle" src="images/testimonials/s3.jpg" alt="">
                                    </div>
                                    <div class="author-detials">
                                        <h5 class="name m-0">Jim Drow,</h5>
                                        <h6 class="job-position font-weight-400 m-0">Developer</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Testimonials -->
        <hr>

        <!-- Start Events -->
        <section>
            <div class="container">
                <div class="section-title">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <div class="tm-sc-section-title section-title text-center">
                                <div class="title-wrapper">
                                    <h6>Events</h6>
                                    <h2 class="title text-theme-colored1">Upcoming Event</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elitrem ipsum dolor sit amet,
                                        consectetur adipisicing elit, sed do</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section-content">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-12">
                            <div class="upcoming-events-current-style1">
                                <div class="event-item bg-theme-colored1 p-sm-30">
                                    <ul class="event-info-list text-white">
                                        <li><span class="font-weight-800">Age:</span> 2-4 Years</li>
                                        <li><span class="font-weight-600">Time:</span> 9.00 - 11.00</li>
                                        <li><span class="font-weight-600">Price:</span> $30</li>
                                    </ul>
                                    <h4 class="event-title text-white"><a href="page-event-details.html">Magic Princess
                                        Birthday Party</a></h4>
                                    <a href="page-event-details.html">
                                        <div class="event-arrows">
                                            <img class="image1" src="images/objects/event-arrow1.png" alt="">
                                        </div>
                                    </a>
                                </div>
                                <div class="event-item bg-theme-colored3 p-sm-30">
                                    <ul class="event-info-list text-white">
                                        <li><span class="font-weight-800">Age:</span> 4-6 Years</li>
                                        <li><span class="font-weight-600">Time:</span> 11.00 - 12.00</li>
                                        <li><span class="font-weight-600">Price:</span> $50</li>
                                    </ul>
                                    <h4 class="event-title text-white"><a href="page-event-details.html">Kids Grooming
                                        with New Lesson</a></h4>
                                    <a href="page-event-details.html">
                                        <div class="event-arrows">
                                            <img class="image1" src="images/objects/event-arrow1.png" alt="">
                                        </div>
                                    </a>
                                </div>
                                <div class="event-item bg-theme-colored4 p-sm-30">
                                    <ul class="event-info-list text-white">
                                        <li><span class="font-weight-800">Age:</span> 6-9 Years</li>
                                        <li><span class="font-weight-600">Time:</span> 9.00 - 11.00</li>
                                        <li><span class="font-weight-600">Price:</span> $80</li>
                                    </ul>
                                    <h4 class="event-title text-white"><a href="page-event-details.html">Magic Paper
                                        Plates Art Gallery</a></h4>
                                    <a href="page-event-details.html">
                                        <div class="event-arrows">
                                            <img class="image1" src="images/objects/event-arrow1.png" alt="">
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12">
                            <img src="images/photos/events-img1.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="tm-floating-objects">
                <span class="floating-object-2 tm-animation-floating z-index--1"
                      data-tm-bg-img="images/objects/object-person1.png" data-tm-opacity="1" data-tm-width="305"
                      data-tm-height="335" data-tm-top="10%" data-tm-left="-26px"></span>
                <span class="floating-object-2 tm-animation-scaling z-index--1"
                      data-tm-bg-img="images/objects/object-star1.png" data-tm-opacity="0.8" data-tm-width="210"
                      data-tm-height="210" data-tm-top="0" data-tm-right="3%"></span>
                <span class="floating-object-2 tm-animation-scaling z-index--1"
                      data-tm-bg-img="images/objects/object-star2.png" data-tm-opacity="0.8" data-tm-width="210"
                      data-tm-height="210" data-tm-top="15%" data-tm-right="36%"></span>
            </div>
        </section>
        <!-- End Events -->

        <!-- Section: Pricing Tables -->
        <section class="bg-silver-light">
            <div class="container pb-70">
                <div class="section-title">
                    <div class="row justify-content-md-center">
                        <div class="col-md-8">
                            <div class="text-center mb-60">
                                <div class="tm-sc-section-title section-title">
                                    <div class="title-wrapper">
                                        <h6 class="mt-0 letter-space-2 text-theme-colored1 sub-title-icon">Pricing
                                            Tables</h6>
                                        <h2>See Our Pricing Plans</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section-content">
                    <div class="tm-sc-nav-tabs-pricing nav-tab-btn-button">
                        <ul class="nav nav-tabs">
                            <li class="active"><a class="active show" href="#pricing-navtab-button1"
                                                  data-bs-toggle="tab">
                                <span class="title">Monthly</span></a>
                            </li>
                            <li class=""><a class="" href="#pricing-navtab-button2" data-bs-toggle="tab"> <span
                                    class="title">Yearly</span> <span class="subtitle">10% Off</span></a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fadeInLeft in active show" id="pricing-navtab-button1">
                                <div class="tab-pane-inner">
                                    <div class="row">
                                        <div class="col-md-6 col-lg-4">
                                            <div class="tm-sc-pricing-table pricing-table-style-basic pricing-table-box-shadow pricing-table-hover-effect mb-30 text-center">
                                                <div class="pricing-table-inner-wrapper">
                                                    <div class="pricing-table-inner">
                                                        <div class="pricing-table-head">
                                                            <img src="images/objects/feature-bg-object03.png"
                                                                 alt="images">
                                                            <div class="pricing-table-pricing"><span
                                                                    class="pricing-table-prefix">$</span> <span
                                                                    class="pricing-table-price">45</span> <span
                                                                    class="pricing-table-separator">/</span>
                                                                <span class="pricing-table-postfix">Monthly</span>
                                                            </div>
                                                            <div class="pricing-table-title-area">
                                                                <h4 class="pricing-table-title">Basic Plan</h4>
                                                            </div>
                                                        </div>
                                                        <div class="pricing-table-content">
                                                            <ul class="">
                                                                <li>Extra features</li>
                                                                <li>Lifetime free support</li>
                                                                <li>Upgrate options</li>
                                                                <li>Full access</li>
                                                            </ul>
                                                        </div>
                                                        <div class="pricing-table-footer">
                                                            <div class="btn-view-details">
                                                                <a href="#" target="_self"
                                                                   class="btn btn-theme-colored2 btn-round">Select
                                                                    Plan</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-4">
                                            <div class="tm-sc-pricing-table pricing-table-style-basic pricing-table-box-shadow pricing-table-hover-effect mb-30 text-center">
                                                <div class="pricing-table-inner-wrapper">
                                                    <div class="pricing-table-inner">
                                                        <div class="pricing-table-head">
                                                            <img src="images/objects/feature-bg-object02.png"
                                                                 alt="images">
                                                            <div class="pricing-table-pricing"><span
                                                                    class="pricing-table-prefix">$</span> <span
                                                                    class="pricing-table-price">65</span> <span
                                                                    class="pricing-table-separator">/</span>
                                                                <span class="pricing-table-postfix">Monthly</span>
                                                            </div>
                                                            <div class="pricing-table-title-area">
                                                                <h4 class="pricing-table-title">Standard Plan</h4>
                                                            </div>
                                                        </div>
                                                        <div class="pricing-table-content">
                                                            <ul class="">
                                                                <li>Extra features</li>
                                                                <li>Lifetime free support</li>
                                                                <li>Upgrate options</li>
                                                                <li>Full access</li>
                                                            </ul>
                                                        </div>
                                                        <div class="pricing-table-footer">
                                                            <div class="btn-view-details">
                                                                <a href="#" target="_self"
                                                                   class="btn btn-theme-colored2 btn-round">Select
                                                                    Plan</a>
                                                            </div>
                                                        </div>
                                                        <span class="pricing-table-label">Popular</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-4">
                                            <div class="tm-sc-pricing-table pricing-table-style-basic pricing-table-box-shadow pricing-table-hover-effect mb-30 text-center">
                                                <div class="pricing-table-inner-wrapper">
                                                    <div class="pricing-table-inner">
                                                        <div class="pricing-table-head">
                                                            <img src="images/objects/feature-bg-object01.png"
                                                                 alt="images">
                                                            <div class="pricing-table-pricing"><span
                                                                    class="pricing-table-prefix">$</span> <span
                                                                    class="pricing-table-price">90</span> <span
                                                                    class="pricing-table-separator">/</span>
                                                                <span class="pricing-table-postfix">Monthly</span>
                                                            </div>
                                                            <div class="pricing-table-title-area">
                                                                <h4 class="pricing-table-title">Premimum Plan</h4>
                                                            </div>
                                                        </div>
                                                        <div class="pricing-table-content">
                                                            <ul class="">
                                                                <li>Extra features</li>
                                                                <li>Lifetime free support</li>
                                                                <li>Upgrate options</li>
                                                                <li>Full access</li>
                                                            </ul>
                                                        </div>
                                                        <div class="pricing-table-footer">
                                                            <div class="btn-view-details">
                                                                <a href="#" target="_self"
                                                                   class="btn btn-theme-colored2 btn-round">Select
                                                                    Plan</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fadeInRight" id="pricing-navtab-button2">
                                <div class="tab-pane-inner">
                                    <div class="row">
                                        <div class="col-md-6 col-lg-4">
                                            <div class="tm-sc-pricing-table pricing-table-style-basic pricing-table-box-shadow pricing-table-hover-effect mb-30 text-center">
                                                <div class="pricing-table-inner-wrapper">
                                                    <div class="pricing-table-inner">
                                                        <div class="pricing-table-head">
                                                            <img src="images/objects/feature-bg-object01.png"
                                                                 alt="images">
                                                            <div class="pricing-table-pricing"><span
                                                                    class="pricing-table-prefix">$</span> <span
                                                                    class="pricing-table-price">120</span> <span
                                                                    class="pricing-table-separator">/</span>
                                                                <span class="pricing-table-postfix">Yearly</span>
                                                            </div>
                                                            <div class="pricing-table-title-area">
                                                                <h4 class="pricing-table-title">First Session</h4>
                                                            </div>
                                                        </div>
                                                        <div class="pricing-table-content">
                                                            <ul class="">
                                                                <li>Extra features</li>
                                                                <li>Lifetime free support</li>
                                                                <li>Upgrate options</li>
                                                                <li>Full access</li>
                                                            </ul>
                                                        </div>
                                                        <div class="pricing-table-footer">
                                                            <div class="btn-view-details">
                                                                <a href="#" target="_self"
                                                                   class="btn btn-theme-colored2 btn-round">Select
                                                                    Plan</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-4">
                                            <div class="tm-sc-pricing-table pricing-table-style-basic pricing-table-box-shadow pricing-table-hover-effect mb-30 text-center">
                                                <div class="pricing-table-inner-wrapper">
                                                    <div class="pricing-table-inner">
                                                        <div class="pricing-table-head">
                                                            <img src="images/objects/feature-bg-object03.png"
                                                                 alt="images">
                                                            <div class="pricing-table-pricing"><span
                                                                    class="pricing-table-prefix">$</span> <span
                                                                    class="pricing-table-price">199</span> <span
                                                                    class="pricing-table-separator">/</span>
                                                                <span class="pricing-table-postfix">Yearly</span>
                                                            </div>
                                                            <div class="pricing-table-title-area">
                                                                <h4 class="pricing-table-title">Second Session</h4>
                                                            </div>
                                                        </div>
                                                        <div class="pricing-table-content">
                                                            <ul class="">
                                                                <li>Extra features</li>
                                                                <li>Lifetime free support</li>
                                                                <li>Upgrate options</li>
                                                                <li>Full access</li>
                                                            </ul>
                                                        </div>
                                                        <div class="pricing-table-footer">
                                                            <div class="btn-view-details">
                                                                <a href="#" target="_self"
                                                                   class="btn btn-theme-colored2 btn-round">Select
                                                                    Plan</a>
                                                            </div>
                                                        </div>
                                                        <span class="pricing-table-label">Popular</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-4">
                                            <div class="tm-sc-pricing-table pricing-table-style-basic pricing-table-box-shadow pricing-table-hover-effect mb-30 text-center">
                                                <div class="pricing-table-inner-wrapper">
                                                    <div class="pricing-table-inner">
                                                        <div class="pricing-table-head">
                                                            <img src="images/objects/feature-bg-object02.png"
                                                                 alt="images">
                                                            <div class="pricing-table-pricing"><span
                                                                    class="pricing-table-prefix">$</span> <span
                                                                    class="pricing-table-price">299</span> <span
                                                                    class="pricing-table-separator">/</span>
                                                                <span class="pricing-table-postfix">Yearly</span>
                                                            </div>
                                                            <div class="pricing-table-title-area">
                                                                <h4 class="pricing-table-title">Last Session</h4>
                                                            </div>
                                                        </div>
                                                        <div class="pricing-table-content">
                                                            <ul class="">
                                                                <li>Extra features</li>
                                                                <li>Lifetime free support</li>
                                                                <li>Upgrate options</li>
                                                                <li>Full access</li>
                                                            </ul>
                                                        </div>
                                                        <div class="pricing-table-footer">
                                                            <div class="btn-view-details">
                                                                <a href="#" target="_self"
                                                                   class="btn btn-theme-colored2 btn-round">Select
                                                                    Plan</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Start Teams -->
        <section class="bg-theme-colored2" data-tm-bg-img="images/bg/object-bg2.png">
            <div class="container">
                <div class="section-title">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <div class="tm-sc-section-title section-title text-center">
                                <div class="title-wrapper">
                                    <h6 class="text-white">Teams</h6>
                                    <h2 class="title text-theme-colored1">Our Teacher</h2>
                                    <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elitrem
                                        ipsum dolor sit amet, consectetur adipisicing elit, sed do</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-4 col-xl-4">
                            <div class="tm-sc-staff staff-current-theme text-center mb-30">
                                <div class="tm-staff">
                                    <div class="thumb mb-20">
                                        <img class="rounded-circle" src="images/team/team1.jpg" alt="Image">
                                    </div>
                                    <div class="details text-center">
                                        <h4 class="title text-white mt-0 mb-0"><a href="page-team-details.html">Jessica
                                            Martin</a></h4>
                                        <p class="designation text-white-f3 font-weight-500 mb-15">Teacher</p>
                                        <ul class="styled-icons icon-md icon-gray icon-circled icon-theme-colored3">
                                            <li><a class="social-link" href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a class="social-link" href="#"><i class="fab fa-youtube"></i></a></li>
                                            <li><a class="social-link" href="#"><i class="fab fa-instagram"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-xl-4">
                            <div class="tm-sc-staff staff-current-theme text-center mb-30">
                                <div class="tm-staff">
                                    <div class="thumb mb-20">
                                        <img class="rounded-circle" src="images/team/team2.jpg" alt="Image">
                                    </div>
                                    <div class="details text-center">
                                        <h4 class="title text-white mt-0 mb-0"><a href="page-team-details.html">Martin
                                            Albin</a></h4>
                                        <p class="designation text-white-f3 font-weight-500 mb-15">Teacher</p>
                                        <ul class="styled-icons icon-md icon-gray icon-circled icon-theme-colored3">
                                            <li><a class="social-link" href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a class="social-link" href="#"><i class="fab fa-youtube"></i></a></li>
                                            <li><a class="social-link" href="#"><i class="fab fa-instagram"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-xl-4">
                            <div class="tm-sc-staff staff-current-theme text-center mb-30">
                                <div class="tm-staff">
                                    <div class="thumb mb-20">
                                        <img class="rounded-circle" src="images/team/team3.jpg" alt="Image">
                                    </div>
                                    <div class="details text-center">
                                        <h4 class="title text-white mt-0 mb-0"><a href="page-team-details.html">Albart
                                            Rose</a></h4>
                                        <p class="designation text-white-f3 font-weight-500 mb-15">Teacher</p>
                                        <ul class="styled-icons icon-md icon-gray icon-circled icon-theme-colored3">
                                            <li><a class="social-link" href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a class="social-link" href="#"><i class="fab fa-youtube"></i></a></li>
                                            <li><a class="social-link" href="#"><i class="fab fa-instagram"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Teams -->

        <!-- Section: News -->
        <section>
            <div class="container">
                <div class="section-title">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <div class="tm-sc-section-title section-title text-center">
                                <div class="title-wrapper">
                                    <h6>Blogs</h6>
                                    <h2 class="title text-theme-colored1">News & Update</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elitrem ipsum dolor sit amet,
                                        consectetur adipisicing elit, sed do</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section-content">
                    <div class="row justify-content-md-center">
                        <div class="col-md-12 col-lg-6 col-xl-6">
                            <div class="blog-style1-current-theme mb-lg-30">
                                <article class="post">
                                    <div class="entry-header">
                                        <div class="post-thumb">
                                            <div class="post-thumb-inner">
                                                <div class="thumb"><img class="w-100" src="images/blog/1.jpg"
                                                                        alt="Image"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="entry-content">
                                        <h4 class="entry-title mt-0"><a href="news-details.html" rel="bookmark">The
                                            Challenges of Parenting</a></h4>
                                        <div class="blog-meta mb-20">
                      <span class="admin-type mr-10">
                        By Admin /
                      </span>
                                            <span class="comments-type">
                        2 Comments /
                      </span>
                                            <span class="comments-cat">
                        WordPress Themes
                      </span>
                                        </div>
                                        <p class="entry-excerpt mb-0">Lorem ipsum dolor sit amet, consectetur
                                            adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                            aliqua. Totam rem aperiam, eaque ipsa quae ab illo.</p>
                                    </div>
                                </article>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-6 col-xl-6">
                            <div class="blog-style1-current-theme mb-lg-30">
                                <article class="post">
                                    <div class="entry-header">
                                        <div class="post-thumb">
                                            <div class="post-thumb-inner">
                                                <div class="thumb"><img class="w-100" src="images/blog/2.jpg"
                                                                        alt="Image"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="entry-content">
                                        <h4 class="entry-title mt-0"><a href="news-details.html" rel="bookmark">Kids
                                            Grooming with New Lesson</a></h4>
                                        <div class="blog-meta mb-20">
                      <span class="admin-type mr-10">
                        By Admin /
                      </span>
                                            <span class="comments-type">
                        2 Comments /
                      </span>
                                            <span class="comments-cat">
                        WordPress Themes
                      </span>
                                        </div>
                                        <p class="entry-excerpt mb-0">Lorem ipsum dolor sit amet, consectetur
                                            adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                            aliqua. Totam rem aperiam, eaque ipsa quae ab illo.</p>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tm-floating-objects">
                <span class="floating-object-2 tm-animation-floating z-index--1"
                      data-tm-bg-img="images/objects/object-letter-r.png" data-tm-opacity="1" data-tm-width="110"
                      data-tm-height="110" data-tm-top="5%" data-tm-left="5%"></span>
                <span class="floating-object-2 tm-animation-scaling z-index--1"
                      data-tm-bg-img="images/objects/object-bulb.png" data-tm-opacity="1" data-tm-width="210"
                      data-tm-height="210" data-tm-top="0" data-tm-right="3%"></span>
                <span class="floating-object-2 tm-animation-scaling z-index--1"
                      data-tm-bg-img="images/objects/object-plus.png" data-tm-opacity="1" data-tm-width="210"
                      data-tm-height="210" data-tm-bottom="12%" data-tm-left="2%"></span>
            </div>
        </section>
        <!-- End News -->
    </div>
    <!-- end main-content -->

    <!-- Footer -->
    <?php
    include ("includes/footer.php")
    ?>


    <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper -->

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="js/custom.js"></script>

</body>

<!-- Mirrored from kodesolution.com/html/2021/edukids-html-v2/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 14 Aug 2022 09:28:22 GMT -->
</html>
