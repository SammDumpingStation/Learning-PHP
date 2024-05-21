<?php
//checks if the user has tapped on the submit button or just directly go into the signup itself
if (isset($_POST['submit'])) {
  
  //Catch the user input
  $username = $_POST['username'];
  $pwd = $_POST['password'];
  $repeatpwd = $_POST['repeat-password'];
  $email = $_POST['email'];

  //Instantiating the class
  include('../classses/register.classes.php');
  include('../classses/registercontr.classes.php');

  $register = new Register($username, $pwd, $repeatpwd, $email);
}
