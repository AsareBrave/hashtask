<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <input type="submit" value="generatehash" name="get_hash">
    </form>
</body>

</html>
<?php
if (isset($_POST['get_hash'])) {
    include_once "h.php";
}

?>