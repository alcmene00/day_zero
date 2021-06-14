<?php

if (isset($_POST["signup-submit"])) {
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];

    require_once 'dbh.php';
    require_once 'func.inc.php';

    if (emptyInput($email, $pwd) !== false){
        header("location: ../account.php?error=emptyinput");
        exit();
    }

    if (invalidEmail($email) !== false){
        header("location: ../account.php?error=invalidemail");
        exit();
    }

    if (emailExists($conn, $email) === false){
        header("location: ../account.php?error=emailtaken");
    }

    createUser($conn, $email, $pwd);
}
else {
    header("location: ../account.php");
    exit();
}
