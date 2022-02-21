<?php
session_Start();
require_once "./utils/checkLogin.php";
require_once "./utils/db.php";

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $mail = $_POST["mail"];
    $password = $_POST["password"];
    $rtpassword = $_POST["retype_password"];


}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
<?php require_once "./components/nav.php" ?>

<div>
    <p>Register</p>
    <form action="./register.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <br>
        <label for="mail">Mail:</label>
        <input type="mail" id="mail" name="mail" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <br>
        <label for="retype_password">Retype password:</label>
        <input type="password" id="retype_password" name="retype_password" required>
        <button type="submit">Register</button>
    </form>
</div>

<?php require_once "./components/footer.php" ?>
</body>
</html>