<?php

use PHPMailer\PHPMailer\PHPMailer;

require_once './app/Controllers/Mail/PHPMailer.php';
require_once './app/Controllers/Mail/SMTP.php';
require_once './app/Controllers/Mail/Exception.php';

$mail = new PHPMailer(true);

var_dump($mail);