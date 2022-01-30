<?php
    //Create session
    session_start();

    // If the session variable is empty, this
    // means the user is yet to login
    // User will be sent to 'shopOnline.html' page
    // to allow the user to login
    if (!isset($_SESSION['email'])) {
        $_SESSION['msg'] = "You have to log in first";
        header('location: /website%203/signed_out/shopOnline.html');
    }

    //prevents the undefined array key ERROR
    error_reporting(0);

?>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel='stylesheet' href='../style.css'>
    <body>
        <!--Navigation bar & hero section below-->
        <section class='top'>
            <header>
                <p><a href='index.php' class='landing-direct'>Orange Diner</a></p>
                    <ul class='navbar'>
                        <li><a href="visit.php"><span class="active">Visit</span></a></li>
                        <li><a href='shopOnline.php'>shop online</a></li>
                        <li><a href='recipes.php'>recipes</a></li>
                        <li><a href='shopOnline.php'>Our Story</a></li>
                        <li><a href='employment.php'>Employment</a></li>
                        <li><a href='account.php'>account</a></li>
                        <li><a href='logout.php'>logout</a></li>
                    </ul>
            </header>
            <!---Section will contain a google map api--->
            <section class="visit-section" id="visit">
            <!--map contains the Google map api information-->
            <div id="map" style="width:490px; height:490px;" class="google-api">
            </div>
            <h1 class="visit-section-header">Directions<span style="color:white"><br>24<br>Lorem ipsum</span></h1>
        </section>
        <script src="../script.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC2ZOOoY0T_Z-BXajRx1TgsNc3GJr9_aQw&callback=myMap"></script>
    </body>
</html>