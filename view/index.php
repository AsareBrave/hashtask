<?php

use Hash\Password;

if (isset($_POST['submit'])) {
    require_once '../app/config/autoload.php';
    $password = new Password;
    $generated_password = $password->generatePassword();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">

        <label for="password"><input type="text" name="password" id="password" value="<?php echo $generated_password ?? "";
                                                                                        ?>"></label>
        <button type="submit" name="submit">Click to generate password</button>
    </form>
</body>

</html>