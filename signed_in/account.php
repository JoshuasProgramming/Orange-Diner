<?php
    //Create session
    session_start();

    //prevents the undefined array key ERROR
    error_reporting(0);

    // If the session variable is empty, this
    // means the user is yet to login
    // User will be sent to 'shopOnline.html' page
    // to allow the user to login
    if (!isset($_SESSION['email'])) {
        $_SESSION['msg'] = "You have to log in first";
        header('location: /website%203/signed_out/shopOnline.html');
    }

    $email = $_SESSION['email'];

    //get connection to database
    require_once 'C:\xampp\htdocs\website 3\includes\connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Account</title>
</head>
<body>
    <!--- Section Header which contains a navigation bar-->
    <section class="top" id="landingPage">
        <header>
            <p><a href="index.html" class="landing-direct">Orange Diner</a></p>
                <ul class="navbar">
                    <li><a href="visit.php">visit</a></li>
                    <li><a href='shopOnline.php'>shop online</a></li>
                    <li><a href='recipes.php'>recipies</a></li>
                    <li><a href='ourStory.php'>Our Story</a></li>
                    <li><a href="employment.php">Employment</a></li>
                    <li><a href='account.php'><span class="active">account</span></a></li>
                    <li><a href='logout.php'>logout</a></li>
                </ul>
        </header>
        <h1 class="our-story-header-text">Account<span class="white"><br>Options</span></h1>
        <button class="retry-signin-btn" id="update_account_btn" style="margin:50px -110px; font-size:40px; width:320px; height:150px; border-radius:10px;">Update Account</button>
        <button class="retry-signin-btn" id="delete_account_btn" style="margin:50px -650px; font-size:40px; width:320px; height:150px; border-radius:10px;">Delete Account</button>

        <h3 class="employment-underneath-header-text" style="margin:150px 35px;font-size:55px";>Account Email: <span style="color:black";><?php echo $email?></span></h3>

    <script src="areYouSureDelete.js"></script>
</body>
</html>