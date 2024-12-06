<?php
session_start();
// header('Location: http://localhost:3000/partie3/second.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<!-- exo 3 -->
    <!-- <form action="./second.php" method="post">
        <label for="login">login</label><input type="text" name="login">
        <label for="password">password</label><input type="password" name="password">
        <input type="submit" value="send">
    </form> -->

    <?php
    // exo 1
    // var_dump($_SERVER["HTTP_USER_AGENT"]);
    // var_dump($_SERVER['REMOTE_ADDR']);
    // var_dump($_SERVER['SERVER_NAME']);

    // exo 2
    // setup 
    $_SESSION["firstName"] = "nadir";
    $_SESSION["lastName"] = "bensadi";
    $_SESSION["age"] = "23";

    // return;

    
    ?>
</body>

</html>