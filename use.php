<?php

use Hash\Hash;

include_once './Hash/Hash.php';
include_once './Hash/Password.php';

$password = new Password();
echo $password->generate_password(6, [
    // 'numbers' => true,
    'special_chars' => true
]);