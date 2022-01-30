<?php

//Create session
session_start();

//prevents the undefined array key ERROR
error_reporting(0);

//require the database connection
require_once 'connection.php';

//isset checks if the varible 'submit' is set => outputs a true or false output. 
if(isset($_POST["submit"])){
        
    //making variables of the user's details + preventing sql injection
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['userPassword']);

    //$password_hashed = password_hash($password, PASSWORD_DEFAULT);

    //SELECT all information from the user table and check if it's equal to the login input
    $sql_query = "SELECT * FROM users WHERE email='$email' AND userPassword='$password'";
    $result = mysqli_query($conn, $sql_query);
    $row = mysqli_fetch_array($result);

    $count = mysqli_num_rows($result);

    //If the sql SELECT query is correct we'll turn the page into an HTML welcoming page,which has a link to 'update account'
    //Page will also concat the user's name onto the navigation bar as well as the h1 welcoming text
    if($count == 1){
        $_SESSION['email'] = $_POST['email'];

        header("Location:/website%203/signed_in/index.php");
    //If the user's login information doesn't work, they'll be given a "can't login" message/error.
    } else {
        //echo "Can't login ".$email." ".$password;
        header("Location:/website%203/signed_out/cantLogin.html");
    }
}
?>