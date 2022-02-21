<?php 
if(!isset($_SESSION["username"]) && ($_SERVER["SCRIPT_NAME"] != "/register.php" && $_SERVER["SCRIPT_NAME"] != "/login.php")) {
    header("Location: ../login.php");
    die();
}

if(isset($_SESSION["username"]) && ($_SERVER["SCRIPT_NAME"] == "/register.php" || $_SERVER["SCRIPT_NAME"] == "/login.php"))
{
    header("Location: ../index.php");
    die();
}
?>