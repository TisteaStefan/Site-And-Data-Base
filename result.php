 <html>
<head>
    <title>Result</title>
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
<title>
Reservations list
</title>
</head>
<body class="appear-animate">

    <div class="page-loader">
        <div class="loader">Se încarcă...</div>
    </div>

    <div class="page" id="top">
        <nav class="main-nav dark transparent stick-fixed">
            <div class="full-wrapper relative clearfix">
                <div class="nav-logo-wrap local-scroll">
                    <a href="new 1.php" class="logo">
                       Magazin Muzeu
                    </a>
                </div>
                <div class="mobile-nav" role="button" tabindex="0">
                    <i class="fa fa-bars"></i>
                    <span class="sr-only">Menu</span>
                </div>
                <div class="inner-nav desktop-nav">
                    <ul class="clearlist scroll-nav local-scroll">
                       <li class="active"><a href="index.php">Prima pagină</a></li>
                        <li><a href="new 1.php">Contact</a></li>
                        <li><a href="login.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>
         <section class="home-section bg-dark-alfa-30 parallax-2" data-background="BG6.jpg" id="home">
            <div class="js-height-full container">
                <div class="home-content">
                    <div class="home-text">
                        <h1 class="hs-line-1 font-alt mb-80 mb-xs-30 mt-70 mt-sm-0">
                           Message list
                        </h1>
                    </div>
                </div>

            </div>
        </section>
        <section>
            <div class="container">
                <div class="row mb-20 mt-30">
                   <?php
$username = "root";
$password = "";
$database = "contact";
$mysqli = new mysqli("localhost", $username, $password, $database);

$query = "SELECT * FROM contact";
echo '<center>';
echo "<br><br><br><br><b> <center><h2>Message list</h2><hr></center> </b> <br>";
if ($result = $mysqli->query($query)) {

    while ($row = $result->fetch_assoc()) {
        $name = $row["name"];
        $email = $row["email"];
        $subject=$row["subject"];
		$message=$row["message"];
		echo 'The name:';
		echo '<br>';
        echo '<b>'.$name.'</b><br />';
		echo '<br>';
		echo 'The mail';
		echo '<br>';
        echo '<b>'.$email.'</b><br />';
		echo '<br>';
		echo '<hr>';
    }
echo '</center>';
$result->free();
}
?>
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
</div>
</body>
</html>

