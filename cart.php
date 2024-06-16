<?php
include('db.php');
session_start();

// Handle product removal when the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['remove'])) {
    $removeProductId = $_POST['remove_product_id'];

    // Remove the product from the cart
    unset($_SESSION['cart'][$removeProductId]);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Magazin Muzeu - Your Cart</title>
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
        <section class="page-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-title font-alt mb-70 mb-sm-40">
                            Your Cart
                        </h2>
                    </div>

                    <?php
                    $totalPrice = 0;
                    if (!empty($_SESSION['cart'])) {
                    foreach ($_SESSION['cart'] as $productId => $quantity) {
                        $productResult = $conn->query("SELECT * FROM products WHERE id = $productId");
                        if ($productResult->num_rows > 0) {
                            $product = $productResult->fetch_assoc();
                            echo '<div class="col-md-4">';
                            echo '<div class="card mb-4">';
                            echo '<div class="card-body">';
                             echo '<img src="'. $product['Name'] .'.jpg" class="card-img-top" alt="Product Image">';
                            echo '<h5 class="card-title">' . $product['Name'] . '</h5>';
                            echo '<p class="card-text">Quantity: ' . $quantity . '</p>';
                            echo '<p class="card-text">Price: $' . $product['Price'] * $quantity . '</p>';
                             $productTotal = $product['Price'] * $quantity;
                                echo '<p class="card-text">Price: $' . $productTotal . '</p>';
                                $totalPrice += $productTotal;
                            echo '<form method="post" action="cart.php">';
                            echo '<input type="hidden" name="remove_product_id" value="' . $productId . '">';
                            echo '<button type="submit" name="remove" class="btn btn-danger">Remove</button>';
                            echo '</form>';
                            echo '</div>';
                            echo '</div>';
                            echo '</div>';
                        }
                    }
                         echo '<div class="col-lg-12 text-center">';
                        echo '<h4>Total Price: $' . $totalPrice . '</h4>';
                        echo '</div>';
                } else {
                    echo '<div class="col-lg-12 text-center">';
                    echo '<p>Your cart is empty</p>';
                    echo '</div>';
                }
                    ?>
                </div>
            </div>
        </section>
        <?php
// Handle product removal when the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['remove'])) {
    $removeProductId = $_POST['remove_product_id'];

    // Remove the product from the cart
    unset($_SESSION['cart'][$removeProductId]);
}
       ?>
        <footer class="page-section bg-gray-lighter footer pb-60">
            <div class="container">
                <div class="local-scroll wow fadeInDown footer-title mb-40" data-wow-duration="1.5s">
                    Muzee
                </div>
                <div class="footer-text">
                    <div class="footer-made">
                        <p class="mb-80" style="color:black;font-size:16px">
                            Orașul București are numeroase muzee pe care merită să le vezi măcar o dată în viață. </p>
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
</body>

</html>