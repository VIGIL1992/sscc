<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>Careers | SSCC</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/bg/SSCC.png" />
    <?php
        include 'includes/header.php';
    ?>
</head>

<body>
    <div id="royal_preloader"></div>
    <div id="page" class="site">
        <?php
            include 'includes/navbar3.php';
        ?>


        <div id="content" class="site-content">
            <div class="page-header dtable text-center header-transparent pheader-careers ">
                <div class="dcell">
                    <div class="container">
                        <h1 class="page-title">Careers</h1>
                        <ul id="breadcrumbs" class="breadcrumbs none-style">
                            <li><a href="index.php">Home</a></li>
                            <li class="active">Careers</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="space-50"></div>
        <div class="space-50"></div>

        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center theratio-align-center">
                    <div class="ot-heading is-dots">
                        <span>[Careers]</span>
                        <h2 class="main-heading">JOIN US</h2><br>
                        <p>
                            Sustainable Solutions Construction Co. LLC offers challenging and rewarding positions in a variety 
                            of disciplines. If you would like to join our team, please get in touch with us.
                        </p>
                    </div>
                    <div class="space-50"></div>
                </div>
            </div>
        </div>
        <section class="space-medium career-container">
            <div class="career-wrapper">
                <!-- Left Side - Image and Text -->
                <div class="career-image-content">
                    <img src="images/banner/banner35.jpg" alt="Join Our Team">
                    <!-- <div class="career-text">
                        <h2>JOIN US</h2>
                        <p>
                            Sustainable Solutions Construction Co. LLC offers challenging and rewarding positions in a variety 
                            of disciplines. If you would like to join our team, please get in touch with us.
                        </p>
                    </div> -->
                </div>

                <!-- Right Side - Form -->
                <div class="career-form">
                    <form action="submit_application.php" method="POST" enctype="multipart/form-data">
                        <label>Your name</label>
                        <input type="text" name="name" required>

                        <label>Your email</label>
                        <input type="email" name="email" required>

                        <label>Your number</label>
                        <input type="tel" name="phone" required>

                        <label>Position applying</label>
                        <input type="text" name="position" required>

                        <label>Your message (optional)</label>
                        <textarea name="message"></textarea>

                        <label>Attach CV</label>
                        <input type="file" name="resume" accept=".pdf,.doc,.docx" required>

                        <button type="submit">Apply Now</button>
                    </form>
                </div>
            </div>
        </section>
        <div class="space-50"></div>
        <div class="space-50"></div>



        <style>
            .career-container {
                display: flex;
                justify-content: center;
                align-items: center;
                width: 100%;
                padding: 40px;
                background: white;
            }

            .career-wrapper {
                display: flex;
                width: 90%;
                max-width: 1200px;
                box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
                border-radius: 10px;
                overflow: hidden;
            }

            .career-image-content {
                flex: 1;
                background: #f8f8f8;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                padding: 30px;
                text-align: center;
            }

            .career-image-content img {
                max-width: 100%;
                height: auto;
                border-radius: 10px;
                margin-bottom: 20px;
            }

            .career-form {
                flex: 1;
                background: white;
                padding: 40px;
            }

            .career-form form {
                display: flex;
                flex-direction: column;
            }

            .career-form label {
                font-weight: bold;
                margin: 10px 0 5px;
            }

            .career-form input,
            .career-form textarea {
                width: 100%;
                padding: 12px;
                border: 1px solid #ddd;
                border-radius: 5px;
                font-size: 16px;
            }

            .career-form textarea {
                height: 100px;
                resize: none;
            }

            .career-form button {
                background: black;
                color: white;
                border: none;
                padding: 12px;
                margin-top: 15px;
                cursor: pointer;
                font-size: 18px;
                font-weight: bold;
                border-radius: 5px;
            }

            .career-form button:hover {
                background: #444;
            }

            /* Responsive Design */
            @media (max-width: 1024px) {
                .career-wrapper {
                    flex-direction: column;
                }
            }

            @media (max-width: 768px) {
                .career-container {
                    padding: 20px;
                }

                .career-form,
                .career-image-content {
                    padding: 20px;
                }
            }
        </style>

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