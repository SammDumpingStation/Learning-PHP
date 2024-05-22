<?php
//checks if the user has tapped on the submit button or just directly go into the signup itself
if (isset($_POST['submit'])) {

    //Catch the user input
    $username = $_POST['username'];
    $pwd = $_POST['password'];

    // Note to Self: This is in order
    // Instantiating the class needed to run the logics
    //Database class will go first since the model is extending from here
    include '../classses/dbh.class.php';
    //Next is the Model Class since the Controller class is extending here
    include '../classses/login.classes.php';
    include '../classses/logincontr.classes.php';

    //This is from the Controller Class (registercontr.class.php)
    $login = new LoginContr($username, $pwd);

    //Running error handlers and user sign-up after that
    $login->loginUser();

    //Redirecting the user back to the page after signing up
    header('Location: ../views/newsfeed.php?error=none');
    exit();
}
