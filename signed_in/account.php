<?php
    //Create session
    session_start();

    //prevents the undefined array key ERROR
    error_reporting(0);

    echo $_SESSION['email'];
    echo $_SESSION['lastname'];
?>