<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>Contact | SSCC</title>
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
            <div class="page-header dtable text-center header-transparent page-header-contact">
                <div class="dcell">
                    <div class="container">
                        <h1 class="page-title">Contact</h1>
                        <ul id="breadcrumbs" class="breadcrumbs none-style">
                            <li><a href="index.php">Home</a></li>
                            <li class="active">Contacts</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <section class="contact-page">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 align-self-center mb-5 mb-lg-0">
                        <div class="contact-left">
                            <h2>Get in Touch</h2>
                            <p class="">Your email address will not be published. Required fields are marked *</p>
                            <form id="ajax-form" name="ajax-form" action="https://templates.thememodern.com/theratio/contact.php" method="post" class="wpcf7">
                                <div class="main-form">
                                    <p>
                                        <label for="name"> <span class="error" id="err-name">please enter name</span></label>
                                        <input type="text" id="name" name="name" value="" size="40" class="" aria-invalid="false" placeholder="Your Name *" required>
                                    </p>
                                    <p>
                                        <label for="email">
                                            <span class="error" id="err-email">please enter e-mail</span>
                                            <span class="error" id="err-emailvld">e-mail is not a valid format</span>
                                        </label>
                                        <input type="email" name="email" id="email" value="" size="40" class="" aria-invalid="false" placeholder="Your Email *" required>
                                    </p>
                                    <p>
                                        <label for="message"></label>
                                        <textarea name="message" id="message" cols="40" rows="10" class="" aria-invalid="false" placeholder="Message..." required></textarea>
                                    </p>
                                    <p><button type="submit" id="send" class="octf-btn">Send Message</button></p>
                                    <div class="clear"></div>
                                    <div class="error" id="err-form">There was a problem validating the form please check!</div>
                                    <div class="error" id="err-timedout">The connection to the server timed out!</div>
                                    <div class="error" id="err-state"></div>
                                </div>
                            </form>

                            <div class="clear"></div>
                            <div id="ajaxsuccess">Successfully sent!!</div>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="contact-right">
                            <div class="ot-heading">
                                <span>[ our contact details ]</span>
                                <h2 class="main-heading">Let's Start a Project</h2>
                            </div>
                            <p>Give us a call or drop by anytime, we endeavour to answer all enquiries within 24 hours on business days. We will be happy to answer your questions.</p>
                            <div class="contact-info">
                                <i class="ot-flaticon-place"></i>
                                <div class="info-text">
                                    <h6>OUR ADDRESS:</h6>
                                    <p>#901, Smart Heights Tower by Damac, Barsha Heights, Dubai – UAE.</p>
                                </div>
                            </div>
                            <div class="contact-info">
                                <i class="ot-flaticon-mail"></i>
                                <div class="info-text">
                                    <h6>OUR MAILBOX:</h6>
                                    <p><a href="mailto:theratio_interior@mail.com">info@ssccgroup.net</a></p>
                                </div>
                            </div>
                            <div class="contact-info">
                                <i class="ot-flaticon-phone-call"></i>
                                <div class="info-text">
                                    <h6>OUR PHONE:</h6>
                                    <p><a href="+971 4 7709256<">+971 4 7709256</a></p>
                                </div>
                            </div>
                            <div class="list-social">
                                <ul>
                                    <!-- <li><a href="http://twitter.com/" target="_self"><i class="fab fa-twitter"></i></a></li> -->
                                    <li><a href="https://www.facebook.com/SSCCGROUPUAE/" target="_self"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="https://www.likedin.com/in/sscc-group-uae/" target="_self"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="https://www.instagram.com/SSCC_Group/" target="_self"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="space-120"></div>

        <!-- <div class="contact-map">
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d86077.66255184308!2d-122.40402224079803!3d47.60810999586645!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54906ab3f905c4b1%3A0x96bf575ff75ab1aa!2s411%20University%20St%2C%20Seattle%2C%20WA%2098101%2C%20Hoa%20K%E1%BB%B3!5e0!3m2!1svi!2s!4v1584084043716!5m2!1svi!2s" height="522" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div> -->

        <div class="map-sec">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7477.060926650807!2d55.17054563726644!3d25.096264212419072!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f6b798cbfff8b%3A0x70a7f5e105a580e!2sDAMAC%20Smart%20Heights!5e1!3m2!1sen!2sin!4v1740994975603!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
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