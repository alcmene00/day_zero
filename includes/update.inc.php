<?php
session_start();

if (isset($_POST["update-submit"])) {
    $updateemail = $_POST["update-email"];
    $updatepwd = $_POST["update-password"];

    require_once 'dbh.php';
    require_once 'func.inc.php';

    if (emptyInput($updateemail, $updatepwd) !== false){
        header("location: ../profileUsers.php?error=emptyinput");
        exit();
    }

    updateUser($conn, $updateemail, $updatepwd);
}
else {
    if ($_SESSION["useremail"] === "admin@dayzero.com"){
        header("location: ../profileAdmins.php");
        exit();
    }
    else {
        header("location: ../profileUsers.php");
        exit();
    }
}