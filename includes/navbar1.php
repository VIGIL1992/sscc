<header id="site-header" class="site-header header-transparent">
    <!-- Main Header start -->
    <div class="octf-main-header is-fixed">
        <div class="octf-area-wrap">
            <div class="container-fluid octf-mainbar-container">
                <div class="octf-mainbar">
                    <div class="octf-mainbar-row octf-row">
                        <div class="octf-col logo-col no-padding">
                            <div id="site-logo" class="site-logo">
                                <a href="index.php">
                                    <img src="images/bg/logo.svg" alt="SSCC" class="">
                                </a>
                            </div>
                        </div>
                        <div class="octf-col menu-col no-padding">

                            <?php
                                // Get the current file name
                                $current_page = basename($_SERVER['PHP_SELF']);
                            ?>

                            <nav id="site-navigation" class="main-navigation">
                                <ul class="menu">
                                    <li class="<?= ($current_page == 'index.php') ? 'current-menu-item' : ''; ?>">
                                        <a href="index.php">Home</a>
                                    </li>
                                    <li class="<?= ($current_page == 'about.php') ? 'current-menu-item' : ''; ?>">
                                        <a href="about.php">Our Story</a>
                                    </li>
                                    <li class="<?= ($current_page == 'services_details.php') ? 'current-menu-item' : ''; ?>">
                                        <a href="services_details.php">What We Do</a>
                                    </li>
                                    <li class="<?= ($current_page == 'portfolio.php') ? 'current-menu-item' : ''; ?>">
                                        <a href="portfolio.php">Our Projects</a>
                                    </li>
                                    <li class="<?= ($current_page == 'career.php') ? 'current-menu-item' : ''; ?>">
                                        <a href="career.php">Careers</a>
                                    </li>
                                    <li class="<?= ($current_page == 'contact.php') ? 'current-menu-item' : ''; ?>">
                                        <a href="contact.php">Contact</a>
                                    </li>
                                </ul>
                            </nav>





                        </div>
                        <div class="octf-col cta-col text-right no-padding">
                            <!-- Call To Action -->
                            <div class="octf-btn-cta">

                                <div class="octf-sidepanel octf-cta-header">
                                    <div class="site-overlay panel-overlay"></div>
                                    <div id="panel-btn" class="panel-btn octf-cta-icons">
                                        <i class="ot-flaticon-menu"></i>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <div class="header_mobile">
        <div class="container-fluid">
            <div class="octf-mainbar-row octf-row">
                <div class="octf-col">
                    <div class="mlogo_wrapper clearfix">
                        <div class="mobile_logo">
                            <a href="index.php">
                                <img src="images/bg/logo.svg" alt="SSCC">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="octf-col justify-content-end">
                   
                    <div class="octf-menu-mobile octf-cta-header">
                        <div id="mmenu-toggle" class="mmenu-toggle">
                            <button><i class="ot-flaticon-menu"></i></button>
                        </div>
                        <div class="site-overlay mmenu-overlay"></div>
                        <div id="mmenu-wrapper" class="mmenu-wrapper on-right">
                            <div class="mmenu-inner">
                                <a class="mmenu-close" href="#"><i class="ot-flaticon-right-arrow"></i></a>
                                <div class="mobile-nav">
                                    <ul id="menu-main-menu" class="mobile_mainmenu none-style">
                                        <!-- <li class="menu-item-has-children current-menu-item current-menu-ancestor">
                                            <a href="index.html">Home</a>
                                            <ul class="sub-menu">
                                                <li class="current-menu-item"><a href="index.html">Main Home</a></li>
                                                <li><a href="index-dark.html">Main Dark</a></li>
                                                <li><a href="index-2.html">Interior Design</a></li>
                                                <li><a href="index-2-light.html">Interior Design Light</a></li>
                                                <li><a href="index-3.html">Studio Home</a></li>
                                                <li><a href="index-3-dark.html">Studio Home Dark</a></li>
                                                <li><a href="index-4.html">Architecture Agency</a></li>
                                                <li><a href="index-4-dark.html">Architecture Agency Dark</a></li>
                                                <li><a href="index-5.html">Design Company</a></li>
                                                <li><a href="index-5-dark.html">Design Company Dark</a></li>
                                                <li><a href="index-6.html">Home Video</a></li>
                                                <li><a href="index-6-dark.html">Home Video Dark</a></li>
                                                <li><a href="home-full-screen.html">Home Full Screen</a></li>
                                                <li><a href="one-page.html">Home One Page</a></li>
                                                <li><a href="one-page-dark.html">Home One Page Dark</a></li>
                                                <li><a href="index-sidenav.html">Home with Side Menu</a></li>
                                                <li><a href="index-sidenav-light.html">Home with Side Menu Light</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children"><a href="#">Pages</a>
                                            <ul class="sub-menu">
                                                <li><a href="about-us.html">About Us</a></li>
                                                <li><a href="our-services.html">Our Services</a></li>
                                                <li><a href="our-team.html">Our Team</a></li>
                                                <li><a href="single-team.html">Single Team</a></li>
                                                <li><a href="our-process.html">Our Process</a></li>
                                                <li><a href="our-studio.html">Our Studio</a></li>
                                                <li class="menu-item-has-children"><a href="shop.html">Shop</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="single-product.html">Single Product</a></li>
                                                        <li><a href="checkout-page.html">Checkout Page</a></li>
                                                        <li><a href="cart-page.html">Cart Page</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="typography.html">Typography</a></li>
                                                <li><a href="elements.html">Elements</a></li>
                                                <li><a href="faq.html">FAQS</a></li>
                                                <li><a href="cooming-soon.html">Coming Soon</a></li>
                                                <li><a href="404-error.html">404 Error</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children"><a href="#">Services</a>
                                            <ul class="sub-menu">
                                                <li><a href="servcies-detail-1.html">Design & Planning</a></li>
                                                <li><a href="servcies-detail-2.html">Exterior Design</a></li>
                                                <li><a href="servcies-detail-3.html">Custom Solutions</a></li>
                                                <li><a href="servcies-detail-4.html">Furniture & Decor</a></li>
                                                <li><a href="servcies-detail-5.html">Creating Concept</a></li>
                                                <li><a href="servcies-detail-6.html">Author’s Control</a></li>
                                            </ul>
                                        </li> -->
                                        <li class="<?= ($current_page == 'index.php') ? 'active' : ''; ?>">
                                            <a href="index.php">Home</a>
                                        </li>
                                        <li class="<?= ($current_page == 'about.php') ? 'active' : ''; ?>">
                                            <a href="about.php">Our Story</a>
                                        </li>
                                        <li class="<?= ($current_page == 'services_details.php') ? 'active' : ''; ?>">
                                            <a href="services_details.php">What We DO</a>
                                        </li>
                                        <li class="<?= ($current_page == 'portfolio.php') ? 'active' : ''; ?>">
                                            <a href="portfolio.php">Our Projects</a>
                                        </li>
                                        <li class="<?= ($current_page == 'career.php') ? 'active' : ''; ?>">
                                            <a href="career.php">Careers</a>
                                        </li>
                                        <li class="<?= ($current_page == 'contact.php') ? 'active' : ''; ?>">
                                            <a href="contact.php">Contact</a>
                                        </li>
                                        <!-- <li><a href="construct.php">Construct</a></li>
                                        <li><a href="manufacture.php">Manufacture</a></li>
                                        <li><a href="enhance.php">Enhance</a></li> -->


                                        <!-- <li class="menu-item-has-children"><a href="#">Portfolio</a>
                                            <ul class="sub-menu">
                                                <li class="menu-item-has-children"><a href="#">Portfolio Types</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="portfolio-masonry.html">Portfolio Grid Masonry</a></li>
                                                        <li><a href="portfolio-no-gap.html">Portfolio Grid No Gap</a></li>
                                                        <li><a href="portfolio-under.html">Portfolio Info Under Image</a></li>
                                                        <li><a href="portfolio-metro.html">Portfolio Metro</a></li>
                                                        <li><a href="portfolio-metro-no-gap.html">Portfolio Metro No Space</a></li>
                                                        <li><a href="portfolio-gallery.html">Portfolio Gallery</a></li>
                                                        <li><a href="portfolio-slider.html">Portfolio Slider</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item-has-children"><a href="#">Portfolio Layout</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="portfolio-two-column.html">Two Columns</a></li>
                                                        <li><a href="portfolio-three-column.html">Three Columns</a></li>
                                                        <li><a href="portfolio-three-column-wide.html">Three Columns Wide</a></li>
                                                        <li><a href="portfolio-four-column-wide.html">Four Columns Wide</a></li>
                                                        <li><a href="portfolio-five-column-wide.html">Five Columns Wide</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item-has-children"><a href="#">Portfolio Hover Types</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="portfolio-standar.html">Standar</a></li>
                                                        <li><a href="portfolio-detail-slider.html">Slider Images</a></li>
                                                        <li><a href="portfolio-left.html">Left Image</a></li>
                                                        <li><a href="portfolio-right.html">Right Image</a></li>
                                                        <li><a href="portfolio-small.html">Small Image</a></li>
                                                        <li><a href="portfolio-big.html">Big Image</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item-has-children"><a href="image-scale.html">Image-scale</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="image-scale.html">Image Scale</a></li>
                                                        <li><a href="show-overlay-info.html">Show Overlay Info</a></li>
                                                        <li><a href="hidden-overlay-info.html">Hidden Overlay Info</a></li>
                                                        <li><a href="background-solid.html">Background Solid</a></li>
                                                        <li><a href="hidden-1.html">Hidden 1</a></li>
                                                        <li><a href="hidden-2.html">Hidden 2</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children"><a href="blog.html">Blog</a>
                                            <ul class="sub-menu">
                                                <li><a href="blog.html">Blog Listing</a></li>
                                                <li><a href="blog-grid.html">Blog Grid</a></li>
                                                <li><a href="post.html">Blog Single</a></li>
                                            </ul>
                                        </li> -->

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>


<div id="side-panel" class="side-panel">
    <a href="#" class="side-panel-close"><i class="ot-flaticon-close-1"></i></a>
    <div class="side-panel-block">
        <div class="side-panel-wrap">
            <div class="the-logo">
                <a href="index.php">
                    <img src="images/bg/logo.svg" alt="Theratio">
                </a>
            </div>
            <div class="ot-heading">
                <h2 class="main-heading">Our Gallery</h2>
            </div>
            <div class="image-gallery">
                <div id="gallery-1" class="gallery galleryid-102 gallery-columns-3 gallery-size-thumbnail">
                    <figure class="gallery-item">
                        <div class="gallery-icon landscape">
                            <a data-elementor-open-arbox="yes" data-elementor-lightbox-slideshow="8701e24" data-elementor-lightbox-title="p4-gallery1" href="images/construction/construction10.jpg">
                                <img src="images/construction/construction10.jpg" class="" alt="">
                            </a>
                        </div>
                    </figure>
                    <figure class="gallery-item">
                        <div class="gallery-icon landscape">
                            <a data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="8701e24" data-elementor-lightbox-title="p4-gallery1" href="images/construction/construction1.jpg">
                                <img src="images/construction/construction1.jpg" class="" alt="">
                            </a>
                        </div>
                    </figure>
                    <figure class="gallery-item">
                        <div class="gallery-icon landscape">
                            <a data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="8701e24" data-elementor-lightbox-title="p4-gallery1" href="images/construction/construction6.jpg">
                                <img src="images/construction/construction6.jpg" class="" alt="">
                            </a>
                        </div>
                    </figure>
                    <figure class="gallery-item">
                        <div class="gallery-icon landscape">
                            <a data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="8701e24" data-elementor-lightbox-title="p4-gallery1" href="images/construction/construction7.jpg">
                                <img src="images/construction/construction7.jpg" class="" alt="">
                            </a>
                        </div>
                    </figure>
                    <figure class="gallery-item">
                        <div class="gallery-icon landscape">
                            <a data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="8701e24" data-elementor-lightbox-title="p4-gallery1" href="images/construction/construction8.jpg">
                                <img src="images/construction/construction8.jpg" class="" alt="">
                            </a>
                        </div>
                    </figure>
                    <figure class="gallery-item">
                        <div class="gallery-icon landscape">
                            <a data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="8701e24" data-elementor-lightbox-title="p4-gallery1" href="images/construction/construction9.jpg">
                                <img src="images/construction/construction9.jpg" class="" alt="">
                            </a>
                        </div>
                    </figure>
                </div>
            </div>
            <div class="ot-heading ">
                <h2 class="main-heading">Contact Info</h2>
            </div>
            <div class="side-panel-cinfo">
                <ul class="panel-cinfo">
                    <li class="footer-list-item">
                        <span class="list-item-icon"><i class="ot-flaticon-place"></i></span>
                        <span class="list-item-text"># 901, Smart Heights Tower
                            By Damac, Barsha Heights
                            Dubai – UAE</span>
                    </li>
                    <li class="panel-list-item">
                        <span class="panel-list-icon"><i class="ot-flaticon-mail"></i></span>
                        <span class="panel-list-text">info@ssccgroup.net</span>
                    </li>
                    <li class="panel-list-item">
                        <span class="panel-list-icon"><i class="ot-flaticon-phone-call"></i></span>
                        <span class="panel-list-text">+971 4 7709256</span>
                    </li>
                </ul>
            </div>
            <div class="side-panel-social">
                <ul>

                    <li><a href="http://facebook.com/" target="_self"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="http://linkedin.com/" target="_self"><i class="fab fa-linkedin-in"></i></a></li>
                    <li><a href="http://instagram/" target="_self"><i class="fab fa-instagram"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>