<?php
// the class that holds all function
require 'myclass.php';
//our input stored in variable
$password = $_POST['psw'];
$confirm_password = $_POST['con_psw'];

// creating an instance of our class
$myclass = new Myclass();
$reply = $myclass->validatePassword($password, $confirm_password);
echo $reply;
echo $_SESSION['alert'];



if (isset($_POST)) {
    if ($reply == 1) {
        $hash = $myclass->hashPassword($password);
        $_SESSION['hash'] = $hash;
        header("Location:index.php");
    }else {
        header("Location:index.php");
    }
}
