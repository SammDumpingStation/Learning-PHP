<?php

//The "Controller" class
class RegisterContr extends Register
{
    //Methods that will store what we recieve from the register.inc.php file
    private $username;
    private $pwd;
    private $repeatpwd;
    private $email;

    public function __construct($username, $pwd, $repeatpwd, $email)
    {
        $this->username = $username;
        $this->pwd = $pwd;
        $this->repeatpwd = $repeatpwd;
        $this->email = $email;
    }

    //Empty Field Check (Wa gi sudlan ni user sa form)
    private function emptyInput()
    {
        $result = null;
        if (empty($this->username) || empty($this->pwd) || empty($this->repeatpwd) || empty($this->email)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    //Invalid username check (Pang prevent sa SQL injection and cross-site hacking)
    private function invalidUsername()
    {
        $result = null;
        if (!preg_match("/^[a-zA-Z0-9]*$/", $this->username)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    //Invalid Email check (tanawon ani na method if sakto ang syntax sa email na iyahang gi butang)
    private function invalidEmail()
    {
        $result = null;
        if (!filter_var($this->username, FILTER_VALIDATE_EMAIL)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    // Matching the initial password and the repeated password
    private function pwdMatch()
    {
        $result = null;
        if ($this->pwd != $this->repeatpwd) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    //Checks if the email or username is already taken

    private function usernameEmailTaken() {
      $result = null;
      if (!$this->checkUser($this->username, $this->email)) {
        $result = false;
      } else {
        $result = true;
      }
      return $result;
    }

}
