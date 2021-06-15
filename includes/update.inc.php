<?php
session_start();

if (isset($_POST["update-submit"])) {
    $updateemail = $_POST["update-email"];
    $updatepwd = $_POST["update-password"];

    require_once 'dbh.php';
    require_once 'func.inc.php';

    if ((emptyInputEmail($updateemail) !== false) && (emptyInputPwd($updatepwd) !== false)){
        header("location: ../profileUsers.php?error=emptyinput");
        exit();
    }
    else if (emptyInputEmail($updateemail) !== false){
        updatePwd($conn, $updatepwd);
    }
    else if (emptyInputPwd($updatepwd) !== false){
        updateEmail($conn, $updateemail);
    }
    else{
        updateUser($conn, $updateemail, $updatepwd);
    }
}
else {
    if (str_contains($_SESSION["useremail"], '@dayzero.com')){
        header("location: ../profileAdmins.php");
            exit();
    }
    else {
        header("location: ../profileUsers.php");
        exit();
    }
}
