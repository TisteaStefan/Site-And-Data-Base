<!DOCTYPE html>
<html>
<head>
<style>
body{
background-image: url("BG6.jpg");
background-size: cover;
color: white;
}
center {
    color:white;
}
</style>
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
	<center>
		<?php
		$conn = mysqli_connect("localhost", "root", "", "contact");
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		$name = $_REQUEST['name'];
		$email = $_REQUEST['email'];
		$subject = $_REQUEST['subject'];
		$message = $_REQUEST['message'];
		$sql = "INSERT INTO contact VALUES ('$name',
			'$email','$subject', '$message')";
		if(mysqli_query($conn, $sql)){
			
			echo "<br><br><br><br><h3>Your message was added!<br>";
			echo " <br>You will get a notice on your email when we accept it!<br>";
			echo nl2br("<b>Your name and email :</b> \n$name $email\n ");
			$headers = "From: webmaster@example.com" . "\r\n" .
"CC: somebodyelse@example.com";
//mail("stefantastea4@gmail.com", $subject, $message, $headers);
//mail($email,'Contact istoria arithecturii', 'Mesajul a fost trimis');
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		mysqli_close($conn);
		?>
	<br><br>
    <a href="result.php" >See your reservation in the list.</a>
	</center>
	
</body>
</html>
