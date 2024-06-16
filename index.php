<?php
include('db.php');
session_start();

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Check if a product is added to the cart
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['buy'])) {
    $productId = $_POST['product_id'];
    $productQty = $_POST['quantity'];

    // Add the product to the cart
    if (!isset($_SESSION['cart'][$productId])) {
        $_SESSION['cart'][$productId] = $productQty;
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Magazin Muzeu</title>
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
    <style>
        .card-body {
            min-height: 500px; 
        }
    </style>
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
                        <li><a href="cart.php">Cart</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <section class="home-section bg-dark-alfa-30 parallax-2" data-background="images/BG4.jpg" id="home">
            <div class="js-height-full container">
                <div class="home-content">
                    <div class="home-text">
                        <h1 class="hs-line-1 font-alt mb-80 mb-xs-30 mt-70 mt-sm-0">
                            Magazin Muzeu
                        </h1>
                    </div>
                </div>

            </div>
        </section>
        <section class="page-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-justify">
                       <h2 class="section-title font-alt mb-70 mb-sm-40">
                        Our Products
                    </h2>
<?php
$result = $conn->query("SELECT * FROM products");

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo '<div class="col-md-4">';
                            echo '<div class="card mb-4">';
                            echo '<img src="images/'. $row['Name'] .'.jpg" class="card-img-top" alt="Product Image">';
                            echo '<div class="card-body">';
                            echo '<h5 class="card-title">' . $row['Name'] . '</h5>';
                            echo '<p class="card-text">' . $row['Descript'] . '</p>';
                            echo '<p class="card-text">Price: $' . $row['Price'] . '</p>';
                            echo '<form method="post" action="index.php">';
                            echo '<input type="hidden" name="product_id" value="' . $row['id'] . '">';
                            echo '<label for="quantity">Quantity:</label>';
                            echo '<input type="number" name="quantity" value="1" min="1">';
                            echo '<button type="submit" name="buy" class="btn btn-primary">Add to Cart</button>';
                            echo '</form>';
                            echo '</div>';
                            echo '</div>';
                            echo '</div>';
                        }
                    } else {
                        echo "No products found";
                    }
                    $conn->close();
?>
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