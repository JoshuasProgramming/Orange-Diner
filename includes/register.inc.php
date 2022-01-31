<?php
    //require the database connection
    require_once "connection.php";

    if(isset($_POST["submit"])){
        //User is trying to register to website => create variables based on user information 
        //from the register form in ourStory.html
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirm_passowrd = $_POST['confirm_password'];

        //Selecting all the email fields from the database
        //to then check if the user is trying to register using any
        //of them.
        $sql_email = "SELECT * FROM users WHERE email='$email'";
        $result_email = mysqli_query($conn, $sql_email);

        //Check if the password the user has inserted is the same as the 'confirm_passowrd' input
        if($password == $confirm_passowrd){
            //check if email is already is use => if TRUE
            if(mysqli_num_rows($result_email) > 0){
                //echo "Sorry, the email of ".$email." already taken";
                header("Location: /website%203/signed_out/alreadyTaken.html");

            //check if email is already is use => if FALSE
            } else if(mysqli_num_rows($result_email) == 0){
                $sql = "INSERT INTO users (firstname, lastname, email, userPassword) 
                VALUES ('$firstname', '$lastname', '$email', '$password')";

                if(mysqli_query($conn, $sql)){
                    //echo "sent to database ('users' table)";
                    header("Location: /website%203/signed_out/accountCreated.html");
                } else {
                    echo "ERROR: Register data wasn't stored in the database ('users' table)";
                }

            }
        //Check if passowrd is not equal the 'confirm_password'.
        } else if($password !== $confirm_passowrd){
            header("Location: /website%203/signed_out/passwordsDontMatch.html");
        }
    }
    
?>