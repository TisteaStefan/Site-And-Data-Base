<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="images/icon.png">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style-responsive.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/vertical-rhythm.min.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
</head>

<body class="appear-animate">

    <div class="page-loader">
        <div class="loader">Se încarcă...</div>
    </div>

    <div class="page" id="top">
        <section class="home-section bg-dark-alfa-30 parallax-2" data-background="images/BG4.jpg" id="home">
            <div class="js-height-full container">
                <div class="home-content">
                    <div class="home-text">
                        <h1 class="hs-line-1 font-alt mb-80 mb-xs-30 mt-70 mt-sm-0">
                            LogIn
                        </h1>
                    </div>
                </div>

            </div>
        </section>
        <section>
            <div class="container">
               <div >
                <div class="row mb-20 mt-30">
                    <div >
                        <h3 class="text-uppercase">Login</h3>
                        <div class="m-t-30">
                            <form class="widget-contact-form" novalidate action="loginphp.php" role="form"
                                method="post">
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="username">Username</label>
                                        <input type="text" aria-required="true" name="username" required
                                            class="form-control required name" placeholder="Introduceți username-ul">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="parola">Password</label>
                                        <input type="password" name="parola" required
                                            class="form-control required" placeholder="Password...">
                                    </div>
                                </div>
                                <button class="btn" type="submit" id="form-submit"><i
                                        class="fa fa-paper-plane"></i>&nbsp;Login</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>
        <footer class="page-section bg-gray-lighter footer pb-60">
            <div class="container">
                <div class="local-scroll wow fadeInDown footer-title mb-40" data-wow-duration="1.5s">
                    Muzee
                </div>
                <div class="footer-text">
                    <div class="footer-made">
                        <p class="mb-80" style="color:black;font-size:16px">
                            La fel ca o capodoperă pictată, arhitectura este o formă de artă care are capacitatea de a încânta, inspira și transforma.</p>
                    </div>
                </div>
            </div>
            <div class="local-scroll">
                <a href="#top" class="link-to-top"><i class="fa fa-caret-up"></i></a>
            </div>
        </footer>
    </div>
    <script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="js/jquery-migrate-1.4.1.min.js"></script>
    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/SmoothScroll.js"></script>
    <script type="text/javascript" src="js/jquery.scrollTo.min.js"></script>
    <script type="text/javascript" src="js/jquery.localScroll.min.js"></script>
    <script type="text/javascript" src="js/jquery.viewport.mini.js"></script>
    <script type="text/javascript" src="js/jquery.countTo.js"></script>
    <script type="text/javascript" src="js/jquery.appear.js"></script>
    <script type="text/javascript" src="js/jquery.sticky.js"></script>
    <script type="text/javascript" src="js/jquery.parallax-1.1.3.js"></script>
    <script type="text/javascript" src="js/jquery.fitvids.js"></script>
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="js/isotope.pkgd.min.js"></script>
    <script type="text/javascript" src="js/imagesloaded.pkgd.min.js"></script>
    <script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script type="text/javascript" src="js/masonry.pkgd.min.js"></script>
    <script type="text/javascript" src="js/jquery.simple-text-rotator.min.js"></script>
    <script type="text/javascript" src="js/jquery.lazyload.min.js"></script>
    <script type="text/javascript" src="js/all.js"></script>
    <script type="text/javascript" src="js/contact-form.js"></script>
    <script type="text/javascript" src="js/jquery.ajaxchimp.min.js"></script>
   // <?php 
   // echo '<script>alert("Wrong username or password")</script>';
   // echo '<script type="text/javascript">
     //           window.onload=function(){ alert("Wrong password of username");}
       //     </script>';
        ?>
</body>

</html>
