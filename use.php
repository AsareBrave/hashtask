<?php

use Hash\Hash;

include_once './Hash/src//Hash.php';
include_once './Hash/src/Password.php';

$password = new Password();
echo $password->generate_password(6, [
    // 'numbers' => true,
    'special_chars' => true
]);