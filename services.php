<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>Services | SSCC</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/bg/SSCC.png" />
    <?php
        include 'includes/header.php';
    ?>

</head>

<body>
    <div id="royal_preloader"></div>
    <div id="page" class="site">
        <?php
        include 'includes/navbar.php';
        ?>


        <div id="content" class="site-content">
            <div class="page-header dtable text-center header-transparent pheader-service-detail1">
                <div class="dcell">
                    <div class="container">
                        <h1 class="page-title">Services</h1>
                        <ul id="breadcrumbs" class="breadcrumbs none-style">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="services_details.php">Our Services</a></li>
                           
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <section class="services-1">
            <div class="grid-lines grid-lines-vertical">
                <span class="g-line-vertical line-left color-line-default"></span>
                <span class="g-line-vertical line-center color-line-default"></span>
                <span class="g-line-vertical line-right color-line-default"></span>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center theratio-align-center">
                        <div class="ot-heading is-dots">
                            <span>[ OUR SERVICES ]</span>
                            <h2 class="main-heading">Focused and future ready</h2><br>
                            <p>We build with more than just concrete and steel; we build long-standing relationships. SSCC Group commits to a partnership approach for all projects that it manages.
                                Centered on the idea of making our community better, from Pre-erection work; new construction and repair,
                                alteration, restoration and maintenance work on residential buildings, non-residential buildings or civil engineering works;
                                SSCC assists our clients with their projects from concept to completion and proudly offers the following construction-based solutions:</p>
                        </div>
                        <div class="space-50"></div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="icon-box icon-box--bg-img icon-box--icon-top icon-box--is-line-hover icon-bg-1 text-center" style="min-height: 420px;">
                            <div class="icon-main"><img src="images/iconbox1.2.png" alt=""></div>
                            <div class="content-box">
                                <h5><a href="construct.php">Construction Services</a></h5>
                                <p>From preconstruction to virtual design and construction, we offer a wide range of services to meet your building needs.</p>
                            </div>
                            <div class="link-box">
                                <a href="construct.php" class="btn-details">READ MORE</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="icon-box icon-box--bg-img icon-box--icon-top icon-box--is-line-hover icon-bg-2 text-center" style="min-height: 420px;">
                            <div class="icon-main"><img src="images/iconbox2.png" alt=""></div>
                            <div class="content-box">
                                <h5><a href="manufacture.php">MEP Services</a></h5>
                                <p>SSCC Group provides MEP Engineering Services for a wide range of building types, scales and climatic conditions buildings.</p>
                            </div>
                            <div class="link-box">
                                <a href="construct.php" class="btn-details">READ MORE</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="icon-box icon-box--bg-img icon-box--icon-top icon-box--is-line-hover icon-bg-3 text-center" style="min-height: 420px;">
                            <div class="icon-main"><img src="images/iconbox3.png" alt=""></div>
                            <div class="content-box">
                                <h5><a href="enhance.php">Maintenance & Renovation</a></h5>
                                <p>Successful building maintenance and renovation projects require experience as well as precise planning and execution.</p>
                            </div>
                            <div class="link-box">
                                <a href="construct.php" class="btn-details">READ MORE</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="icon-box icon-box--bg-img icon-box--icon-top icon-box--is-line-hover icon-bg-3 text-center" style="min-height: 420px;">
                            <div class="icon-main"><img src="images/iconbox3.png" alt=""></div>
                            <div class="content-box">
                                <h5><a href="enhance.php">Project Management</a></h5>
                                <p>We support our clients in the planning and design phases with a strict focus on delivering and executing projects on time,within budget, and by following the highest quality standards.</p>
                            </div>
                            <div class="link-box">
                                <a href="construct.php" class="btn-details">READ MORE</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="icon-box icon-box--bg-img icon-box--icon-top icon-box--is-line-hover icon-bg-3 text-center" style="min-height: 420px;">
                            <div class="icon-main"><img src="images/iconbox3.png" alt=""></div>
                            <div class="content-box">
                                <h5><a href="enhance.php">Value Engineering Services</a></h5>
                                <p>Value Engineering is recognized as a value improving practice(VIP). We apply value engineering effectively and efficiently.</p>
                            </div>
                            <div class="link-box">
                                <a href="construct.php" class="btn-details">READ MORE</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">

                    </div>

                    <div class="space-120"></div>
                </div>
               
            </div>
        </section>
        <?php

        include 'includes/footer.php';
        include 'includes/scripts.php';
        ?>

    </div><!-- #page -->
    <a id="back-to-top" href="#" class="show"><i class="ot-flaticon-left-arrow"></i></a>
    <!-- jQuery -->

    <!-- <script>
        window.jQuery = window.$ = jQuery;
        (function($) {
            "use strict";
            //Preloader
            Royal_Preloader.config({
                mode: 'progress',
                background: '#1a1a1a',
            });
        })(jQuery);
    </script> -->
</body>


</html>
<!-- <ul class="menu">
                                            
                                            <li><a href="index.php">Home</a></li>
                                            <li><a href="about.php">Our Story</a></li>
                                            <li><a href="services_details.php">What We Do</a></li>
                                            <li><a href="portfolio.php">Our Projects</a></li>
                                            <li><a href="career.php">Careers</a></li>
                                            <li><a href="contact.php">Contact</a></li>
                                        </ul> -->