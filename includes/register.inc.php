<?php
//checks if the user has tapped on the submit button or just directly go into the signup itself
if (isset($_POST['submit'])) {
  
  //Catch the user input
  $username = $_POST['username'];
  $pwd = $_POST['password'];
  $repeatpwd = $_POST['repeat-password'];
  $email = $_POST['email'];

  // Note to Self: This is in order
  // Instantiating the class needed to run the logics
  //Database class will go first since the model is extending from here
  include('../classses/dbh.class.php');
  //Next is the Model Class since the Controller class is extending here
  include('../classses/register.classes.php');
  include('../classses/registercontr.classes.php');

  //This is from the Controller Class (registercontr.class.php)
  $register = new RegisterContr($username, $pwd, $repeatpwd, $email);

  //Running error handlers and user sign-up after that
  $register->registerUser();

  //Redirecting the user back to the page after signing up
  header('Location: ../views/register.php?error=none');
  exit();
}

else {
  echo "Error! The submit button is not set";
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);

}