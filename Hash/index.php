<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="hash.php" method="post">
        <input type="password" name="psw" id="" placeholder="Password" required>
        <input type="password" name="con_psw" id="" placeholder="Confirm password" required>
        <input type="submit" value="Hash">
        <h3><?php
            session_start();
            if (isset($_SESSION['alert'])) {
                echo $_SESSION['alert'];
                session_destroy();
            }else if($_SESSION['hash']){
                echo $_SESSION['hash'];
                session_destroy();
            } ?></h3>
    </form>
</body>

</html>