<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Halifax Canoe & Kayak | Thank You</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="img/favicon.ico">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body class="form-body">
    <header>
        <nav class="navbar">
            <a href="index.html" class="logo"><img src="./img/paddle-white.png" alt="logo" class="logo"></a>

            <p>Halifax Canoe &amp; Kayak</p>

            <ul class="nav-menu">
                <li class="nav-item">
                    <a href="index.html" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="book.html" class="nav-link">Book a Trip</a>
                </li>
                <li class="nav-item">
                    <a href="admin_login.html" class="nav-link">Admin Login</a>
                </li>
            </ul>

            <div class="hamburger-menu">
                <span class="buns"></span>
                <span class="buns"></span>
                <span class="buns"></span>
            </div>

        </nav>
    </header>

    <main class="form-canvas">
        <section class="form-container">
            <h2>Thank You</h2>
            <div class="sub-summary">
                <p>Thank you<?php echo $_GET["email"];?> <br> 
                    We will contact you about the <?php echo $_GET["location"]; ?> trip on 
                    <?php echo $_GET["date"]; ?>
                </p>
            </div>
        </section>
    </main>

    <footer>
        <div class="footer-container">
            <div class="footer-item">
                <h4>Halifax Canoe &amp; Kayak</h4>
                <p>
                    Founded in 1996, Halifax Canoe &amp; Kayak is Halifax's premier destination
                    for guided group and private canoe and kayak tours. Come experience Halifax
                    in a new light!
                </p>
            </div>
            <div class="footer-item">
                <h4>Contact Us</h4>
                <p>1875 Upper Water Street
                    </br>
                    Halifax, Nova Scotia B3J&nbsp;1S9
                </p>
                <p><a href="tel:19024426565">(902) 442-6565</a></p>
                <p><a href="mailto:paddle@hfxcanoe.ca">paddle@hfxcanoe.ca</a></p>
            </div>

            <div class="footer-item">
                <h4>Let's Get Social</h4>
                <div id="social">
                    <a href="https://www.facebook.com"><i class="fa fa-facebook fa-2x"></i></a>
                    <a href="https://www.instagram.com"><i class="fa fa-instagram fa-2x"></i></a>
                    <a href="https://www.twitter.com"><i class="fa fa-twitter fa-2x"></i></a>
                    <a href="https://www.pinterest.com"><i class="fa fa-pinterest fa-2x"></i></a>
                </div>
                <p class="copyright">&copy; 2022 Halifax Canoe &amp; Kayak</p>
            </div>
        </div>
    </footer>

    <script src="main.js"></script>
</body>

</html>