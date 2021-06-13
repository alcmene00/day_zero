<?php

if (isset($_POST["submit"])){

    $email = $_POST["email"];
    $pwd = $_POST["pwd"];

    require_once 'dbh.php';
    require_once 'func.inc.php';

    if (emptyInput($email, $pwd) !== false){
        header("location: ../account.php?error=emptyinput");
        exit();
    }

    loginUser($conn, $email, $pwd);

}
else {
    header("location: ../account.php");
    exit();
}