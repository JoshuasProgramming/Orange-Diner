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
        <body>
            <!--Navigation bar & hero section below-->
            <section class='top'>
                <header>
                    <p><a href='index.php' class='landing-direct'>Orange Diner</a></p>
                        <ul class='navbar'>
                            <li><a href="visit.php">visit</a></li>
                            <li><a href='shopOnline.php'>shop online</a></li>
                            <li><a href='recipies.php'><span class="active">recipes</span></a></li>
                            <li><a href='ourStory.php'>Our Story</a></li>
                            <li><a href='employment.php'>Employment</a></li>
                            <li><a href='account.php'>account</a></li>
                            <li><a href='logout.php'>logout</a></li>
                        </ul>
                </header>
                    <div class="products">
                    <!--First cocktaail product-->
                    <div class="card">
                        <img src="../images/cocktail1.jpg" alt="orange cocktail" class="cocktail1-image" style="width:100%">
                        <h1>Orange Cocktail</h1>
                        <p class="price">£4.99</p>
                        <p class="cocktail1-text">Some text about the cocktail. lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p>
                        <p><button class="add-to-cart"><a href="shopOnline.html">Add to Cart</a></button></p>
                    </div>

                    <!--Second cocktaail product-->
                    <div class="card">
                        <img src="../images/smoothie1.jpg" alt="orange Smoothie" class="cocktail1-image" style="width:100%">
                        <h1>Orange Smoothie</h1>
                        <p class="price">£3.99</p>
                        <p class="cocktail1-text">Some text about the Smoothie. lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p>
                        <p><button class="add-to-cart2"><a href="shopOnline.html">Add to Cart</a></button></p>
                    </div>
                    

                    <!--Third cocktaail product-->
                    <div class="card">
                        <img src="../images/juice1.jpg" alt="orange Juice" class="cocktail1-image" style="width:100%">
                        <h1>Orange Juice</h1>
                        <p class="price">£2.49</p>
                        <p class="cocktail1-text">Some text about the Juice. lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p>
                        <p><button class="add-to-cart3"><a href="shopOnline.html">Add to Cart</a></button></p>
                    </div>
                </div>
            </section>
        </body>
</head>
</html>