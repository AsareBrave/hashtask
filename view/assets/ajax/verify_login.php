<?php
require_once '../../../model/Config.php';

require_once  Config::getDirName() . '/app/config/autoload.php';
return;
// use Hash\Hash;

// if (isset($_POST['email']) && isset($_POST['password'])) {
//     $email = $_POST['email'];
//     $password = $_POST['password'];

//     $hashed_password = Hash::make($password);

//     $query = "SELECT email, hash FROM WHERE hash = $hashed_password";
//     echo $query;
//     $result = DB::query($query);
// }
