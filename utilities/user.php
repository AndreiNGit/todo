<?php

include_once("database.php");

class User {
    public $id;
    public $username;
    public $mail;
    public $pass;
    public $isAdmin;
    public $date;
    public $loggedin;

    public function __CONSTRUCT($username, $pass)
    {
        $this->username = $username;
        $this->password = $pass;
    }

    function isRegistered() {
        $stmt = $conn->prepare("SELECT * FROM users WHERE username = :user LIMIT 1");
        $stmt->bind_param(':user', $this->username);
        $stmt->execute();
    }

}

?>