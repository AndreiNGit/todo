<?php
session_Start();
//echo var_dump($_SERVER);
// /die();
require_once "./utils/checkLogin.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <?php require_once "./components/nav.php" ?>

    <div>
        <p>Login</p>
        <form action="./login.php" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username">
            <br>
            <label for="password">Password:</label>
            <input type="text">
            <button type="submit">Register</button>
        </form>
    </div>

    <?php require_once "./components/footer.php" ?>
</body>
</html>