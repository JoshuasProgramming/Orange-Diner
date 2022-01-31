<?php
    //session_start() creates a session or resumes the current one based on a 
    //session identifier passed via a GET or POST request, or passed via a cookie.
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

    //grabbing the database connection to phpMYAdmin
    require_once 'C:\xampp\htdocs\website 3\includes\connection.php';

    //Catch post data once the user presses the update button and process information
    if(isset($_POST['update'])){
        $email = $_POST['email'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $password = $_POST['password'];
        $newPassword = $_POST['newPassword'];

        //check if content is present
        //Checking if the password the user entered isn't the same as the new password
        if($password == $newPassword){
            header("Location:/website%203/signed_in/passwordEqualsNewPassword.php");
        } else {
            //update database table 'users'

            //1.create sql UPDATE query
            $sql_query = ("UPDATE users SET userPassword='$newPassword' 
            WHERE email='$email' AND firstname='$firstname' AND
            lastname='$lastname' AND userPassword='$password'");

            //2.create mysqli_query with the database connection and the sql UPDATE query
            $result = mysqli_query($conn, $sql_query);
            //Create failure message
            if(!$sql_query){
                die("Failed to update database. Check query string.");
            }
            else if($sql_query){
                header('C:\xampp\htdocs\website 3\signed_in\logout.php');
            } else {
                echo "no changes made";
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Orange Diner</title>
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
        <!--container for the register and login forms-->
        
        <div class="register-container">
            <form action="#" method="post" autocomplete="off">
                <h2 class="register-container-header"><center>Update Account<center></h2>
                <input placeholder="first name" name="firstname" class="register-input" autocomplete="off" required><br>
                <input placeholder="last name" name="lastname" class="register-input" autocomplete="off" required><br>
                <input placeholder="email" value="<?php echo $_SESSION['email']?>" name="email" class="register-input" type="email" autocomplete="off" required><br>
                <input placeholder="password" name="password" class="register-input" type="password" id="register_password" autocomplete="off" required><br>
                <input placeholder="new password" name="newPassword" class="register-input" type="password" id="register_confirm_password" autocomplete="off" required>
                <button class="register-container-btn" name="update" type="submit">Update</button>
                <input class="checkbox-register-btn" id="checkbox_register" type="checkbox">
                <label for="checkbox_register" class="show-password-register">Show Password</label>
            </form>
        </div>
    </section>
    <script src="revealPasswordUpdate.js"></script>
</body>
</html>