<?php
require_once '../../model/Config.php';

// loads necessary classes
require_once '../../app/config/autoload.php';

$generated_password;

if (isset($_POST['submit'])) {
    $password = new Hash\Password;
    $generated_password = $password->generatePassword();
}

if (isset($_POST['save_password'])) {
    $generated_password = $_POST['password'];
    if (isset($generated_password)) {
        $hash = Hash\Hash::make($generated_password);
        $result = DB::insert('password_list', [
            'account_name' => 'whatsapp',
            'hash' => $hash,
            'date_created' => date('Y-m-d H:i:s')
        ]);
    } else {
        echo "Please generate a password";
    }
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
        <button type="submit" name="save_password">Save this password</button>
    </form>
</body>

</html>