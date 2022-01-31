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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel='stylesheet' href='../style.css'>
    <title>Orange Diner</title>
</head>
<body>
     <!--Navigation bar & hero section below-->
    <section class='top'>
        <header>
            <p><a href='index.php' class='landing-direct'>Orange Diner</a></p>
                <ul class='navbar'>
                    <li><a href="visit.php">visit</a></li>
                    <li><a href='shopOnline.php'>shop online</a></li>
                    <li><a href='recipes.php'>recipies</a></li>
                    <li><a href='ourStory.php'>Our Story</a></li>
                    <li><a href="employment.php"><span class="active">Employment</span></a></li>
                    <li><a href='account.php'>account</a></li>
                    <li><a href='logout.php'>logout</a></li>
                </ul>
        </header>
        <h1 class="employment-header-text">Employment <span class="white">Opportunities</span></h1>
        <h3 class="employment-underneath-header-text">If you're interested in finding a home with a company, whether for a time in your life or for your lifetime, you've come to the right place!</h3>
        <button class="employment-apply-now-btn">Apply Now</button>
    </section>  
</body>
</html>