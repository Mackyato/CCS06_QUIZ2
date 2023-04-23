<?php

require "vendor/autoload.php";

session_start();
// 2. Why do you think the session variable assignments are wrapped inside an if-else and try-catch statements?
// The reason is to check the user input if the $_POST variable has value for the fullname, email, 
// and birthday before assigning it to its respective session variables
// Then the try-catch statement is used for error handling if one of the requirements are not fulfilled 
// the catch block will execute and display an error message indicating the issue. 

try {
    if (isset($_POST['fullname'])) {
        $_SESSION['user_fullname'] = $_POST['fullname'];
        $_SESSION['user_email'] = $_POST['email'];
        $_SESSION['user_birthday'] = $_POST['birthday'];

        header('Location: quiz.php');
        exit;
    } else {
        throw new Exception('Missing the basic information.');
    }
} catch (Exception $e) {
    echo '<h1>An error occurred:</h1>';
    echo '<p>' . $e->getMessage() . '</p>';
}
